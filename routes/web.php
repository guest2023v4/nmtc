<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\JoinRoomRequestController;
use App\Http\Controllers\JoinTeamRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/team', function () {
    return view('team');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/nmtc', function () {
//     return view('nmtc');
// });
// Route::get('/nftc', function () {
//     return view('NFTC');
// });

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/store-variable/{var}', [UserController::class, 'store']);
    Route::get('account', [UserController::class, 'index'])->name('admin.account');
    Route::get('participants', [AdminController::class, 'participants'])->name('admin.participants');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('payments', [AdminController::class, 'payments'])->middleware('isSuperAdmin')->name('admin.payments');
    Route::get('controls', [AdminController::class, 'controls'])->middleware('isSuperAdmin')->name('admin.controls');

    Route::post('update-controls', [ControlController::class, 'updateControls'])->middleware('isSuperAdmin')->name('admin.updateControls');
    Route::post('update-roomTypes', [RoomTypeController::class, 'updateRoomTypes'])->middleware('isSuperAdmin')->name('admin.updateRoomTypes');

    Route::get('payment-details/{id}', [AdminController::class, 'payment_details'])->name('admin.payment-details');
    Route::get('organizers', [AdminController::class, 'organizers'])->name('admin.organizers');
    Route::get('userDetails/{id}', [AdminController::class, 'getuserdata'])->name('admin.getuserdata');
    Route::get('testmail/', [AdminController::class, 'testmail'])->name('admin.testmail');
    Route::get('rooms', [AdminController::class, 'rooms'])->name('admin.rooms');
    Route::get('teams', [AdminController::class, 'teams'])->name('admin.teams');
    Route::get('buses', [AdminController::class, 'buses'])->name('admin.buses');
    // Route::post('aduploadBankTransfer',[AdminController::class,'uploadBankeReciept'])->name('adminuploadBankTransfer');

    Route::post('create-reservation', [RoomController::class, 'createRoom'])->name('admin.createReservation');
    Route::post('leave-room', [RoomController::class, 'leaveRoom'])->name('admin.leave-room');
    Route::post('join-public-room', [RoomController::class, 'joinPublicRoom'])->name('admin.joinPublicRoom');
    Route::post('createJoin-Request', [JoinRoomRequestController::class, 'createJoinRequest'])->name('admin.createJoinRequest');
    Route::post('cancelJoin-Request', [JoinRoomRequestController::class, 'cancelJoinRequest'])->name('admin.cancelJoinRequest');
    Route::post('accept-join', [JoinRoomRequestController::class, 'acceptJoinRequest'])->name('admin.acceptJoinRequest');
    Route::post('reject-JoinRequest', [JoinRoomRequestController::class, 'rejectJoinRequest'])->name('admin.rejectJoinRequest');
    Route::post('uploadBankTransfer', [UserController::class, 'uploadBankTransfer'])->name('admin.uploadBankTransfer');
    Route::post('removeBankTransfer', [UserController::class, 'removeBankTransfer'])->name('admin.removeBankTransfer');
    Route::post('change-profile-picture', [UserController::class, 'updatePicture'])->name('admin.userPictureUpdate');
    Route::post('choosePaymentAgent', [UserController::class, 'ChoosePaymentAgent'])->name('admin.choosePaymentAgent');


    Route::POST('userDelete', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');

    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('adminUpdateInfo');
    Route::post('update-password', [AdminController::class, 'updatePassword'])->name('adminUpdatePassword');
    Route::post('change-profile-picture', [AdminController::class, 'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('adminChangePassword');
    Route::post('update-user-info', [AdminController::class, 'updateParticipantInfo'])->name('adminupdateParticipantInfo');
    Route::post('add-agents', [AdminController::class, 'add_Pay_Agent'])->name('add_Pay_Agent');
    Route::post('pay_user', [AdminController::class, 'payForuser'])->middleware('isSuperAdmin')->name('admin.pay_user');
    Route::post('confirm_room', [AdminController::class, 'confirmRoom'])->name('admin.confirm_room');
    Route::post('delete_room', [RoomController::class, 'deleteRoom'])->name('admin.delete_room');
    Route::post('collectamount', [AdminController::class, 'collectamount'])->name('collectAmount');
    Route::post('launchBus', [AdminController::class, 'launchBus'])->name('launchBus');
    Route::post('addBus', [AdminController::class, 'addBus'])->name('addBus');
    Route::post('deleteExpired', [RoomController::class, 'deleteExpired'])->name('admin.deleteExpired');
    Route::post('refreshRooms', [RoomController::class, 'refreshRooms'])->name('admin.refreshRooms');
    Route::post('delete_team', [TeamController::class, 'deleteTeam'])->name('admin.delete_team');
    Route::post('deleteUnpaidTeams', [TeamController::class, 'deleteUnpaidTeams'])->name('admin.deleteUnpaidTeams');
    Route::post('refreshTeams', [TeamController::class, 'refreshTeams'])->name('admin.refreshTeams');

    // CIN
    Route::get('uploadCIN', [UserController::class, 'uploadCIN'])->name('admin.uploadCIN');
    Route::post('uploadCinFront', [UserController::class, 'uploadCinFront'])->name('admin.uploadCinFront');
    Route::post('uploadCinBack', [UserController::class, 'uploadCinBack'])->name('admin.uploadCinBack');
    Route::post('uploadMadhmounPassport', [UserController::class,'uploadMadhmounPassport'])->name('admin.uploadMadhmounPassport');
    Route::post('SkipCIN', [UserController::class, 'SkipCIN'])->name('admin.SkipCIN');

});

Route::group(['prefix' => 'organizer', 'middleware' => ['isOrganizer', 'auth', 'PreventBackHistory']], function () {
    Route::get('/store-variable/{var}', [UserController::class, 'store']);
    Route::get('account', [UserController::class, 'index'])->name('organizer.account');
    Route::get('dashboard', [OrganizerController::class, 'index'])->name('organizer.dashboard');
    Route::get('participants', [OrganizerController::class, 'participants'])->name('organizer.participants');
    Route::get('participants_all', [OrganizerController::class, 'participants_all'])->name('organizer.all');
    Route::get('assign', [OrganizerController::class, 'assign_pg'])->name('organizer.assign');
    Route::get('profile', [OrganizerController::class, 'profile'])->name('organizer.profile');
    Route::get('settings', [OrganizerController::class, 'settings'])->name('organizer.settings');

    Route::post('create-reservation', [RoomController::class, 'createRoom'])->name('organizer.createReservation');
    Route::post('leave-room', [RoomController::class, 'leaveRoom'])->name('organizer.leave-room');
    Route::post('join-public-room', [RoomController::class, 'joinPublicRoom'])->name('organizer.joinPublicRoom');
    Route::post('createJoin-Request', [JoinRoomRequestController::class, 'createJoinRequest'])->name('organizer.createJoinRequest');
    Route::post('cancelJoin-Request', [JoinRoomRequestController::class, 'cancelJoinRequest'])->name('organizer.cancelJoinRequest');
    Route::post('accept-join', [JoinRoomRequestController::class, 'acceptJoinRequest'])->name('organizer.acceptJoinRequest');
    Route::post('reject-JoinRequest', [JoinRoomRequestController::class, 'rejectJoinRequest'])->name('organizer.rejectJoinRequest');
    Route::post('completeProfile', [UserController::class, 'completeProfile'])->name('completeProfile');

    Route::post('assign_room', [OrganizerController::class, 'assign_room'])->name('organizer.assign_room');
    Route::post('pay_user', [OrganizerController::class, 'payForuser'])->middleware('isPayagent')->name('pay_user');
    Route::post('update-profile-info', [OrganizerController::class, 'updateInfo'])->name('organizerUpdateInfo');
    Route::post('update-password', [OrganizerController::class, 'updatePassword'])->name('organizerUpdatePassword');
    Route::post('uploadBankTransfer', [UserController::class, 'uploadBankTransfer'])->name('organizer.uploadBankTransfer');
    Route::post('removeBankTransfer', [UserController::class, 'removeBankTransfer'])->name('organizer.removeBankTransfer');
    Route::post('change-profile-picture', [UserController::class, 'updatePicture'])->name('organizer.userPictureUpdate');
    Route::post('choosePaymentAgent', [UserController::class, 'ChoosePaymentAgent'])->name('organizer.choosePaymentAgent');

    // CIN
    Route::get('uploadCIN', [UserController::class, 'uploadCIN'])->name('organizer.uploadCIN');
    Route::post('uploadCinFront', [UserController::class, 'uploadCinFront'])->name('organizer.uploadCinFront');
    Route::post('uploadCinBack', [UserController::class, 'uploadCinBack'])->name('organizer.uploadCinBack');
    Route::post('uploadMadhmounPassport', [UserController::class,'uploadMadhmounPassport'])->name('organizer.uploadMadhmounPassport');
    Route::post('SkipCIN', [UserController::class, 'SkipCIN'])->name('organizer.SkipCIN');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
    Route::get('uploadCIN', [UserController::class, 'uploadCIN'])->name('user.uploadCIN');
    Route::get('/store-variable/{var}', [UserController::class, 'store']);

    // Info
    Route::post('update-profile-info', [UserController::class, 'updateInfo'])->name('userUpdateInfo');
    Route::post('update-password', [UserController::class, 'updatePassword'])->name('userUpdatePassword');
    Route::post('update-transport', [UserController::class, 'updateTransport'])->name('userupdateTransport');
    Route::post('completeProfile', [UserController::class, 'completeProfile'])->name('completeProfile');

    // Room management
    Route::post('create-reservation', [RoomController::class, 'createRoom'])->name('createReservation');
    Route::post('leave-room', [RoomController::class, 'leaveRoom'])->name('leave-room');
    Route::post('join-public-room', [RoomController::class, 'joinPublicRoom'])->name('joinPublicRoom');
    Route::post('createJoin-Request', [JoinRoomRequestController::class, 'createJoinRequest'])->name('createJoinRequest');
    Route::post('cancelJoin-Request', [JoinRoomRequestController::class, 'cancelJoinRequest'])->name('cancelJoinRequest');
    Route::post('accept-join', [JoinRoomRequestController::class, 'acceptJoinRequest'])->name('acceptJoinRequest');
    Route::post('reject-JoinRequest', [JoinRoomRequestController::class, 'rejectJoinRequest'])->name('rejectJoinRequest');

    // CIN
    Route::post('uploadCinFront', [UserController::class, 'uploadCinFront'])->name('user.uploadCinFront');
    Route::post('uploadCinBack', [UserController::class, 'uploadCinBack'])->name('user.uploadCinBack');
    Route::post('uploadMadhmounPassport', [UserController::class,'uploadMadhmounPassport'])->name('user.uploadMadhmounPassport');
    Route::post('SkipCIN', [UserController::class, 'SkipCIN'])->name('user.SkipCIN');

    // Team management
    Route::post('Create-A-Team', [TeamController::class, 'CreateATeam'])->name('CreateATeam');
    Route::post('leave-team', [TeamController::class, 'leaveTeam'])->name('leave-team');
    Route::post('join-public-team', [TeamController::class, 'joinPublicTeam'])->name('joinPublicTeam');
    Route::post('Join-request', [JoinTeamRequestController::class, 'SendJoinRequest'])->name('SendJoinRequest');
    Route::post('accept-team-join', [JoinTeamRequestController::class, 'AcceptJoinTeamRequest'])->name('AcceptJoinTeamRequest');
    Route::post('cancelTeamJoin-Request', [JoinTeamRequestController::class, 'cancelTeamJoinRequest'])->name('cancelTeamJoinRequest');
    Route::post('reject-Join-Team-Request', [JoinTeamRequestController::class, 'rejectJoinTeamRequest'])->name('reject-Join-Team-Request');


    Route::post('change-profile-picture', [UserController::class, 'updatePicture'])->name('userPictureUpdate');
    Route::post('choosePaymentAgent', [UserController::class, 'ChoosePaymentAgent'])->name('choosePaymentAgent');
    Route::post('uploadBankTransfer', [UserController::class, 'uploadBankTransfer'])->name('uploadBankTransfer');
    Route::post('removeBankTransfer', [UserController::class, 'removeBankTransfer'])->name('removeBankTransfer');
    Route::post('reserveBus', [UserController::class, 'reserveBus'])->name('reserveBus');
    Route::post('cancelBus', [UserController::class, 'cancelBus'])->name('cancelBus');
});