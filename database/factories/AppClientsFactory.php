<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AppClients;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AppClients::class, function (Faker $faker) {

    $radius = [9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35];

    return [
        //'app_settings_id' => rand(1,10),
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'email' => $faker->unique()->email,
        'phone' => $faker->unique()->phoneNumber,
        'wheel_radius' => $radius[rand(1,20)],
        'auto_vin' => Str::random(16)
    ];

});
