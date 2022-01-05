<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->unique()->word;
    return [
        'title' => $title,
        'slug' => str_slug($title),
    ];
});
