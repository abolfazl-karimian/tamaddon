<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Admin::class, function (Faker $faker) {
    return [
//        'FirstName'    => $faker->firstName, /* محمدرضا */
//        'LastName'     => $faker->lastName, /* بهمنی */
//        'Email'        => $faker->safeEmail, //bahmani@gmail.com
//        'PhoneNumber'  => $faker->numberBetween(9010000000,9999999999), //025-37832834
////        'PhoneNumber'  => $faker->e164PhoneNumber,
//        'Password'     => $faker-> password,

        'FirstName'    => 'محمدرضا',
        'LastName'     => 'بهمنی',
        'Email'        => 'bahmani@gmail.com',
        'PhoneNumber'  => '025-37832834',
//        'PhoneNumber'  => $faker->e164PhoneNumber,
        'Password'     => \Hash::make('admin@123')
    ];
});
