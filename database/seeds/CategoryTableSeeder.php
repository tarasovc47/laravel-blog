<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $categories = [];
        for ($i = 1; $i <= 300; $i++)
        {
            $categoryTitle = "Категория №" . $i;
            $categories[] = [
                'title' => $categoryTitle,
                'description' => Str::random(),
                'slug' => str_slug($categoryTitle)
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
