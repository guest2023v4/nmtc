<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Buses;
use App\Models\rooms;
use App\Models\Payments;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
      protected function redirectTo(){
          if( Auth()->user()->role == 0 || Auth()->user()->role == 1){
              return route('admin.dashboard');
          }
          elseif( Auth()->user()->role == 4 || Auth()->user()->role == 5 || Auth()->user()->role == 6){
              return route('user.dashboard');
          }elseif( Auth()->user()->role == 2 || Auth()->user()->role == 3){
              return route('organizer.dashboard');
          }
          else{
                
              return route('login');
          }
      }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        
       $input = $request->all();
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required'
       ]);
       if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){
            $role = auth()->user()->role;
            $reg_step = auth()->user()->reg_step;
            $cin_uploaded = (isset(auth()->user()->cin_front) && isset(auth()->user()->cin_back)) || isset(auth()->user()->madhmoun);
            session('cin_uploaded', $cin_uploaded);
            if( $role == 0 || $role == 1 ){
                return redirect()->route('admin.dashboard');
            }
            elseif( $role == 6 || $role == 4 || $role == 5){
                if(!$cin_uploaded && $reg_step >= 2){
                    return redirect()->route('user.uploadCIN');
                }
                return redirect()->route('user.dashboard');
            }
            elseif($role == 2){
                return redirect()->route('organizer.account');
            }
            elseif($role == 3){
                return redirect()->route('organizer.dashboard');
            }
       }else{
        
           return redirect()->route('login')->with('error','Email and password are wrong');
       }
    }
    // make an api version of this function

    public function apiLogin(Request $request){
       
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Content-Type', 'application/json');
        
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
      
        if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){

         if( auth()->user()->role == 2 ){
             return response()->json(['status'=>true,'message'=>'Login Successfully','data'=>auth()->user()]);
         }
         

        }else{
            return response()->json(['status'=>false,'message'=>'Email and password are wrong']);
        }
     }
     //make a function name testingapii to test the api it should just return a small message
        public function testingapii(){
            $request->headers->set('Accept', 'application/json');
        $request->headers->set('Content-Type', 'application/json');
            return response()->json(['status'=>true,'message'=>'Api is working']);
        }

        
        public function getpart(Request $request){
            function encrypt_decrypt($string, $action = 'encrypt')
            {
                $encrypt_method = "AES-256-CBC";
                $secret_key = 'AA74CDCC2BBRT935136HH7B63C27MTC'; // user define private key
                $secret_iv = '5fgf5HJ5g27'; // user define secret key
                $key = hash('sha256', $secret_key);
                $iv = substr(hash('sha256', $secret_iv), 0, 16); // sha256 is hash_hmac_algo
                if ($action == 'encrypt') {
                    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                    $output = base64_encode($output);
                } else if ($action == 'decrypt') {
                    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
                }
                return $output;
            }
              
                $id = encrypt_decrypt($request->code, 'decrypt');
                
         
            
            
          
        $request->headers->set('Content-Type', 'application/json');
            $rooms = User::where('id',$id)->get();
           
            
            if ($rooms->isEmpty()) {
                return response()->json(['status'=>false,'message'=>'No data found']);
            }
            else{
                $payment = Payments::where('userID',$id)->exists();
            
            
                $data = new \stdClass();
                $data->id = $rooms[0]->id;
                $data->name = $rooms[0]->name;
                $data->phone = $rooms[0]->phone;
                if ($payment == true){
                    $pack = Payments::where('userID',$id)->get()->first();
                    if($pack->amount == '190'){
                        $data->pack = 'No Pack';
                    }
                    elseif($pack->amount == '210'){
                        $data->pack = 'Standard';
                    }
                    elseif($pack->amount == '230'){
                        $data->pack = 'Premium';
                    }
                    else{
                        $data->pack = 'No Pack';
                    }
                }else{
                    $data->pack = 'Not Paid';
                }
                return response()->json(['status'=>true,'message'=>'Data found','data'=>$data]);
            }
            
        }




        public function getpart_agence(Request $request){
            function encrypt_decrypt($string, $action = 'encrypt')
            {
                $encrypt_method = "AES-256-CBC";
                $secret_key = 'AA74CDCC2BBRT935136HH7B63C27MTC'; // user define private key
                $secret_iv = '5fgf5HJ5g27'; // user define secret key
                $key = hash('sha256', $secret_key);
                $iv = substr(hash('sha256', $secret_iv), 0, 16); // sha256 is hash_hmac_algo
                if ($action == 'encrypt') {
                    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                    $output = base64_encode($output);
                } else if ($action == 'decrypt') {
                    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
                }
                return $output;
            }
              
                $id = encrypt_decrypt($request->code, 'decrypt');
                
         
            
            
          
        $request->headers->set('Content-Type', 'application/json');
           
           $room = reservation::where('userID',$id)->get()->first();
           $called_user = User::where('id',$id)->get()->first()->name;
           $users_in_room = reservation::where('roomID',$room->roomID)->get();
           $final_users = array();
            foreach($users_in_room as $user){
                $users= new \stdClass();
                if (User::where('id',$user->userID)->get()->first()->name != $called_user){
                    $users->name = User::where('id',$user->userID)->get()->first()->name;
                    $users->phone = User::where('id',$user->userID)->get()->first()->phone;
                    array_push($final_users,$users);
                }
            }

            $agence_room = DB::table('rooms_agence')->where('id',$room->roomID)->get()->first();
      
            $data = array();
            $data['room'] = $agence_room->id;
            $data['users'] = $final_users;
            if ($agence_room->room_key == ''){
                DB::table('rooms_agence')->where('id',$room->roomID)->update(['room_key'=>$called_user]);
            }
            else{
                $data['room_key'] = $agence_room->room_key;
            }
        
            

           return response()->json(['status'=>true,'message'=>'success','data'=>$data]);
            
            
            
        }
     
}