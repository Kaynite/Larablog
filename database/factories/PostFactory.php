<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body'  => $faker->text(500),
        'author' => 1,
        'category_id' => $faker->randomElement([1, 2, 3, 4]),
    ];
});
