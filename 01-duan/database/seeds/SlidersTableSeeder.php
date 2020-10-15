<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++){
            Slider::create([
                'name' => $faker->name(),
                'description' =>$faker->name(),
                'image_name' => $faker->name(),
                'image_path' => $faker->name(),
            ]);
        }

    }
}
