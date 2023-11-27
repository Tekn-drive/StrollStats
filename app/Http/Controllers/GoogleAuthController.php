<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Faker\Generator as Faker;


class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle(){
        try{
            $google_user = Socialite::driver('google') -> user();

            $user = User::where('google_id', $google_user -> getId()) -> first();

            $genderList = ['Male', 'Female'];
            $faker = \Faker\Factory::create();

            if(!$user){
                $new_user = User::create([
                    'name' => $google_user -> getName(),
                    'email' => $google_user -> getEmail(),
                    'google_id' => $google_user -> getId(),
                    'password' => bcrypt('password'),
                ]);

                $new_user->player()->create([
                    'player_phone' => '08' . $faker->unique()->numerify('##########'),
                    'player_gender' => $faker->randomElement(['Male', 'Female']),
                ]);

                Auth::login($new_user);
    
                return redirect() -> intended('home');
            }
            else{
                Auth::login($user);
                return redirect() -> intended('home');
            }
        } catch (\Throable $th){
            dd("Something Went Wrong", $th -> getMessage());
        }
    }
}
