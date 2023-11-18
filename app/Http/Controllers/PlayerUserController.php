<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Step;
use App\Models\User;

class PlayerUserController extends Controller
{
    public function editUser(){
        $user = auth()->user();
        $playerDetails = $user->player;
        return view('user-edit', compact('user', 'playerDetails'));
    }

    public function updateUser(Request $request){
        $validateData = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'player_phone' => 'required|min:10|max:13',
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
        ]);

        $user->player->update([
            'phone_number' => $validateData['player_phone'],
        ]);

        return redirect()->route('user.edit', ['user' => $user->id])->with('message', "User \"{$validateData['name']}\" details updated successfuly!");
    }
}
