<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function updateRoomTypes(Request $request)
    {
        $request->validate([
            'id' => 'required | numeric',
            'rooms_number' => 'required |numeric'
        ]);
        $roomType = RoomType::where('label', $request->id)->first();
        if ($roomType->rooms->count() <= $request->rooms_number) {
            if ($roomType->update(['rooms_nb' => $request->rooms_number]))
                return redirect()->back()->with('success', 'Room type updated successfully');
            else
                return redirect()->back()->with('error', 'Failed to update room type');
        } else {
            return redirect()->back()->with('error', 'Failed to update room type');
        }
    }
}