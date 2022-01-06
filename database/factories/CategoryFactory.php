<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'description' => $this->faker->words(4, true),
            'slug' => str_slug($title)
        ];
    }
}
