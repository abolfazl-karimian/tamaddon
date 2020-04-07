<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email'    => $faker->safeEmail,
        'body'  => $faker->paragraph(8),
//        'body'  => $faker->realText(100)
    ];
});
