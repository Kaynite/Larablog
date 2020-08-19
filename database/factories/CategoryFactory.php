<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'          => $faker->word,
        'cover_image'   => 'image' . $faker->numberBetween(1, 20) . '.jpg',
    ];
});
