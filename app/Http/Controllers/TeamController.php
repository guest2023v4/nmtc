<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JoinTeamRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /*
|
|
|-------------------------------------
|    CREATE TEAM  ##  NMTC  ##   |
|-------------------------------------
|
|
 */

    public function CreateATeam(Request $request)
    {
        session()->put('route', 'team');
        $request->validate([
            'teamName' => 'required',
        ]);
        // Verify if user already have room
        if (Auth::user()->team_id != null) {
            return redirect()->route('user.dashboard')->with('error', 'You already have a team');
        } else {
            $code = "";
            do {
                $code = strtoupper(substr(md5(microtime()), rand(0, 26), 5));
            } while (Team::where('code', $code)->exists());
            $team = new Team;
            $team->name = $request->teamName;
            $team->code = $code;
            $team->logo = "hackathon.png";
            $team->type = 0;
            $team->is_all_paid = 0;
            $team->team_leader_id = Auth::id();
            if ($team->save()) {
                $team->refresh();
                User::where('id', Auth::user()->id)->update(['team_id' => $team->id]);
                if (JoinTeamRequest::where('user_id', Auth::id())->exists())
                    JoinTeamRequest::where('user_id', Auth::id())->delete();
                return redirect()->route('user.dashboard')->with('success', 'Team created successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to create team');
            }
        }
    }

    public function joinPublicTeam(Request $request)
    {
        $user = User::find(Auth::id());
        // Get all public teams and check capacity
        $public_teams = Team::where('type', 1)->get();
        $team = null;
        foreach ($public_teams as $key => $team_value) {
            if ($team_value->users->count() < 4) {
                $team = $team_value;
                break;
            }
        }
        // Verify if there's a public team
        if ($team != null) {
            $user->team_id = $team->id;
            if ($user->update()) {
                if (JoinTeamRequest::where('user_id', $user->id)->exists())
                    JoinTeamRequest::where('user_id', $user->id)->delete();
                if ($team->users->count() == 0) {
                    $team->team_leader_id = $user->id;
                    $team->update();
                }
                return redirect()->route('user.dashboard')->with('success', 'Joined public team successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to join public team');
            }
        } else {
            // Else create a public team
            $code = "";
            do {
                $code = strtoupper(substr(md5(microtime()), rand(0, 26), 5));
            } while (Team::where('code', $code)->exists());
            $team = new Team;
            $team->name = "Challengers_" . rand(1000, 9999);
            $team->code = $code;
            $team->logo = "hackathon.png";
            $team->type = 1;
            $team->is_all_paid = 0;
            $team->team_leader_id = Auth::id();
            if ($team->save()) {
                $team->refresh();
                User::where('id', Auth::user()->id)->update(['team_id' => $team->id]);
                $allJoinRequests = JoinTeamRequest::where('user_id', $user->id)->delete();
                return redirect()->route('user.dashboard')->with('success', 'Public team created successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to create public team');
            }
        }
    }

    /*
    |
    |
    |---------------------------------
    |    LEAVE TEAM   ##  NMTC  ##   |
    |---------------------------------
    |
    |
     */

    public function leaveTeam(Request $request)
    {
        session()->put('route', 'team');
        $user = User::find(Auth::user()->id);
        $team = $user->team;
        // Verify if user have a team or no
        if ($team->first() != null) {
            $user->team_id = null;
            $update = $user->update();
            $user->refresh();
            $team->refresh();

            if ($team->team_leader_id === $user->id && $update) {
                $teammate = $team->users->first();
                if ($teammate == null) {
                    if (JoinTeamRequest::where('team_id', $team->id)->exists())
                        $update = JoinTeamRequest::where('team_id', $team->id)->delete();
                    $team->delete();
                } else {
                    $team->team_leader_id = $teammate->id;
                    $update = $update && $team->update();
                }
            }

            if ($update) {
                return redirect()->route('user.dashboard')->with('success', 'Team left successfully');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Failed to leave team');
            }
        } else {
            return redirect()->route('user.dashboard')->with('error', 'You dont have a team');
        }
    }

    public function deleteTeam(Request $request)
    {
        $request->validate([
            'teamID' => 'required',
        ]);
        $team = Team::find($request->teamID);
        if ($team != null) {
            if ($team->delete())
                return redirect()->back()->with('success', 'Team deleted successfully');
            else
                return redirect()->back()->with('error', 'Error: Team not deleted');
        } else {
            return redirect()->back()->with('error', 'Team not found');
        }
    }

    public function deleteUnpaidTeams(Request $request)
    {
        $n = 0;
        $unpaid_teams = Team::where('is_all_paid', 0)->get();
        foreach ($unpaid_teams as $key => $team) {
            $has_one_paid = 0;
            foreach ($team->users as $user) {
                if ($user->pay_status_pack == 1) {
                    $has_one_paid = 1;
                    break;
                }
            }
            if ($has_one_paid == 0) {
                    $team->delete();
                    $n++;
            }
        }
        return redirect()->back()->with('success', "$n Teams deleted successfully");
    }

    public function refreshTeams(Request $request)
    {
        $n = 0;
        $teams = Team::all();
        foreach ($teams as $key => $team) {
            $is_all_paid = 1;
            foreach ($team->users as $user) {
                if ($user->pay_status_pack == 0) {
                    $is_all_paid = 0;
                    break;
                }
            }
            if ($team->is_all_paid != $is_all_paid) {
                $team->is_all_paid = $is_all_paid;
                $team->update();
                $n++;
                // else {
                //     $room->is_all_paid = 0;
                //     $room->update();
                //     $n++;
                // }

            }
        }
        return redirect()->back()->with('success', "$n Teams updated successfully");
    }
}