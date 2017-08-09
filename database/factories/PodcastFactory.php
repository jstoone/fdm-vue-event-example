<?php

use Faker\Generator as Faker;

$factory->define(App\Podcast::class, function (Faker $faker) {
    $genres = [
        'tech',
        'feminism',
        'cartoons',
    ];

    return [
        'name' => "$faker->colorName $faker->jobTitle",
        'author' => $faker->name,
        'genre' => $faker->randomElement($genres),
    ];
});
