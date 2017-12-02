<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Eduardo",
                'email' => 'edu@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
            ]
        ]);
    }
}