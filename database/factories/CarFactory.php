<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Model' => $faker->name,
        'Year' => $faker->year,
        'Make' => $faker->randomElement(['honda', 'ford', 'toyota']),
    ];
});
