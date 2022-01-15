<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ucwords($this->faker->name);
        return [
            'name' => $name,
            'birthday' => $this->faker->date('Y-m-d'),
            'biography' => $this->faker->realText(100),
            'slug' => str_slug($name)
        ];
    }
    /**
     * Название модели, соответствующей фабрике.
     *
     * @var string
     */
}
