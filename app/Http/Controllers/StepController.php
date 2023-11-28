<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Step;
use App\Models\User;

class StepController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }


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

    public function destroy($stepId)
    {
        $step = Step::findOrFail($stepId); // Assuming 'Step' is your model name
        $step->delete();

        return back()->with('success', 'Step record deleted successfully.');
    }

    public function saveSteps($userId, $steps) {
        $step = new Step();
        $step->player_id = $userId;
        $step->steps = $steps;
        $step->save();
        // return redirect()->route('steps.allSteps');
    }

}
