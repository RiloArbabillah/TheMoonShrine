<?php

use Illuminate\Database\Seeder;
use app\user;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        user::create([
            'name' => 'admin',
        ]);
        user::create([
            'email' => 'admin@gmail.com',
        ]);
        user::create([
            'password' => hash('Fujiwara'),
        ]);
        user::create([
            'remember_token' => csrf_token(),
        ]);
    }
}
