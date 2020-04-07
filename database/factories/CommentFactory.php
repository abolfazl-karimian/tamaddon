<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'first_name'  => $faker->firstName,
        'last_name'   => $faker->lastName,
        'body'       => $faker->paragraph(5),
        'authorized' => 0,

/*        'FirstName'   => 'محمدرضا',
        'LastName'    => 'بهمنی',
        'Body'        => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد',
        'Authorized'  => 1,

*/
        ];
});
