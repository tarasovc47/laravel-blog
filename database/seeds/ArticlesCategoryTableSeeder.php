<?php

namespace Database\Seeders;

use App\Models\ArticlesCategory;
use Illuminate\Database\Seeder;

class ArticlesCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticlesCategory::factory()
            ->count(15000)
            ->create();
    }
}
