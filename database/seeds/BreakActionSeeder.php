<?php

use Illuminate\Database\Seeder;

class BreakActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
           $break_action =[

        	'model_name' =>'Mossberg 500',
        	'gun_history' =>'Na',
        	'barrel_type'=> 'single',
        	'fore_end' =>'wooden black',
        	'bullet' =>'70mm',
        	'weight' =>'7lbs',
        	'power' =>'S+',
        	'description' =>'Mossberg 500 is a series of pump action shotguns manufactured by O.F. Mossberg & Sons. The 500 series comprises widely varying models of hammerless repeaters, all of which share the same basic receiver and action, but differ in bore size, barrel length, choke options, magazine capacity, stock and forearm materials.',
        	'price' =>'$650',
        	'users_rating' =>'Processing....',
        	'user_comment' =>'Processing...'


        ]    }
}
