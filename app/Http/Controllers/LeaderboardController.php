<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Step;
use App\Models\User;


class LeaderboardController extends Controller
{
    public function viewSteps(){
        $steps = Step::all();
        $user = User::all();

        return view("leaderboard", ["step" => $steps, "user" => $user]);
    }
}
