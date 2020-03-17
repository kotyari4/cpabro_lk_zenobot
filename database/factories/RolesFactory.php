<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Users\Roles::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'updated_at' => null,
        'created_at' => null,
        'deleted_at' => null,
    ];
});
