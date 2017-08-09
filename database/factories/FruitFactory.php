<?php

use Faker\Generator as Faker;

$factory->define(App\Fruit::class, function (Faker $faker) {
    return [
        'name' => "$faker->colorName $faker->streetName",
        'company' => $faker->company,
        'type' => $faker->word,
        'is_daily' => $faker->boolean,
    ];
});
