<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});





Route::group(['prefix' => 'nmtcauth'], function () {
    Route::post('login', 'App\Http\Controllers\Auth\LoginController@apiLogin');
    Route::post('getpart' , 'App\Http\Controllers\Auth\LoginController@getpart');
    Route::post('getpart_agence' , 'App\Http\Controllers\Auth\LoginController@getpart_agence');
    // redirect if any other route is called

    Route::get('login', function () {
        return redirect('index');
    });
    
});





// api for login only and make it secure
Route::post('login', 'Auth\LoginController@apiLogin')->name('api.login');
