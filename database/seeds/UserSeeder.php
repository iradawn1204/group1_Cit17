<?php

use Illuminate\Database\Seeder;

use App\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User:: create([
              
              'name'=>'Admin',
              'password' => bycrypt('admin'),
              'birthdate'=> 'NA',
              'place' => 'NA'

        



        ])
    }
}
