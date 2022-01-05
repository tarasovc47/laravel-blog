<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->words(2, true);
    return [
        'title' => $title,
        'annotation' => 'announce',
        'text' => $faker->realText(),
        'author_id' => random_int(1,200),
        'slug' => str_slug($title),
    ];
});
