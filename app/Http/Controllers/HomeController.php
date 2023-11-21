<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Step;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $playerDetails = $user->player;
        $totalSteps = $user->totalSteps();

        $usersWithSteps = User::with('player')
        ->leftJoin('steps', 'users.id', '=', 'steps.player_id')
        ->select('users.id', 'users.name', DB::raw('SUM(steps.steps) as totalSteps'))
        ->groupBy('users.id', 'users.name')
        ->orderByDesc('totalSteps')
        ->get();

        return view('home', compact('user', 'playerDetails', 'totalSteps', 'usersWithSteps'));
    }
}
