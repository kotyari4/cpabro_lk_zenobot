<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AppSettings;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AppSettings::class, function (Faker $faker) {
    return [
        //'user_id' => id юзера, // Можно не указывать, т.к. ID берется автоматически типа как из insertGetId
        'logo' => str::random(10),
        'company_name' => str::random(10),
        'url_site' => $faker->unique()->url,
        'code' => Str::random(7),
        'where_to_send' => rand(1,2),
        'order_email' => 'rsa-team@yandex.ru',
        'order_phone' => $faker->unique()->phoneNumber,
        'order_url' => 'http://shino.developing.su/api/order'
    ];
});
