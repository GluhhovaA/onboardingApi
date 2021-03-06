<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $position = ['Back-end developer', 'Front-end developer', 'Product design', 'Brand Communications'];

    return [
        'user_identifier' => $faker->numberBetween(10000, 90000),
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'position' => $position[array_rand($position, 1)],
        'description' => '',
        'photo' => '',
    ];
});
