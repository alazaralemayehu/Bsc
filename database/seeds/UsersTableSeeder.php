<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create([
            'email' => 'alazar.1994@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
    }
}
