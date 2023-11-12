<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Step;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Step::factory(90)->create();
    }
}
