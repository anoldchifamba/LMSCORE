<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->text,
        'sub_title' => $faker->text,
        'description' => $faker->text,
        'about_instructor' => $faker->text,
        'playlist_url' => $faker->word,
        'tags' => $faker->word,
        'photo' => $faker->text,
        'promo_video_url' => $faker->text,
        'creator_status' => $faker->randomDigitNotNull,
        'admin_status' => $faker->randomDigitNotNull,
        'what_will_students_learn' => $faker->text,
        'target_students' => $faker->text,
        'requirements' => $faker->text,
        'discount_price' => $faker->randomDigitNotNull,
        'actual_price' => $faker->randomDigitNotNull,
        'view_count' => $faker->randomDigitNotNull,
        'subscriber_count' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
