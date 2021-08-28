<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Interest::class, function (Faker $faker) {
    $interests = ['food', 'photo', 'sport', 'games'];
    return [
        'name' => $interests[array_rand($interests, 1)],
    ];
});
