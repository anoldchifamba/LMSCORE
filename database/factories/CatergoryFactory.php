<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use AT_academy\Models\Catergory;
use Faker\Generator as Faker;

$factory->define(Catergory::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'view_count' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
