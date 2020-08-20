<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment_body'  => $faker->sentence(),
        'comment_by'    => $faker->firstName,
        'post_id'       => $faker->numberBetween(1, 50),
        'email'         => $faker->safeEmail,
        'website'       => $faker->domainName
    ];
});
