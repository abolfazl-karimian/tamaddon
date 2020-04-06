<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
        'FullName' => $faker->name,
        'Email'    => $faker->safeEmail,
        'Message'  => $faker->paragraph(8),
//        'Message'  => $faker->realText(100)
    ];
});
