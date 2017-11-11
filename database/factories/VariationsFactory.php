<?php

use Faker\Generator as Faker;

$factory->define(App\Variation::class, function (Faker $faker) {
    return [
        'amount' => $faker->randomFloat(2, -5, 5),
        'date' => $faker->dateTimeThisDecade
    ];
});
