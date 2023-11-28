<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\bus;
use App\Models\Room;
use App\Models\Team;
use App\Models\User;
use App\Models\rooms;
use App\Models\Collect;
use App\Models\Control;
use App\Models\Payagent;
use App\Models\Payments;
use App\Models\RoomType;
use App\Mail\payment_mail;
use App\Mail\WelcomeEmail;
use App\Models\Reservation;
use App\Models\banktransfer;
use DateTime;
use Illuminate\Http\Request;
use App\Models\collectedamount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    function index()
    {
        $total_users = User::where('role', '>=','4')->count();
        $total_amount = User::where('pay_amount_total', '>', 0)->sum('pay_amount_total');
        $total_bus = User::where('pay_status_bus','1')->get();     
        $total_bus_amount=0;   
        foreach($total_bus as $user){
            if($user->bus_id)
                $total_bus_amount += $user->bus->price;
        }
        $total_pack = User::where('pay_status_pack','1')->get();     
        $total_pack_amount=0;   
        foreach($total_bus as $user){
            if($user->pack_id)
                $total_pack_amount += $user->pack->amount;
        }
        $total_paid = User::where('pay_status_pack', 1)->count();
        $total_bus_paid = User::where('pay_status_bus', 1)->count();
        $total_teams = Team::count();
        $total_users_per_city = User::select('city', \DB::raw('count(*) as total, sum(pay_amount_total) as money'))->groupBy('city')->get();
        $total_empty_rooms = Room::where('gender', "!=", '-')->count();
        $total_men = User::where([['gender', '=', 'male'], ['phone', '!=', '-'], ['role', '=', '5']])->count();
        $total_female = User::where([['gender', '=', 'female'], ['phone', '!=', '-'], ['role', '=', '5']])->count();
        $all = User::where([['gender', '!=', '-'], ['role', '=', '2']])->count();
        return view('dashboards.admins.index', compact('total_users', 'total_amount', 'total_bus_amount','total_pack_amount', 'total_paid', 'total_bus_paid', 'total_teams', 'total_users_per_city', 'total_empty_rooms', 'total_men', 'total_female', 'all'));
    }
    function payments()
    {
        $total = User::where('pay_amount_total', '>', 0)->sum('pay_amount_total');
        $totalcollected = Collect::sum('amount');
        $payment_ag = User::where('role', '3')->orWhere('role', 0)->get();
        $stats = array();
        for ($i = 0; $i < count($payment_ag); $i++) {
            $stats[$i] = new \stdClass();
            $stats[$i]->name = $payment_ag[$i]->name;
            $stats[$i]->id = $payment_ag[$i]->id;
            $stats[$i]->city = $payment_ag[$i]->city;
            $stats[$i]->phone = $payment_ag[$i]->phone;
            $stats[$i]->university = $payment_ag[$i]->university;
            $users = User::where('payagent_id', $payment_ag[$i]->id)->orWhere('payagent_bus_id', $payment_ag[$i]->id)->get();
            $total_pay = 0;
            foreach ($users as $user) {
                $amount_total = $user->pay_amount_total;
                if ($amount_total != 0) {
                    if ($user->payagent_id == $user->payagent_bus_id) {
                        $total_pay += $amount_total;
                    } else if ($user->payagent_bus_id == $payment_ag[$i]->id) {
                        if ($user->pay_status_bus == 1)
                            $total_pay += $user->bus->price;
                    } else {
                        if ($user->pay_status_bus == 1) {
                            $total_pay += $amount_total - $user->bus->price;
                        } else
                            $total_pay += $amount_total;
                    }
                }
            }
            $stats[$i]->amount = $total_pay;
            $stats[$i]->collected = Collect::where('payagent_id', $payment_ag[$i]->id)->sum('amount');
            $stats[$i]->remaining = $stats[$i]->amount - $stats[$i]->collected;
        }

        //dd($stats);
        return view('dashboards.admins.payments', compact('stats', 'total', 'totalcollected'));
    }

    function payment_details($id)
    {
        $collects = Collect::where('payagent_id', $id)->get();
        $payment_ag = User::where('id', $id)->first();
        $users = User::where('payagent_id', $id)->orWhere('payagent_bus_id', $id)->get();
        $total = 0;
        foreach ($users as $user) {
            $amount_total = $user->pay_amount_total;
            if ($amount_total != 0)
                if ($user->payagent_id == $user->payagent_bus_id) {
                    $total += $amount_total;
                } else if ($user->payagent_bus_id == $id) {
                    if ($user->pay_status_bus == 1)
                        $total += $user->bus->price;
                } else {
                    if ($user->pay_status_bus == 1) {
                        if ($user->bus_id)
                            $total += $amount_total - $user->bus->price;
                    } else
                        $total += $amount_total;
                }
        }
        $totalcollected = Collect::where('payagent_id', $id)->sum('amount');
        return view('dashboards.admins.payment-details', compact('payment_ag', 'users', 'total', 'totalcollected', 'collects'));
    }

    function buses()
    {
        $buses = bus::all();
        return view('dashboards.admins.buses', compact('buses'));
    }

    function testmail()
    {
        Mail::to('amir.mezghani@gmail.com')->send(new payment_mail());

    }

    // function rooms()
    // {
    //     $rooms = Room::all();
    //     // $resrv = Reservation::all();
    //     $users = User::all();
    //     return view('dashboards.admins.rooms', compact('rooms', 'users'));
    // }

    function rooms()
    {
        $rooms = Room::all();
        // for rooms that have is_all_paid = 0, Compare now with updated_at, if now
        $now = new DateTime(Date('Y-m-d'));
        foreach ($rooms as $room) {
            if ($room->is_all_paid == 1) {
                $updated_at = new DateTime($room->updated_at);
                $diff = $now->diff($updated_at)->d;
                if ($diff >= 1) {
                    $room->is_all_paid = 0;
                    $room->update();
                }
            }
        }
        return view('dashboards.admins.rooms1', compact('rooms', 'now'));
    }

    function teams()
    {
        $teams = Team::all();
        return view('dashboards.admins.teams', compact('teams'));
    }

    function participants()
    {
        $users = User::where('role', 5)->orWhere('role', 4)->get();
        $cities = $users->pluck('city')->unique();
        $users_bank_count = User::whereNotNull('bank_transfer')
            ->where(function ($query) {
                $query->where('pay_status_pack', 2);
            })
            ->where(function ($query) {
                $query->where('payagent_id', Auth::user()->id);
            })->where(function ($query) {
            $query->where('role', 5)->orWhere('role', 4);
        })->count();

        return view('dashboards.admins.participants', compact('users', 'cities', 'users_bank_count'));

    }


    function profile()
    {
        return view('dashboards.admins.profile');
    }

    function settings()
    {
        $cities = ['Ariana', 'Ben Arous', 'Bizerte', 'Gabes', 'Gafsa', 'Jendouba', 'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 'Monastir', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'];
        return view('dashboards.admins.settings', compact('cities'));
    }

    function organizers()
    {
        $users = User::where('role', 0)->orWhere('role', 1)->orWhere('role', 2)->orWhere('role', 3)->get();
        $cities = $users->pluck('city')->unique();
        $users_bank_count = User::whereNotNull('bank_transfer')
            ->where(function ($query) {
                $query->where('pay_status_pack', 2);
            })
            ->where(function ($query) {
                $query->where('payagent_id', Auth::user()->id);
            })->where(function ($query) {
            $query->where('role', 0)->orWhere('role', 1)->orWhere('role', 2)->orWhere('role', 3);
        })->count();
        return view('dashboards.admins.organizers', compact('users', 'cities', 'users_bank_count'));
    }

    public function updateInfo(Request $request)
    {
        session()->put('route', 'profile');
        $cities = ['Ariana', 'Ben Arous', 'Bizerte', 'Gabes', 'Gafsa', 'Jendouba', 'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 'Monastir', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'];
        $validated = $request->validate([
            'cin' => 'numeric | nullable |unique:users,cin',
            'phone' => 'numeric | nullable',
            'city' => 'nullable | string',
            'birthday' => 'date | nullable',
            'university' => 'string | nullable',
            'lvl_of_stdy' => 'string | nullable',
            'github' => 'string | nullable | regex:/^https:\/\/github\.com\/[a-zA-Z0-9_-]+$/',
            'linkedin' => 'string | nullable | regex:/^https:\/\/www\.linkedin\.com\/in\/[a-zA-Z0-9_-]+$/',
            'cv' => 'file | mimes:pdf|max:10240'
        ]);
        $user = User::find(Auth::user()->id);
        if ($user->cin != $request->cin)
            $user->cin = $request->cin;
        if ($user->phone != $request->phone)
            $user->phone = $request->phone;
        if ($user->city != $request->city && in_array($request->city, $cities))
            $user->city = $request->city;
        if ($user->birthday != $request->birthday) {
            $now = new DateTime(Date('Y-m-d'));
            $bd = new DateTime($request->birthday);
            if ($bd->diff($now)->y >= 15)
                $user->birthday = $request->birthday;
            else
                return redirect()->route('admin.profile')->with('error', 'Failed to update: Minimum age is 15');
        }
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
            return redirect()->route('admin.profile')->with('error', 'Failed to update');
        } else {
            return redirect()->route('admin.profile')->with('success', 'Updated successfully');
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

    function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $file = $request->file('admin_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
        } else {
            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (\File::exists(public_path($path . $oldPicture))) {
                    \File::delete(public_path($path . $oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$upload) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
            }
        }
    }


    function changePassword(Request $request)
    {
        //Validate form
        $validator = \Validator::make($request->all(), [
            'oldpassword' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Enter your current password',
            'oldpassword.min' => 'Old password must have atleast 8 characters',
            'oldpassword.max' => 'Old password must not be greater than 30 characters',
            'newpassword.required' => 'Enter new password',
            'newpassword.min' => 'New password must have atleast 8 characters',
            'newpassword.max' => 'New password must not be greater than 30 characters',
            'cnewpassword.required' => 'ReEnter your new password',
            'cnewpassword.same' => 'New password and Confirm new password must match'
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $update = User::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Failed to update password in db']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your password has been changed successfully']);
            }
        }
    }
    function getuserdata($id)
    {
        $user = User::find($id);

        echo json_encode($user);
    }


    function updateParticipantInfo(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'string',
            'email' => 'email',
            'phone' => 'digits:8',
            'type' => 'in:visitor,challenger,payagent',
            'transport' => 'in:0,1,2',
            'pay_pack_status' => 'in:0,1,2',
            'pay_bus_status' => 'in:0,1,2',
        ]);

        if (!$validator->passes()) {
            return redirect()->back()->with('error', 'Failed to update: Input validation');
        } else {
            $role = 5;
            if ($request->type == "challenger")
                $role = 4;
            elseif ($request->type == "visitor")
                $role = 5;
            elseif ($request->type == "payagent")
                $role = 3;
            else
                $role = 2;
            // dd($role);
            $query = User::find($request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $role,
                'transport' => $request->transport,
                'pay_status_pack' => $request->pay_pack_status,
                'pay_status_bus' => $request->pay_bus_status,
            ]);

            if (!$query) {
                return redirect()->back()->with('error', 'Failed to update');
            } else {
                return redirect()->back()->with('success', 'Updated successfully');
            }
        }
    }

    function deleteUser(Request $request)
    {

        $user_id = $request->user_id;
        //dd($request->id);
        $user = User::find($user_id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    function add_Pay_Agent(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:8',
            'city' => 'required|string',
            'gender' => 'required|in:M,F',
            'type' => 'nullable|in:payagent',
            'password' => 'required|string',
        ]);
        $agent = new User();
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->phone = $request->phone;
        $agent->city = $request->city;
        $agent->gender = $request->gender;
        $agent->pack_id = 2;
        $agent->created_by = Auth::id();
        $agent->reg_step = 3;
        if ($request->type == 'payagent')
            $agent->role = 3;
        else
            $agent->role = 2;
        $agent->password = \Hash::make($request->password);




        $path = 'users/images/';
        $fontPath = public_path('fonts/Oliciy.ttf');
        $char = strtoupper($request->name[0]);
        $newAvatarName = rand(12, 34353) . time() . '_avatar.png';
        $dest = $path . $newAvatarName;

        $createAvatar = makeAvatar($fontPath, $dest, $char);
        $picture = $createAvatar == true ? $newAvatarName : '';

        $agent->picture = $picture;

        if ($agent->save()) {
            return redirect()->route('admin.organizers')->with('error_add_agent', 'Failed to add agent');
        } else {
            return redirect()->route('admin.organizers')->with('success_add_agent', 'Succeded to add agent');
        }
        // return redirect()->back()->with('success_add_payagent','Added successfully');
    }

    function payForuser(Request $request){
            $request->validate([
                'userID' => 'required',
                //'amount' => 'required',
            ]);
        
            $userID = $request->userID;           
            $user = User::where('id',$userID)->first();
            $bank_transfer_name = $user->bank_transfer;
            $super_admin = Auth::user()->id;
            if ($request->has('confirm')){
                $amount =  $user->pack->amount;
                if( $user->pay_status_bus == 2 && $user->bus_id == null )
                    return redirect()->back()->with('error','The participant must reserve a bus first !');
                if($user->pay_status_pack == 2 && $user->pay_status_bus == 2 && ( !$bank_transfer_name || ($bank_transfer_name && $user->payagent_id == 1 &&  $user->payagent_bus_id == 1))){
                    $amount += $user->bus->price;
                    User::where('id',$userID)->update(["pay_status_pack" => 1, "pay_status_bus" => 1, "pay_amount_total" => $amount , "payagent_id" => $super_admin , "payagent_bus_id" => $super_admin]);
                    Mail::to($user->email)->send(new payment_mail());
                }else if($user->pay_status_pack == 2 && (!$bank_transfer_name || ($bank_transfer_name && $user->payagent_id == 1) ) ){
                    User::where('id',$userID)->update(["pay_status_pack" => 1, "pay_amount_total" => $amount, "payagent_id" => $super_admin, "payagent_bus_id" => null]);
                    Mail::to($user->email)->send(new payment_mail());
                }else if($user->pay_status_bus == 2){
                    User::where('id',$userID)->update(["pay_status_bus" => 1, "pay_amount_total" => $amount + $user->bus->price, "payagent_bus_id" => $super_admin]);
                }else 
                    return redirect()->back()->with('error','Failed to Updated');
                return redirect()->back()->with('success','Updated successfully');


            }else if($request->has('refuse')){
                
                if($bank_transfer_name || $bank_transfer_name != ''){
                    $filePath = public_path('payment/'. $bank_transfer_name);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                    if($user->pay_status_pack == 2 && $user->pay_status_pack == 2 && ( !$bank_transfer_name || ($bank_transfer_name && $user->payagent_id == 1 &&  $user->payagent_bus_id == 1)) ){
                        User::where('id',$userID)->update(["pay_status_pack" => 0, "pay_status_bus" => 0, 'bank_transfer' => null, 'payagent_id' => null, 'payagent_bus_id' => null]);
                    }else if($user->pay_status_pack == 2 && (!$bank_transfer_name || ($bank_transfer_name && $user->payagent_id == 1) )){
                        User::where('id',$userID)->update(["pay_status_pack" => 0,  'bank_transfer' => null, 'payagent_id' => null]);
                    }else if($user->pay_status_bus == 2 ){
                        User::where('id',$userID)->update(["pay_status_bus" => 0,  'bank_transfer' => null, 'payagent_bus_id' => null]);
                    }else 
                        return redirect()->back()->with('error','Failed to Updated');
                }       
                return redirect()->back()->with('success','Participant Refused successfully');
            }
    }


    function collectamount(Request $request)
    {
        $request->validate([
            'agentID' => 'required',
            'amount' => 'required',
        ]);

        // $amountcollected = new collectedamount();
        // $amountcollected->agentID = $request->agentID;
        // $amountcollected->amount = $request->amount;
        // $amountcollected->userID = Auth::user()->id;
        // $amountcollected->date = date('d-m-Y');
        // $amountcollected->save();
        $admin_id = Auth::user()->id;
        $agent_id = $request->agentID;
        $amountToCollect = $request->amount;
        $users = User::where('payagent_id', $agent_id)->orWhere('payagent_bus_id', $agent_id)->get();
        $total = 0;
        foreach ($users as $user) {
            $amount_total = $user->pay_amount_total;
            if ($amount_total != 0)
                if ($user->payagent_id == $user->payagent_bus_id) {
                    $total += $amount_total;
                } else if ($user->payagent_bus_id == $agent_id) {
                    if ($user->pay_status_bus == 1)
                        $total += $user->bus->price;
                } else {
                    if ($user->pay_status_bus == 1) {
                        if ($user->bus_id)
                            $total += $amount_total - $user->bus->price;
                    } else
                        $total += $amount_total;
                }
        }
        $totalcollected = Collect::where('payagent_id', $agent_id)->sum('amount');
        $wallet = $total - $totalcollected;
        if ($amountToCollect <= $wallet) {
            Collect::create([
                'admin_id' => $admin_id,
                'payagent_id' => $agent_id,
                'date' => now(),
                'amount' => $amountToCollect
            ]);
            return redirect()->back()->with('success', 'Collected successfully');
        }
        return redirect()->back()->with('error', 'Failed to collect');

    }

    // public function uploadBankeReciept(Request $request){

    //     // Validator
    //     $validator = \Validator::make($request->all(),[
    //         'image' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json(['status'=>false,'message'=>'Fail validate '. $validator->errors() ], 500);
    //     }else{
    //         $file= $request->file('image');
    //         $filename= date('YmdHi').$file->getClientOriginalName();
    //         $file-> move(public_path('payment'), $filename);
    //         $payment = new banktransfer();
    //         $payment->userID = Auth::user()->id;
    //         $payment->file = $filename;
    //         $payment->save();
    //         if ($payment->save()){
    //             $payment = new Payments();
    //             $payment->userID = '421';
    //             $payment->agentID = "421";
    //             $payment->status = 'pending';
    //             $payment->amount = '0';
    //             $payment->save();
    //             return response()->json(['status'=>false,'message'=>'Done'], 200);


    //         }else{
    //             return response()->json(['status'=>false,'message'=>'Fail'], 500);
    //         }
    //     }

    // }


    public function launchBus(Request $request)
    {
        DB::update('update options set transport = 1 where id = ?', ['1']);
        return redirect()->back()->with('success', 'Launched successfully');
    }
    public function addBus(Request $request)
    {

        $bus = new Bus();
        $bus->name = $request->name;
        $bus->seats = $request->seats;
        $bus->price = $request->price;
        $bus->time = $request->time;
        $bus->save();
        if (!$bus) {
            return redirect()->back()->with('error', 'Failed to add bus');
        } else {
            return redirect()->back()->with('success', 'Added successfully');
        }
    }

    public function controls(Request $request)
    {

        $controls = Control::first();
        $roomTypes = RoomType::all();

        return view('dashboards.admins.controls', compact('controls', 'roomTypes'));
    }

    function confirmRoom(Request $request)
    {
        $request->validate([
            'roomID' => 'required',
        ]);

        $roomID = $request->roomID;  
        $room = Room::find($roomID);
        if ($room == null){
            return redirect()->back()->with('error', 'Room not found');
        } else {
            if ($request->has('confirm')) {
                $room->confirmed = 1;
                if($room->update())
                    return redirect()->back()->with('success', 'Updated successfully');
                else
                    return redirect()->back()->with('error', 'Failed to Updated');
            } else if ($request->has('refuse')) {
                if($room->delete())
                    return redirect()->back()->with('success', 'Room deleted successfully');
                else
                    return redirect()->back()->with('error', 'Failed to Updated');
            }
        }
        
        //     Mail::to($user->email)->send(new payment_mail());
        //        return redirect()->route('admin.participants')->with('success_transport','Updated successfully');
        //    }
    }


}