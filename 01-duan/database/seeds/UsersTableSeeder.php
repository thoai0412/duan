<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'name' => "kingdaica",
            'email' => "kingdaica@gmail.com",
            'passwd' => bcrypt('123456')
        ]);
    }

}