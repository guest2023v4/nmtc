<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JoinTeamRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JoinTeamRequestController extends Controller
{
    /*
|
|
|-------------------------------------
|    JOIN TEAM  ##  NMTC  ##   |
|-------------------------------------
|
|
 */

    public function SendJoinRequest(Request $request)
    {
        session()->put('route', 'team');
        $request->validate([
            'teamcode' => 'required',
        ]);
        $team = Team::where('code', $request->teamcode)->first();
        // Verify if team code is true
        if ($team) {
            if (JoinTeamRequest::where('user_id', Auth::user()->id)->where('team_id', $team->id)->exists() || Auth::user()->team_id != null) {
                return redirect()->route('user.dashboard')->with('error', 'You already requested to join this team');
            } else {
                if ($team->users->count() < 4) {
                    $joinRequest = new JoinTeamRequest();
                    $joinRequest->team_id = $team->id;
                    $joinRequest->user_id = Auth::user()->id;
                    $joinRequest->status = 0;
                    $joinRequest->save();
                    if ($joinRequest->save()) {
                        return redirect()->route('user.dashboard')->with('success', 'Join request created successfully');
                    } else {
                        return redirect()->route('user.dashboard')->with('error', 'Failed to create join request');
                    }

                } else {
                    return redirect()->route('user.dashboard')->with('error', 'Team is full');
                }
            }
        } else {
            return redirect()->route('user.dashboard')->with('error', 'Team not found');
        }

    }

    /*
    |
    |
    |----------------------------------------------
    |    ACCEPT JOIN TEAM REQUESTS ##  NMTC  ##   |
    |----------------------------------------------
    |
    |
    */

    public function cancelTeamJoinRequest(Request $request)
    {
        session()->put('route', 'team');
        $request->validate([
            'team_id' => 'required',
        ]);
        $joinRequest = JoinTeamRequest::where('user_id', Auth::id())->where('team_id', $request->team_id)->first();
        if ($joinRequest != null) {
            if ($joinRequest->delete()) {
                return redirect()->route('user.dashboard')->with('success', 'Join request deleted successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to delete join request');
            }
        } else {
            return redirect()->route('user.dashboard')->with('success', 'Join request deleted successfully');
        }
    }

    public function AcceptJoinTeamRequest(Request $request)
    {
        session()->put('route', 'team');
        $user = User::find($request->id);
        $team = Team::find(Auth::user()->team->id);
        $joinRequest = JoinTeamRequest::where('user_id', $request->id)->where('team_id', $team->id)->first();
        if ($joinRequest != null) {
            if (Team::find($team->id)->users->count() < 4) {
                $user->team_id = $team->id;
                if ($user->update()) {
                    $allJoinRequests = JoinTeamRequest::where('user_id', $request->id)->delete();
                    return redirect()->route('user.dashboard')->with('success', 'Join request accepted successfully');
                } else {
                    return redirect()->route('user.dashboard')->with('error', 'Failed to accept join request');
                }
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Team is full');
            }
        }
    }

    /*
    |
    |
    |----------------------------------------------
    |    REJECT JOIN TEAM REQUEST  ##  NMTC  ##   |
    |----------------------------------------------
    |
    |
    */

    public function rejectJoinTeamRequest(Request $request)
    {
        session()->put('route', 'team');
        $joinRequest = JoinTeamRequest::where('user_id', $request->id)->where('team_id', Auth::user()->team_id)->first();
        if ($joinRequest != null) {
            if ($joinRequest->delete()) {
                return redirect()->route('user.dashboard')->with('success', 'Join request rejected successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to reject join request');
            }
        } else {
            return redirect()->route('user.dashboard')->with('success', 'Join request rejected successfully');
        }
    }
}