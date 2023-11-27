<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'player_phone' => $validateData['player_phone'],
        ]);

        return redirect()->route('user.edit', ['user' => $user->id])->with('message', "User \"{$validateData['name']}\" details updated successfuly!");
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password successfully changed.');
    }

    public function editPassword()
    {
        return view('user-password-edit');
    }
}
