<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AppServices;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(AppServices::class, function (Faker $faker) {

    $icons = ['','icon_r14','icon_r15','icon_r16','icon_r17','icon_r18','icon_r19','icon_r20','icon_r21','icon_r22','icon_r23','icon_r24','icon_r25','icon_r26'];
    $amount = rand(1000,5000);

    return [
        //'app_settings_id'      => rand(1,10),
        'type'             => 1,
        'service_name'     => $faker->lastName,
        'icon'             => $icons[rand(1,13)],
        'service_amount'   => $amount,
        'service_discount' => (rand(1,2) == 1) ? ($amount - ($amount / 100 * 20)) : null,
    ];

});
