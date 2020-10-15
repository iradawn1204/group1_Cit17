<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

        	PistolsSeeder::class,UserSeeder::class,ShotgunSeeder::class,PumpActionSeeder::class,BreakActionSeeder::class


        ]);
    }
}
