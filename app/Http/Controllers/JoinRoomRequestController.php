<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JoinRoomRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JoinRoomRequestController extends Controller
{
    public function createJoinRequest(Request $request)
    {
        session()->put('route', 'room');
        $request->validate([
            'code' => 'required',
        ]);
        $room = Room::where('code', $request->code)->first();
        // Verify if room code is true
        if ($room) {
            if (JoinRoomRequest::where('user_id', Auth::user()->id)->where('room_id', $room->id)->exists() || Auth::user()->room_id != null) {
                return redirect()->back()->with('error', 'You already have a reservation');
            } else {
                if ($room->capacity > Room::find($room->id)->users->count()) {
                    $gender = Auth::user()->gender == 'M' ? 0 : 1;
                    if ($room->gender == $gender || $room->gender == 2) {
                        $joinRequest = new JoinRoomRequest();
                        $joinRequest->room_id = $room->id;
                        $joinRequest->user_id = Auth::user()->id;
                        $joinRequest->status = 0;
                        $joinRequest->save();
                        if ($joinRequest->save()) {
                            return redirect()->back()->with('success', 'Join request created successfully');
                        } else {
                            return redirect()->back()->with('error', 'Failed to create join request');
                        }
                    } else {
                        //Different gender, check for family cases
                        return redirect()->back()->with('error', 'Failed to create join request');
                    }

                } else {
                    return redirect()->back()->with('error', 'Room is full');
                }
            }
        } else {
            return redirect()->back()->with('error', 'Room not found');
        }
    }

    public function cancelJoinRequest(Request $request)
    {
        session()->put('route', 'room');
        $request->validate([
            'room_id' => 'required',
        ]);
        $joinRequest = JoinRoomRequest::where('user_id', Auth::id())->where('room_id', $request->room_id)->first();
        if ($joinRequest != null) {
            if ($joinRequest->delete()) {
                return redirect()->back()->with('success', 'Join request deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to delete join request');
            }
        } else {
            return redirect()->back()->with('success', 'Join request deleted successfully');
        }
    }

    public function acceptJoinRequest(Request $request)
    {
        session()->put('route', 'room');
        $user = User::find($request->id);
        $room = Room::find(Auth::user()->room->id);
        $joinRequest = JoinRoomRequest::where('user_id', $request->id)->where('room_id', $room->id)->first();
        if ($joinRequest != null) {
            if ($room->capacity > Room::find($room->id)->users->count()) {
                if($room->gender == 2 && $room->confirmed == 1) {
                    $room->confirmed = 0;
                }
                $user->room_id = $room->id;
                if ($user->update() && $room->update()) {
                    $allJoinRequests = JoinRoomRequest::where('user_id', $request->id)->delete();
                    return redirect()->back()->with('success', 'Join request accepted successfully');
                } else {
                    return redirect()->back()->with('error', 'Failed to accept join request');
                }
            } else {
                return redirect()->back()->with('error', 'Room is full');
            }
        }
    }

    public function rejectJoinRequest(Request $request)
    {
        session()->put('route', 'room');

        $joinRequest = JoinRoomRequest::where('user_id', $request->id)->where('room_id', Auth::user()->room_id)->first();
        if ($joinRequest != null) {
            if ($joinRequest->delete()) {
                return redirect()->back()->with('success', 'Join request rejected successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to reject join request');
            }
        } else {
            return redirect()->back()->with('success', 'Join request rejected successfully');
        }
    }
}