<?php

use Illuminate\Database\Seeder;

class MachinegunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Machinegun = [
        ['model_name' => 'AA-52', 'gun_history' => 'text','bullet_type' => 'single','magazine' => 'text', 'weight' => '15.9lbs', 'power' => 'A++', 'price_range' => '$0', 'description' => 'text', 'user_rating' => '3', 'user_comment' => 'text'],

        ['model_name' => 'Bren light machine gun', 'gun_history' => 'text','bullet_type' => 'single','magazine' => 'text', 'weight' => '15.9lbs', 'power' => 'A++', 'price_range' => '$0', 'description' => 'text', 'user_rating' => '3', 'user_comment' => 'text'],


		['STK 50MG' => 'Cz-USA', 'gun_history' => 'text','bullet_type' => 'single','magazine' => 'text', 'weight' => '15.9lbs', 'power' => 'A++', 'price_range' => '$0', 'description' => 'text', 'user_rating' => '3', 'user_comment' => 'text'],
	];



		DB::table('Machineguns')->insert($Machinegun);
    }
}
