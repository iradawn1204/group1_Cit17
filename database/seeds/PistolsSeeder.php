<?php

use Illuminate\Database\Seeder;

class PistolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $pistol = [
        ['model_name' => 'Cz-USA', 'gun_history' => 'text','bullet_type' => 'single', 'silcencer' => 'yes', 'safety_triger' => 'yes', 'sight' => '6.0', 'weight' => '15.9lbs', 'power' => 'A++', 'price_range' => '$599', 'description' => 'text', 'user_rating' => '3', 'user_comment' => 'text'],
        ['model_name' => 'FN', 'gun_history' => 'text','bullet_type' => 'single', 'silcencer' => 'yes', 'safety_triger' => 'yes', 'sight' => '3.7inch', 'weight' => '25.5lbs', 'power' => 'S+', 'price_range' => '$800', 'description' => 'text', 'user_rating' => '5', 'user_comment' => 'text'],

		['model_name' => 'Mossberg', 'gun_history' => 'text','bullet_type' => 'single', 'silcencer' => 'no', 'safety_triger' => 'yes', 'sight' => '3.4 inch', 'weight' => '19.5lbs', 'power' => 'S+', 'price_range' => '$495', 'description' => '', 'user_rating' => '5', 'user_comment' => 'text']
	];



		DB::table('pistols')->insert($pistol);
    }
}
