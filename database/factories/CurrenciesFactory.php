<?php

use Faker\Generator as Faker;

$factory->define(App\Currency::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word
    ];
});
