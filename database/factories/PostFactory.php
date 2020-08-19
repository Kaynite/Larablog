<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence,
        'body'          => $faker->text(500),
        'author'        => 1,
        'category_id'   => $faker->numberBetween(1, 5),
        'hot'           => $faker->randomElement([0, 1]),
        'image'         => 'image' . $faker->numberBetween(1, 20) . '.jpg',
    ];
});
