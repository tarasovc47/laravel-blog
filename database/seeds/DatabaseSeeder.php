<?php

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
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
        // $this->call(UsersTableSeeder::class);
        $this->call([
            AuthorsSeeder::class,
            CategoriesSeeder::class,
            ArticlesSeeder::class]);
        factory(Author::class, 200)->create();
        factory(Category::class, 100)->create();
        factory(Article::class, 500)->create();
    }
}
