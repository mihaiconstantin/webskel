<?php

use Faker\Generator as Faker;
use App\Models\Member;


$factory->define(Member::class, function (Faker $faker) {
    return [
        'context' => 'home.index',

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'gender' => $faker->randomElement(Member::$genders),

        'description' => $faker->sentence(50),
        'link' => env('APP_URL'),
        'image' => 'img/avatar.png',

        'role' => $faker->randomElement(Member::$roles),

        'show' => $faker->numberBetween(0, 1),
        'order' => $faker->numberBetween(0, 10)
    ];
});
