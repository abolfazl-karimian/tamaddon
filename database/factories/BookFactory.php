<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
//        'name'      => $faker->streetName,  /* عیار تمدنی جمهوری اسلامی ایران */
//        'author'    => $faker->name,        /* محمدرضا بهمنی خدنگ */
//        'publisher' => $faker->name,        /*  پژوهشگاه علوم و فرهنگ اسلامی  */
//        'year'   => $faker->randomNumber(4), //1398
//        'pages'   => $faker->randomNumber(3), //500
//        'edition'   => $faker->randomNumber(1), //1
//        'isbn'      => $faker->numberBetween(1000000000000000,4000000000000000),  /* عیار تمدنی جمهوری اسلامی ایران */
//        'price'     => $faker->numberBetween(100000,4000000), /* عیار تمدنی جمهوری اسلامی ایران */
        'name'      => 'عیار تمدنی جمهوری اسلامی ایران',
        'author'    => 'محمدرضا بهمنی خدنگ',
        'publisher' => 'پژوهشگاه علوم و فرهنگ اسلامی',
        'year'      => 1398,
        'pages'     => 760,
        'edition'   => 1,
        'isbn'      => '978-600-195-569-3',
        'price'     => 150000
    ];
});
