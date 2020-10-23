<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('12345678'),
            'is_admin' => ('1'),
        ]);
        User::create([
            'name' => "dev",
            'email' => "dev@gmail.com",
            'password' => Hash::make('12345678'),
            'is_admin' => ('0'),
        ]);
        User::create([
            'name' => "user",
            'email' => "user@gmail.com",
            'password' => Hash::make('12345678'),
            'is_admin' => ('0'),
        ]);
    }
}
