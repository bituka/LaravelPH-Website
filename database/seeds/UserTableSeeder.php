<?php 
// app/database/seeds/UserTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    /*
    User::create(array(
        'email'    => 'goryo@webdev@gmail.com',
        'password' => Hash::make('testpassword'),
    ));    
    */
    DB::table('users')->insert(
    array(
         'email' => 'goryo.webdev@gmail.com',
         'password' => Hash::make('testpassword'),
        )
    );

    
}

}
