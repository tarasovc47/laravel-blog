<?php

use Database\Seeders\ArticlesCategoryTableSeeder;
use Database\Seeders\ArticleTableSeeder;
use Database\Seeders\AuthorTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryTableSeeder::class,
            AuthorTableSeeder::class,
            ArticleTableSeeder::class,
            ArticlesCategoryTableSeeder::class
        ]);
    }
}
