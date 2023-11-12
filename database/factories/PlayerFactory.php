<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $modelPlayer = Player::class;
    protected $modelUser = User::class;

    public function definition()
    {
        $players = Player::all();
        $users = User::all();

        $i=0;
        foreach ($users as $user) {
            $useridArray[$i] = $user->id;
            $i++;
        }

        $genderList = ['Male', 'Female'];

        return [
            'player_id' => $this->faker->unique()->randomElement($useridArray),
            'player_phone' => '08' . $this->faker->unique()->numerify('##########'),
            'player_gender' => $this->faker->randomElement($genderList),
        ];
    }
}
