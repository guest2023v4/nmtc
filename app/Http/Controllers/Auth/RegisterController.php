<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Control;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role'=>2,
    //         'favoriteColor'=>$data['favoriteColor'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    function register(Request $request){
        $control_registration = Control::select('registration')->first()->registration;
        if($control_registration == 1){
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
         ]);

         /** Make avatar */
         
         $path = 'users/images/';
         $fontPath = public_path('fonts/Oliciy.ttf');
         $char = strtoupper($request->name[0]);
         $newAvatarName = rand(12,34353).time().'_avatar.png';
         $dest = $path.$newAvatarName;

         $createAvatar = makeAvatar($fontPath,$dest,$char);
         $picture = $createAvatar == true ? $newAvatarName : '';

         $user = new User();
         $user->name = $request->name;
        //    if($request->has('plan')){
        //     $user->plan = $request->plan;
        //       }else{
        //     $user->plan = 'basic';
        //       }
         $user->email = $request->email;
         $user->role = 6;
        //  $user->phone = $request->phone;
        //  $user->phone = '-';
        //  $user->type = $request->type;
        //  $user->type = '-';
        //  $user->payment = 0;
        //  $user->transport = 1;
        //  $user->age = $request->age;
        //  $user->age = '0';
        //  $user->city = $request->city;
        //  $user->city = '-';
        //  $user->gender = $request->gender;
        //  $user->gender = '-';
        //  $user->levelOfstudy = $request->levelOfstudy;
        //  $user->levelOfstudy = '-';
        //  $user->university = $request->university;
        //  $user->university = '-';
         $user->picture = $picture;
         $user->password = \Hash::make($request->password);

         if( $user->save() ){
          
            return redirect()->back()->with('success','You are now successfully registerd');
         }else{
             return redirect()->back()->with('error','Failed to register');
         }
        }
        else{
            return redirect()->back()->with('error','Registration closed');
        }
    }


}
