<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\restaurant;
use Faker\Generator as Faker;

$factory->define(restaurant::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'address' => $faker->address,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),

        'rating' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 3, $max = 5),
        'cost' => $faker->randomDigitNotNull(),
        'displayImg' => $faker->imageUrl($width = 640, $height = 480, 'food', true, 'Faker'),
        'logo' => $faker->imageUrl($width = 80, $height = 80, 'abstract', true, 'Faker'),
    ];
});
