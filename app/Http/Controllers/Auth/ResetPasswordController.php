<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if( Auth()->user()->role == 0 || Auth()->user()->role == 1 ){
            return route('admin.dashboard');
        }
        elseif( Auth()->user()->role == 2 || Auth()->user()->role == 3 ){
            return route('organizer.dashboard');
        }
        elseif( Auth()->user()->role == 4 || Auth()->user()->role == 5 ){
            return route('user.dashboard');
        }
        else{
            return route('login');
        }
    }
}
