<?php

namespace App\Http\Controllers;

use Auth;
use DateTime;
use App\Models\bus;
use App\Models\Pack;
use App\Models\Room;
use App\Models\Team;
use App\Models\User;
use App\Models\rooms;
use App\Models\cinBack;
use App\Models\Control;
use App\Models\cinFront;
use App\Models\Payments;
use App\Models\RoomType;
use App\Models\teamDetail;
use App\Models\JoinRequest;
use App\Models\reservation;
use App\Models\banktransfer;
use Illuminate\Http\Request;
use App\Models\bus_reservation;
use App\Models\JoinRoomRequest;
use App\Models\JoinTeamRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;


class UserController extends Controller
{
    public function index()
    {
        $controls = Control::first();
        $user = User::find(Auth::id());
        $data = [];
        if (Auth::user()->reg_step == 2 && Auth::user()->reg_step >= 4) {
            return redirect()->route('user.uploadCIN');
        } elseif (Auth::user()->reg_step == 1) {
            $user = User::find(Auth::user()->id);
            $user->reg_step = 2;
            $user->save();
            return view('dashboards.users.done');
        } elseif (Auth::user()->reg_step == 0) {
            $packs = Pack::select('id', 'type', 'amount')->where('for_participants', true)->get();
            return view('dashboards.users.complete', compact('packs'));
        }
        /* BEGIN::ROOMS */
        if ($controls->rooms == 1) {
            $data['c_rooms'] = true;
        } else {
            $data['c_rooms'] = false;
        }
        if (Auth::user()->room_id != null) {
            $room = Room::find(Auth::user()->room_id);
            if ($room->users->count() == $room->capacity && $room->is_all_paid == 0) {
                $paid = 1;
                foreach ($room->users as $key => $us) {
                    if ($us->pay_status_pack == 0) {
                        $paid = 0;
                        break;
                    }
                }
                if ($paid == 1) {
                    $room->update(['is_all_paid', 1]);
                    $room->refresh();
                }
            }
            $data['room'] = $room;
            $data['room_roomates'] = $room->users()->get()->toArray();
            if ($room->roomLeader()->first() != null)
                $data['room_leader'] = $room->roomLeader()->first()->toArray();
            if ($room->joinRoomRequests()->first() != null)
                $data['room_join_requests'] = $room->joinRoomRequests()->get()->toArray();
        } else {
            if (JoinRoomRequest::where('user_id', Auth::id())->first() != null)
                $data['rooms_self_join_requests'] = $user->joinRoomRequests;
        }
        /* END::ROOMS */

        /* BEGIN::BUS */
        if ($controls->bus == 1) {
            $data['c_bus'] = true;
        } else {
            $data['c_bus'] = false;
        }
        if (Auth::user()->bus_id != null) {
            $bus = Bus::find(Auth::user()->bus_id);
            $data['bus'] = $bus;
        }
        $data['buses'] = Bus::all();
        /* END::BUS */

        /* BEGIN::TEAMS */
        if ($controls->teams == 1) {
            $data['c_teams'] = true;
        } else {
            $data['c_teams'] = false;
        }
        if (Auth::user()->team_id != null) {
            $team = Team::find(Auth::user()->team_id);
            if ($team->users->count() == $team->capacity && $team->is_all_paid == 0) {
                $paid = 1;
                foreach ($team->users as $key => $us) {
                    if ($us->pay_status_pack == 0) {
                        $paid = 0;
                        break;
                    }
                }
                if ($paid == 1) {
                    $team->update(['is_all_paid', 1]);
                    $team->refresh();
                }
            }
            $data['team'] = $team;
            $data['team_teammates'] = $team->users()->get()->toArray();
            if ($team->teamLeader()->first() != null)
                $data['team_leader'] = $team->teamLeader()->first()->toArray();
            if ($team->joinTeamRequests()->first() != null)
                $data['team_join_requests'] = $team->joinTeamRequests()->get()->toArray();
        } else {
            if (JoinTeamRequest::where('user_id', Auth::id())->first() != null)
                $data['teams_self_join_requests'] = $user->joinTeamRequests;
        }
        /* END::TEAMS */

        if ($controls->payment == 1) {
            $data['c_payment'] = true;
            if (Auth::user()->payagent_id != null) {
                $payagent = User::find(Auth::user()->payagent_id);
                $data['payagent'] = $payagent;
            }
            $payagents = User::select('id', 'name', 'phone', 'city','university')->where('role', 3)->get();
            $data['payagents'] = $payagents;
        } else {
            $data['c_payment'] = false;
        }

        if ($controls->registration == 1) {
            $data['c_reg'] = true;
        } else {
            $data['c_reg'] = false;
        }
        // $cin_uploaded = isset(auth()->user()->cin_front) && isset(auth()->user()->cin_back);
        if (Auth::user()->role >= 4)
            return view('dashboards.users.index', compact('data'));
        elseif (Auth::user()->role >= 2)
            return view('dashboards.organizers.account', compact('data'));
        else
            return view('dashboards.admins.account', compact('data'));

    }

    public function store(int $jsVariable)
    {
        //$jsVariable = $request->input('jsVariable');

        // You can store $jsVariable in a session or database here
        // For example, to store in a session:
        //dd($jsVariable);  
        session(['payment_type' => $jsVariable]);
        //echo $jsVariable;  
        // Return a response if needed
        return response()->json(['jsVariable' => $jsVariable]);
    }


    public function uploadCIN()
    {
        if (Auth::user()->reg_step != 2) {
            $user = User::find(Auth::User()->id);
            $user->reg_step = 2;
            $user->update();
        }
        $cin = Auth::User()->cin_front != null;
        $cinBack = Auth::User()->cin_back != null;
        $madhmoun = Auth::User()->madhmoun != null;
        if(Auth::user()->role == 0 || Auth::user()->role == 1)
            return view('dashboards.admins.cin', compact(['cin', 'cinBack', 'madhmoun']));
        elseif(Auth::user()->role == 2 || Auth::user()->role == 3)
            return view('dashboards.organizers.cin', compact(['cin', 'cinBack', 'madhmoun']));
        elseif(Auth::user()->role == 4 || Auth::user()->role == 5 || Auth::user()->role == 6)
            return view('dashboards.users.cin', compact(['cin', 'cinBack', 'madhmoun']));
    }

    public function profile()
    {
        return view('dashboards.users.profile');
    }

    public function settings()
    {
        $cities = ['Ariana', 'Ben Arous', 'Bizerte', 'Gabes', 'Gafsa', 'Jendouba', 'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 'Monastir', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'];
        $data['c_reg'] = Control::first()->value('registration');
        return view('dashboards.users.settings', compact(['data', 'cities']));
    }

    public function completeProfile(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'birthday' => 'required',
            'gender' => 'required | in:M,F',
            'phone' => 'required|numeric',
            'type' => 'numeric|in:1,2',
            'city' => 'required|string',
            'cin' => 'nullable|unique:users,cin',
            'university' => 'nullable|string',
            'levelOfStudy' => 'nullable|string',
        ]);
        if ($validator->fails()) {
            return redirect()->route('user.dashboard')
                ->withErrors($validator)
                ->withInput();
        }
        //calculate age from birthday
        $now = new DateTime(Date('Y-m-d'));
            $bd = new DateTime($request->birthday);
            $age = $bd->diff($now)->y;
        $validator = \Validator::make($request->all(), [
            'cin' => Rule::requiredIf($age >= 18),
        ]);
        if ($validator->fails()) {
            return redirect()->route('user.dashboard')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find(Auth::user()->id);
        $user->phone = $request->phone;
        $user->role = $request->type == 2 ? 4 : 5;
        $user->birthday = DateTime::createFromFormat('m-d-Y', $request->birthday)->format('Y-m-d');
        $user->city = $request->city;
        $user->gender = $request->gender;
        $user->cin = $request->cin;
        $user->pack_id = 1;
        $user->university = $request->university;
        $user->level_of_study = $request->levelOfStudy;
        $user->reg_step = '1';
        if ($user->save()) {
            if ($user->role == 2 || $user->role == 3)
                return redirect()->route('organizer.account')->with('success', 'Profile completed successfully');
            else
                return redirect()->route('user.dashboard')->with('success', 'Profile completed successfully');
        } else {
            if ($user->role == 2 || $user->role == 3)
                return redirect()->route('organizer.account')->with('error', 'Failed to complete profile');
            else
                return redirect()->route('user.dashboard')->with('error', 'Failed to complete profile');
        }

    }
    // To review
    public function updateInfo(Request $request)
    {
        session()->put('route', 'profile');
        $cities = ['Ariana', 'Ben Arous', 'Bizerte', 'Gabes', 'Gafsa', 'Jendouba', 'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 'Monastir', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'];
        $validated = $request->validate([
            'phone' => 'nullable | numeric',
            'city' => 'nullable | string',
            'type' => 'nullable | string |in:visitor,challenger',
            'university' => 'string | nullable',
            'lvl_of_stdy' => 'string | nullable',
            'github' => 'string | nullable | regex:/^https:\/\/github\.com\/[a-zA-Z0-9_-]+$/',
            'linkedin' => 'string | nullable | regex:/^https:\/\/www\.linkedin\.com\/in\/[a-zA-Z0-9_-]+$/',
            'cv' => 'file | mimes:pdf|max:10240' //10MB
        ]);
        $c_registration = Control::first()->registration;
        $user = User::find(Auth::user()->id);
        $type = $request->type == "challenger" ? 4 : 5;
        if ($user->role != $type && $c_registration == true){
            if($type == 5 && $user->team_id != null){
                return redirect()->route('user.profile')->with('error', 'Cannot change participation type to visitor while in a team');
            }
            else {
                if(JoinTeamRequest::where('user_id', $user->id)->exists())
                    JoinTeamRequest::where('user_id', $user->id)->delete();
                $user->role = $type;
            }   
        }
        if ($user->phone != $request->phone)
            $user->phone = $request->phone;
        if ($user->city != $request->city && in_array($request->city, $cities))
            $user->city = $request->city;
        if ($user->university != $request->university)
            $user->university = $request->university;
        if ($user->level_of_study != $request->lvl_of_stdy)
            $user->level_of_study = $request->lvl_of_stdy;
        if ($user->github != $request->github)
            $user->github = $request->github;
        if ($user->linkedin != $request->linkedin)
            $user->linkedin = $request->linkedin;
        if ($request->file('cv')) {
            $file = $request->file('cv');
            $filename = str_replace(' ', '_', Auth::user()->name) . "_cv" . date('YmdHi') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('cv'), $filename);
            $user = User::find(Auth::id());
            $user->cv = $filename;
        }
        $update = $user->update();

        if (!$update) {
            return redirect()->route('user.profile')->with('error', 'Failed to update');
        } else {
            return redirect()->route('user.profile')->with('success', 'Updated successfully');
        }
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'old_password' => ['required', 'string', 'min:8', 'current_password'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $password = \Hash::make($request->new_password);
        $query = User::find(Auth::id())->update(['password' => $password]);
        if ($query) {
            return redirect()->back()->with('success', 'Password changed successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to change password');
        }
    }

    public function updateTransport(Request $request)
    {
        session()->put('route', 'transport');
        $validator = \Validator::make($request->all(), [
            'transport' => 'required',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'transport' => $request->transport,
            ]);

            if (!$query) {
                return redirect()->route('user.dashboard')->with('error', 'Failed to update');
            } else {
                return redirect()->route('user.dashboard')->with('success', 'Updated successfully');
            }
        }
    }

    public function ChoosePaymentAgent(Request $request)
    {
        session()->put('route', 'payment');
        $request->validate([
            'payment_agent' => 'required',
        ]);
        $payment_type = session('payment_type');
        $payment_agent = $request->payment_agent;
        $user = Auth::user();
        $bus_status = User::where('id', $user->id)->first()->pay_status_bus;
        $pack_status= User::where('id', $user->id)->first()->pay_status_pack;
        $user_payagent_id = $user->payagent_id;
        if ($payment_type == 1) {
            if($pack_status != 1)
                User::where('id', $user->id)->update(["payagent_id" => $payment_agent, "payagent_bus_id" => null, "pay_status_pack" => 2, "pay_status_bus" => 0, "bank_transfer" => NULL]);
            else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to choose payment agent');
            }
        } else if ($payment_type == 2 && $user->bus_id) {
            if($bus_status != 1)
                User::where('id', $user->id)->update(["payagent_bus_id" => $payment_agent, "pay_status_bus" => 2]);
            else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to choose payment agent');
            }
        } else if ($payment_type == 3 && $user->bus_id) {
            if($pack_status != 1 && $bus_status != 1)
                User::where('id', $user->id)->update(["payagent_id" => $payment_agent, "payagent_bus_id" => $payment_agent, "pay_status_pack" => 2, "pay_status_bus" => 2, "bank_transfer" => NULL]);
            else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to choose payment agent');
            }   
            }
        if ($user_payagent_id == null)
            return redirect()->back()->with('success', 'Payment agent chosen successfully');
        else
            return redirect()->back()->with('success', 'Payment agent changed successfully');

        /*if (Payments::where('userID', Auth::user()->id)->exists()) {
            $query = Payments::where('userID', Auth::user()->id)->update([
                'agentID' => $payment_agent,
            ]);
            if ($query) {
                return redirect()->route('user.dashboard')->with('success', 'Payment agent changed successfully');
            }
        } else {
            $agent = User::where('id', $payment_agent)->first();
            $payment = new Payments();
            $payment->userID = Auth::user()->id;
            $payment->agentID = $agent->id;
            $payment->status = 'pending';
            $payment->amount = '0';
            $payment->save();
            if ($payment->save()) {

                return redirect()->route('user.dashboard')->with('success', 'Payment agent chosen successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to choose payment agent');
            }
        }*/

    }

    public function uploadCinFront(Request $request)
    {

        // Validator
        $validator = \Validator::make($request->all(), [
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'Fail validate ' . $validator->errors()], 500);
        } else {
            $file = $request->file('image');
            $filename = str_replace(' ', '_', Auth::user()->name) . "_front" . date('YmdHi') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('cin'), $filename);
            $user = User::find(Auth::id());
            $user->cin_front = $filename;
            if ($user->save()) {
                return response()->json(['status' => false, 'message' => 'Done'], 200);
            } else {
                return response()->json(['status' => false, 'message' => 'Fail'], 500);
            }
        }

    }
    public function uploadCinBack(Request $request)
    {

        // Validator
        $validator = \Validator::make($request->all(), [
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'Fail validate ' . $validator->errors()], 500);
        } else {
            $file = $request->file('image');
            $filename = str_replace(' ', '_', Auth::user()->name) . "_back" . date('YmdHi') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('cin'), $filename);
            $user = User::find(Auth::id());
            $user->cin_back = $filename;
            if ($user->save()) {
                return response()->json(['status' => false, 'message' => 'Done'], 200);
            } else {
                return response()->json(['status' => false, 'message' => 'Fail'], 500);
            }
        }

    }

    public function uploadMadhmounPassport(Request $request)
    {

        // Validator
        $validator = \Validator::make($request->all(), [
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'Fail validate ' . $validator->errors()], 500);
        } else {
            $file = $request->file('image');
            $filename = str_replace(' ', '_', Auth::user()->name) . "_madh_pass" . date('YmdHi') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('madhmoun_passport'), $filename);
            $user = User::find(Auth::id());
            $user->madhmoun = $filename;
            if ($user->save()) {
                return response()->json(['status' => false, 'message' => 'Done'], 200);
            } else {
                return response()->json(['status' => false, 'message' => 'Fail'], 500);
            }
        }

    }
    public function SkipCIN(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->update(['reg_step' => '3']);
        $cin_uploaded = (isset($user->cin_front) && isset($user->cin_back)) || isset($user->madhmoun);
        session(['cin_uploaded' => $cin_uploaded]);
        if(Auth::user()->role == 0 || Auth::user()->role == 1)
            return redirect()->route('admin.dashboard')->with('success', 'Skipped successfully');
        elseif(Auth::user()->role == 2 || Auth::user()->role == 3)
            return redirect()->route('organizer.dashboard')->with('success', 'Skipped successfully');
        elseif(Auth::user()->role == 4 || Auth::user()->role == 5 || Auth::user()->role == 6)
            return redirect()->route('user.dashboard')->with('success', 'Skipped successfully');
    }
    public function uploadBankTransfer(Request $request)
    {

        // Validator
        $validator = \Validator::make($request->all(), [
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'Fail validate ' . $validator->errors()], 500);
        } else {
            $user = User::where('id', Auth::user()->id)->first();
            $pack_status = $user->pay_status_pack;
            $bus_status = $user->pay_status_bus;
            $file = $request->file('image');
            $filename = date('YmdHi') . '_' . $user->id . '.' . $file->getClientOriginalExtension();
            
            $payment_type = session('payment_type');
            $user = Auth::user();
            if ($payment_type == 1) {
                if($pack_status != 1){
                $file->move(public_path('payment'), $filename);
                User::where('id', $user->id)->update(["bank_transfer" => $filename, "payagent_id" => 1, "payagent_bus_id" => NULL, "pay_status_pack" => 2, "pay_status_bus" => 0]);
                }else return redirect()->back()->with('error', 'Failed to upload Bank transfer receipt');
            } else if ($payment_type == 2 && $user->bus_id) {
                if($bus_status != 1){
                $file->move(public_path('payment'), $filename);
                User::where('id', $user->id)->update(["bank_transfer" => $filename, "payagent_bus_id" => 1, "payagent_id" => NULL, "pay_status_bus" => 2]);
                }else return redirect()->back()->with('error', 'Failed to upload Bank transfer receipt');
            } else if ($payment_type == 3 && $user->bus_id) {
                if($pack_status !=1 && $bus_status != 1){
                $file->move(public_path('payment'), $filename);
                User::where('id', $user->id)->update(["bank_transfer" => $filename, "payagent_id" => 1, "payagent_bus_id" => 1, "pay_status_pack" => 2, "pay_status_bus" => 2]);
            }else return redirect()->back()->with('error', 'Failed to upload Bank transfer receipt');
            } else
                return redirect()->back()->with('success', 'Bank transfer receipt uploaded successfully');

            return redirect()->back()->with('success', 'Bank transfer receipt uploaded successfully');
        }

    }

    public function removeBankTransfer(Request $request)
    {
        $user = Auth::user();
        if ($user->bank_transfer) {
            $bank_transfer_name = $user->bank_transfer;
            $filePath = public_path('payment/' . $bank_transfer_name);
            $bus_status = User::where('id', $user->id)->first()->pay_status_bus;
            $pack_status= User::where('id', $user->id)->first()->pay_status_pack;
            if (File::exists($filePath)) {
                File::delete($filePath);
                if ($user->payagent_id == 1)
                    if($pack_status != 1)
                        User::where('id', $user->id)->update(["bank_transfer" => null, "pay_status_pack" => 0, "payagent_id" => null]);
                    else return redirect()->back()->with('error', 'Failed to remove the image');
                if ($user->payagent_bus_id == 1)
                    if($pack_status != 1)
                        User::where('id', $user->id)->update(["bank_transfer" => null, "pay_status_bus" => 0, "payagent_bus_id" => null]);
                    else   
                      return redirect()->back()->with('error', 'Failed to remove the image');
                return redirect()->back()->with('success', 'Image removed successfully');
            }
        }
        return redirect()->back()->with('error', 'Failed to remove the image');
    }


    public function reserveBus(Request $request)
    {
        $bus = Bus::findOrFail($request->id);

        try {
            $reservation = new bus_reservation();
            $reservation->user_id = auth()->id();
            $reservation->bus_id = $bus->id;
            $reservation->save();

            return redirect()->route('user.dashboard')->with('success', 'Bus reserved successfully');
        } catch (QueryException $e) {
            $sqlState = $e->errorInfo[0];
            if ($sqlState === '45000') {
                // Bus is fully booked, handle the error here
                return redirect()->route('user.dashboard')->with('error', 'Failed to reserve bus: bus is already fully booked');
            } else {
                // Handle other types of exceptions here
                return redirect()->route('user.dashboard')->with('error', 'Failed to reserve bus');
            }
        }
    }

    public function cancelBus(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        if (bus_reservation::where('user_id', auth()->id())->where('bus_id', $request->id)->delete()) {
            return redirect()->route('user.dashboard')->with('success', 'Bus reservation cancelled successfully');
        } else {
            return redirect()->route('user.dashboard')->with('error', 'Failed to cancel bus reservation');
        }
    }


}