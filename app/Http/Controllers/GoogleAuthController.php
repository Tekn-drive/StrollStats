<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Step;
use Illuminate\Support\Facades\Auth;
use Google\Client\Fitness;
use Google\Service\Fitness as GoogleFitness;
use Illuminate\Support\Facades\Log;


class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')
        ->scopes(['https://www.googleapis.com/auth/fitness.activity.read'])
        ->redirect();
    }
    public function callbackGoogle(){
        try{
            $google_user = Socialite::driver('google') -> user();

            $user = User::where('google_id', $google_user -> getId()) -> first();


            $token = $google_user -> token;

            $client = new \Google\Client();
            $client -> setAccessToken($token);
    
            $fitness_service = new GoogleFitness($client);
    
            $dataSourceId = 'derived:com.google.step_count.delta:com.google.android.gms:estimated_steps';
            $startTime = strtotime('2023-10-27 00:00:00') * 1000000000; // Convert to nanoseconds
            $endTime = strtotime('2023-11-27 23:59:59') * 1000000000; // Convert to nanoseconds
            $datasetId = $startTime . '-' . $endTime;
    
            $dataSet = $fitness_service->users_dataSources_datasets->get('me', $dataSourceId, $datasetId);

            $points = $dataSet->getPoint();

            $totalSteps = 0;

            foreach ($points as $point) {
                // Each point has a value field, which is an array. The first item in this array contains the step count.
                $values = $point->getValue();

                if (!empty($values)) {
                    $totalSteps += $values[0]->getIntVal(); // Assuming the step count is an integer value
                }
            }

            file_put_contents(storage_path('logs/custom_log.log'), print_r($totalSteps, true), FILE_APPEND);

            $stepController = new StepController();


            if(!$user){
                $new_user = User::create([
                    'name' => $google_user -> getName(),
                    'email' => $google_user -> getEmail(),
                    'google_id' => $google_user -> getId(),
                    'password' => bcrypt('password'),
                ]);

                $new_user->player()->create([
                    'player_phone' => null,
                    'player_gender' => null,
                ]);

                Auth::login($new_user);
                $stepController->saveSteps($new_user->id, $totalSteps);

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
