<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Admin::class, function (Faker $faker) {
    return [
//        'first_name'    => $faker->firstName, /* محمدرضا */
//        'last_name'     => $faker->lastName, /* بهمنی */
//        'email'        => $faker->safeEmail, //bahmani@gmail.com
//        'phone_number'  => $faker->numberBetween(9010000000,9999999999), //025-37832834
////        'phone_number'  => $faker->e164PhoneNumber,
//        'Password'     => $faker-> password,

        'first_name'    => 'محمدرضا',
        'last_name'     => 'بهمنی',
        'email'        => 'bahmani@gmail.com',
        'phone_number'  => '025-37832834',
//        'PhoneNumber'  => $faker->e164PhoneNumber,
        'password'     => \Hash::make('admin@123')
    ];
});
