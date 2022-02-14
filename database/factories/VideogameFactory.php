<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'titolo' => $faker -> words(3, true),
        'sottotitolo' => $faker -> sentence(),
        'rating' => $faker -> numberBetween(0, 5),
    ];
});
