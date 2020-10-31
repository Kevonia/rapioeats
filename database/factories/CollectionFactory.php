<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collection;
use Faker\Generator as Faker;

$factory->define(Collection::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 50),
        'displayImg' => $faker->imageUrl(640, 480, 'food', true, 'Faker'),
    ];
});
