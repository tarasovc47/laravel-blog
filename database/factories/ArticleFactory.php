<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word();
        return [
            'title' => $title,
            'annotation' => $this->faker->sentence(3),
            'text' => $this->faker->realText(100),
            'author_id' => rand(1,30),
            'slug' => str_slug($title)
        ];
    }
}
