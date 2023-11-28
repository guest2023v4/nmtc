<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Models\JoinRoomRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    /*
    |
    |
    |-------------------------------------
    |    ROOM MANAGEMENT  ##  NMTC  ##   |
    |-------------------------------------
    |
    |
    */
    public function createRoom(Request $request)
    {
        session()->put('route', 'room');
        $request->validate([
            'roomSize' => 'required',
            'type' => 'boolean',
            'family' => 'required|in:0,1,2',
            'proof' => 'required_if:family,1|file | mimes:jpg,gif,png'
        ]);
        // Verify if user already have room
        if (Auth::user()->room_id != null) {
            return redirect()->route('user.dashboard')->with('error', 'You already have a room');
        } else {
            $available = RoomType::where('label', $request->roomSize)->value('rooms_nb') - Room::where('capacity', $request->roomSize)->count() > 0;
            if ($available) {
                $code = "";
                do {
                    $code = strtoupper(substr(md5(microtime()), rand(0, 26), 5));
                } while (Room::where('code', $code)->exists());
                $room = new Room;
                if ($request->family == '2')
                    $gender = Auth::user()->gender == 'M' ? 0 : 1;
                else {
                    $room->family_case = $request->family;
                    $gender = 2;
                    $room->confirmed = 0;
                    if ($request->family == '1') {
                        if ($request->file('proof')) {
                            $file = $request->file('proof');
                            $filename = $room->id . "proof_" . date('YmdHi') . "." . $file->getClientOriginalExtension();
                            $file->move(public_path('room_proof'), $filename);
                            $room->note = $filename;
                        }
                    }
                }
                $room->gender = $gender;
                $room->capacity = $request->roomSize;
                $room->code = $code;
                $room->type = 0;
                $room->is_all_paid = 0;
                $room->room_type_id = RoomType::where('label', $request->roomSize)->value("id");
                $room->room_leader_id = Auth::id();
                if ($room->save()) {
                    $room->refresh();
                    User::where('id', Auth::user()->id)->update(['room_id' => $room->id]);
                    if (JoinRoomRequest::where('user_id', Auth::id())->exists())
                        JoinRoomRequest::where('user_id', Auth::id())->delete();
                    return redirect()->back()->with('success', 'Room created successfully');
                } else {
                    return redirect()->back()->with('error', 'Failed to create room');
                }
            } else {
                return redirect()->back()->with('error', 'No rooms available');
            }
        }

    }

    public function joinPublicRoom(Request $request)
    {
        $gender = Auth::user()->gender == 'M' ? 0 : 1;
        $user = User::find(Auth::id());
        // Get all public rooms and check capacity
        $public_rooms = Room::where([['type', '=', 1], ['gender', '=', $gender]])->get();
        $room = null;
        foreach ($public_rooms as $key => $room_value) {
            if ($room_value->capacity > $room_value->users->count()) {
                $room = $room_value;
                break;
            }
        }
        // Verify if there's a public room
        if ($room != null) {
            $user->room_id = $room->id;
            if ($user->update()) {
                if (JoinRoomRequest::where('user_id', $user->id)->exists())
                    JoinRoomRequest::where('user_id', $user->id)->delete();
                return redirect()->back()->with('success', 'Joined public room successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to join public room');
            }
        } else {
            // Else create a public room if possible
            $all_rooms_types = RoomType::all();
            $room_type = 0;
            $max_places = 0;
            foreach ($all_rooms_types as $key => $room_type_value) {
                $places = $room_type_value->nb_rooms - $room_type_value->rooms->count();
                if ($room_type_value->nb_rooms - $room_type_value->rooms->count() > $max_places) {
                    $max_places = $places;
                    $room_type = $room_type_value->label;
                }
            }
            if ($max_places != 0) {
                $code = "";
                do {
                    $code = strtoupper(substr(md5(microtime()), rand(0, 26), 5));
                } while (Room::where('code', $code)->exists());
                $room = new Room;
                $room->gender = $gender;
                $room->capacity = $room_type;
                $room->code = $code;
                $room->type = 1;
                $room->is_all_paid = 0;
                $room->room_type_id = RoomType::where('label', $room_type)->value("id");
                $room->room_leader_id = Auth::id();
                if ($room->save()) {
                    $room->refresh();
                    User::where('id', Auth::user()->id)->update(['room_id' => $room->id]);
                    $allJoinRequests = JoinRoomRequest::where('user_id', $user->id)->delete();
                    return redirect()->route('user.dashboard')->with('success', 'Public room created successfully');
                } else {
                    return redirect()->route('user.dashboard')->with('error', 'Failed to create public room');
                }
            } else {
                return redirect()->route('user.dashboard')->with('error_room', 'No rooms available');
            }
        }
    }

    public function leaveRoom(Request $request)
    {
        session()->put('route', 'room');
        $user = User::find(Auth::user()->id);
        $room = $user->room;
        // Verify if user have a room or no
        if ($room->first() != null) {
            $user->room_id = null;
            $update = $user->update();
            $user->refresh();
            $room->refresh();
            if ($room->room_leader_id === $user->id && $update) {
                $roomate = $room->users->first();
                if ($roomate == null) {
                    if (JoinRoomRequest::where('room_id', $room->id)->exists())
                        $update = JoinRoomRequest::where('room_id', $room->id)->delete();
                    $room->delete();
                } else {
                    $room->room_leader_id = $roomate->id;
                    $update = $update && $room->update();
                }
            }

            if ($update) {
                return redirect()->back()->with('success', 'Room left successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to leave room');
            }
        } else {
            return redirect()->back()->with('error', 'You dont have a room');
        }
    }
    public function deleteRoom(Request $request)
    {
        $request->validate([
            'roomID' => 'required',
        ]);
        $room = Room::find($request->roomID);
        if ($room != null) {
            if ($room->delete())
                return redirect()->back()->with('success', 'Room deleted successfully');
            else
                return redirect()->back()->with('error', 'Error: Room not deleted');
        } else {
            return redirect()->back()->with('error', 'Room not found');
        }
    }

    public function deleteExpired(Request $request)
    {
        $n = 0;
        $unpaid_rooms = Room::where('is_all_paid', 0)->get();
        foreach ($unpaid_rooms as $key => $room) {
            $has_one_paid = 0;
            foreach ($room->users as $user) {
                if ($user->pay_status_pack == 1) {
                    $has_one_paid = 1;
                    break;
                }
            }
            if ($has_one_paid == 0) {
                $now = date('Y-m-d H:i:s');
                $updated_at = $room->updated_at;
                $diff = strtotime($now) - strtotime($updated_at);
                $diff = $diff / (60 * 60 * 24);
                if ($diff > 1) {
                    if ($room->delete())
                        $n++;
                }
            }
        }
        return redirect()->back()->with('success', "$n Rooms deleted successfully");
    }

    public function refreshRooms(Request $request)
    {
        $n = 0;
        $rooms = Room::all();
        foreach ($rooms as $key => $room) {
            $is_all_paid = 1;
            foreach ($room->users as $user) {
                if ($user->pay_status_pack == 0) {
                    $is_all_paid = 0;
                    break;
                }
            }
            if ($room->is_all_paid != $is_all_paid) {
                if ($is_all_paid == 1 && $room->users->count() == $room->capacity) {
                    $room->is_all_paid = $is_all_paid;
                    $room->update();
                    $n++;
                }
                // else {
                //     $room->is_all_paid = 0;
                //     $room->update();
                //     $n++;
                // }

            }
        }
        return redirect()->back()->with('success', "$n Rooms updated successfully");
    }
}
