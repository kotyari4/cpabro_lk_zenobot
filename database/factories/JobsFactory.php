<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Bot\Jobs::class, function (Faker $faker) {
    return [

        'code_id' => rand(100000, 999999),
        'status' => '0',
        'updated_at' => null,
        'created_at' => null,
        'deleted_at' => null,

    ];
});
