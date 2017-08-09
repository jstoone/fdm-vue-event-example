<?php

use Faker\Generator as Faker;

$factory->define(App\Keyboard::class, function (Faker $faker) {
    $isMechanical = $faker->boolean;

    return [
        'name' => "$faker->colorName $faker->userName",
        'is_mechanical' => $isMechanical,
        'switch_brand' => $isMechanical ? $faker->company : null,
        'switch_color' => $isMechanical ? $faker->colorName : null,
    ];
});
