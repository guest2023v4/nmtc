<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\rooms;
use App\Models\reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'userID' => 'required',
            'roomSize' => 'required',
        ]);
        $reservation = new reservation();
        $room = rooms::where('roomPlaces', $request->roomSize)->first();
        $reservation->roomID = $room->id;
        $reservation->userID = Auth::user()->id;
      
        if ($reservation->save()) {
            return redirect()->route('user.dashboard')->with('success','Saved successfully');
        } else {
            return redirect()->route('user.dashboard')->with('success','not saved successfully');
        }
    }
}
