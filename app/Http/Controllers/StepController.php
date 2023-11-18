<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Step;
use App\Models\User;

class StepController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $playerDetails = $user->player;
        $playerSteps = $user->steps;

        return view('track', compact('user', 'playerDetails', 'playerSteps'));
    }

    public function processForm(Request $request){
        $validateData = $request->validate([
            'steps' => 'required|integer',
        ]);
        
        $step = new Step();
        $step->steps = $validateData['steps'];
        $user = auth()->user();
        $step->player_id = $user->id;
        $step->save();

        return redirect()->route('steps.allSteps');
    }
}
