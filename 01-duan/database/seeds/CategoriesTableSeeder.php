<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'category-2-1',
            'parent_id' =>'2',
            'slug' => 'category-2-1-1'
        ]);
    }
}
