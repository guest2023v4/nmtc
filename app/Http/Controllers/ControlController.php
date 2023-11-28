<?php

namespace App\Http\Controllers;

use App\Models\Control;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function updateControls(Request $request)
    {
        $request->validate([
            'control' => 'required |in:reg,room,bus,team,pay'
        ]);
        $controls = Control::first();
        switch ($request->control) {
            case 'reg':
                $controls->registration = ($controls->registration + 1) % 2;
                break;
            case 'room':
                $controls->rooms = ($controls->rooms + 1) % 2;
                break;
            case 'bus':
                $controls->bus = ($controls->bus + 1) % 2;
                break;
            case 'team':
                $controls->teams = ($controls->teams + 1) % 2;
                break;
            case 'pay':
                $controls->payment = ($controls->payment + 1) % 2;
                break;
        }
        if($controls->update())
            return redirect()->back()->with('success','Controls updated successfully');
        else
        return redirect()->back()->with('error','Failed to update controls');
    }
}