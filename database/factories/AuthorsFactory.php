<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    $authorName = $faker->unique()->userName;
    $birthday = $faker->date('Y-m-d');
    $biography = $faker->realText('50');
    return [
        'name' => $authorName,
        'birthday' => $birthday,
        'biography' => $biography,
        'slug' => str_slug($authorName),
    ];
});
