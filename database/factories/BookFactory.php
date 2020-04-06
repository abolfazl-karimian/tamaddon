<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
//        'Name'      => $faker->streetName,  /* عیار تمدنی جمهوری اسلامی ایران */
//        'Author'    => $faker->name,        /* محمدرضا بهمنی خدنگ */
//        'Publisher' => $faker->name,        /*  پژوهشگاه علوم و فرهنگ اسلامی  */
//        'Year'   => $faker->randomNumber(4), //1398
//        'Pages'   => $faker->randomNumber(3), //500
//        'Edition'   => $faker->randomNumber(1), //1
//        'ISBN'      => $faker->numberBetween(1000000000000000,4000000000000000),  /* عیار تمدنی جمهوری اسلامی ایران */
//        'Price'     => $faker->numberBetween(100000,4000000), /* عیار تمدنی جمهوری اسلامی ایران */
        'Name'      => 'عیار تمدنی جمهوری اسلامی ایران',
        'Author'    => 'محمدرضا بهمنی خدنگ',
        'Publisher' => 'پژوهشگاه علوم و فرهنگ اسلامی',
        'Year'      => 1398,
        'Pages'     => 500,
        'Edition'   => 1,
        'ISBN'      => 2500110185317,
        'Price'     => 400000
    ];
});
