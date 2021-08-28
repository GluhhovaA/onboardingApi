<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Task::class, function (Faker $faker) {
    $status = [1, 0];
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(200),
        'article_title' => $faker->sentence,
        'article_content' => $faker->text(200),
        'file' => 'storage/file.txt',
        'link' => 'link_on_zoom_meeting',
        'status' => $status[array_rand($status, 1)],
    ];
});
