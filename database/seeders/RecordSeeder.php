<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
 
class RecordSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('record')->insert([
            // $table->id('walkID');
            // $table->timestamps('');
            // $table->float('distance');
            // $table->float('calories');
            'walkDate' => Carbon::parse('2000-01-01'),
            'distance' => rand(0, 108),
            'calories' => rand(1000, 3000),
        ]);
    }
}