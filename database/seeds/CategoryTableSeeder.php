<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run(Faker $faker)
    {
        $categories = [];
        for ($i = 1; $i <= 300; $i++)
        {
            $title = $faker->sentence(2);
            $categories[] = [
                'title' => $title,
                'description' => $faker->sentence(3),
                'slug' => str_slug($title)
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
