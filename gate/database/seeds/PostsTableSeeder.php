<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
           'title' => "admin post",
           'user_id' => ('1'),
        ]);
        Post::create([
            'title' => "dev post",
            'user_id' => ('2'),
         ]);
    }
}
