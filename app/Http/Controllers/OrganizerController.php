<?php
namespace App\Http\Controllers;

use DateTime;
use Auth;
use App\Models\User;
use App\Models\Collect;
use App\Mail\payment_mail;
use Illuminate\Http\Request;
use App\Models\Control;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrganizerController extends Controller
{
    function index(){
        if(Auth::user()->role == 2)
            return redirect()->route('organizer.account');
        $totalcollected = Collect::where('payagent_id',auth()->user()->id )->sum('amount');
        $paid = 0;
        $total = User::where('payagent_id', auth()->user()->id)->orwhere('payagent_bus_id', auth()->user()->id)->count();
        $users = User::where('payagent_id',auth()->user()->id)->orWhere('payagent_bus_id', auth()->user()->id)->get();
        $total_amount=0;
        foreach($users as $user){
            $amount_total = $user->pay_amount_total;
            if($amount_total != 0){
                if($user->payagent_id == $user->payagent_bus_id){
                    $total_amount+= $amount_total ;
                    $paid++;
                }else if($user->payagent_bus_id ==auth()->user()->id){
                    if($user->pay_status_bus == 1){
                        $total_amount += $user->bus->price;
                        $paid++;
                    }
                }else { $paid++;
                        if($user->pay_status_bus == 1){
                                $total_amount += $amount_total - $user->bus->price;
                                
                        }else 
                            $total_amount +=  $amount_total;
                }     
            }                          
        }
        $unpaid = $total - $paid;
        return view('dashboards.organizers.index', compact('paid','unpaid','total','total_amount','totalcollected'));
    }
    function participants(){
        $c_payment = Control::where('id',1)->first()->payment;
        $users = User::all();
        $cities = $users->pluck('city')->unique();
        $count_user_waiting = User::where(function ($query) {
            $query->where('pay_status_pack', 2)
                ->orWhere('pay_status_bus', 2);
        })
        ->where(function ($query) {
            $query->where('payagent_id', Auth::user()->id)
                  ->orWhere('payagent_bus_id', Auth::user()->id);
        })->count();
    //    $users_with_payment_amount = DB::query()->select('users.id','users.name','users.email','users.phone','users.city','users.pay_status_pack','pay.amount')->from('users')->join('payments','users.id','=','payments.userID')->where('payments.agentID',auth()->user()->id)->get();
        $users_with_payment_amount = User::where('payagent_id', auth()->user()->id)->orWhere('payagent_bus_id', auth()->user()->id)->get();    
        return view('dashboards.organizers.participants', compact('users','count_user_waiting','cities','users_with_payment_amount','c_payment'));
    }

    function payForuser(Request $request){
        $request->validate([
            'userID' => 'required',
            //'amount' => 'required',
        ]);

        $userID = $request->userID;
        $user_pack_payagent = User::where('id',$userID)->first()->payagent_id;
        $user_bus_payagent = User::where('id',$userID)->first()->payagent_bus_id;

            //check if the payagents are the choosen one.
            $user_payagent = $user_pack_payagent;
            //if the payagents are note the same person => the user paid his pack fees he must pay the bus fee now !
            if($user_payagent && $user_bus_payagent && $user_bus_payagent != $user_pack_payagent) 
                $user_payagent = $user_bus_payagent;
            //check if the user id (come from the request) is one of the payagent users
            if(!$user_payagent || ($user_payagent != Auth::user()->id && $userID != Auth::user()->id)){
                return redirect()->route('organizer.participants')->with('error','Failed to update');
            }


        $user = User::where('id',$userID)->first();
        $amount =  $user->pack->amount;
        // ADD STORE AMOUNT HERE TO $amount if it's exists HERE
        if( $user->pay_status_bus == 2 && $user->bus_id == null )
            return redirect()->route('organizer.participants')->with('error','The participant must reserve a bus first !');
        if($user->pay_status_pack == 2 && $user->pay_status_bus == 2 ){
            $amount += $user->bus->price;   
            User::where('id',$userID)->update(["pay_status_pack" => 1, "pay_status_bus" => 1, "pay_amount_total" => $amount]);
            Mail::to($user->email)->send(new payment_mail());
        }else if($user->pay_status_pack == 2){
            User::where('id',$userID)->update(["pay_status_pack" => 1, "pay_amount_total" => $amount]);
            Mail::to($user->email)->send(new payment_mail());
        }else if($user->pay_status_bus == 2){
            User::where('id',$userID)->update(["pay_status_bus" => 1, "pay_amount_total" => $amount + $user->bus->price]);
        }else 
            return redirect()->route('organizer.participants')->with('error','Failed to Updated');
        return redirect()->route('organizer.participants')->with('success','Updated successfully');
    
    }
    function participants_all(){
        $users = User::all();
        return view('dashboards.organizers.all', compact('users'));
   
       }
    function assign_pg(){
        return view('dashboards.organizers.assign');
    }
    function assign_room(Request $request){
        $room = $request->room;
        $hotel = $request->hotel;
        
        if (DB::table('rooms_agence')->where('id', $room)->update(['room_real' => $hotel])){
            return redirect()->route('organizer.assign')->with('success','Assigned successfully');
        }else{
            return redirect()->route('organizer.assign')->with('error','Failed to assign');
        }
    }
    public function profile()
    {
        return view('dashboards.organizers.profile');
    }

    public function settings()
    {
        $cities = ['Ariana', 'Ben Arous', 'Bizerte', 'Gabes', 'Gafsa', 'Jendouba', 'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 'Monastir', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'];
        return view('dashboards.organizers.settings', compact('cities'));
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
            if($bd->diff($now)->y >= 15)
                $user->birthday = $request->birthday;
            else
                return redirect()->route('organizer.profile')->with('error', 'Failed to update: Minimum age is 15');
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
            return redirect()->route('organizer.profile')->with('error', 'Failed to update');
        } else {
            return redirect()->route('organizer.profile')->with('success', 'Updated successfully');
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
           if($query){
               return redirect()->back()->with('success','Password changed successfully');
            }else{
                return redirect()->back()->with('error','Failed to change password');
            }
       }
}
