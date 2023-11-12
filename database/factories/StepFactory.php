<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Step;
use Illuminate\Database\Eloquent\Factories\Factory;

class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $modelStep = Step::class;
    protected $modelUser = User::class;

    public function definition()
    {
        $steps = Step::all();
        $users = User::all();

        $i=0;
        foreach ($users as $user) {
            $useridArray[$i] = $user->id;
            $i++;
        }

        return [
            'player_id' => $this->faker->randomElement($useridArray),
            'steps' => $this->faker->numberBetween(2000,10000),
        ];
    }
}
