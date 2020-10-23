<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => "admin",
            'display_name' => "Quang Tri He Thong",
        ]);
        Role::create([
            'name' => "guest",
            'display_name' => "Khach Hang",
        ]);
        Role::create([
            'name' => "deverloper",
            'display_name' => "Phat Trien He Thong",
        ]);
        Role::create([
            'name' => "content",
            'display_name' => "Chinh Sua Noi Dung",
        ]);
    }
}
