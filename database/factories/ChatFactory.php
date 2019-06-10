<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Chat;
use Faker\Generator as Faker;

$factory->define(Chat::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max=30),
        'friend_id' => $faker->numberBetween($min = 1, $max=30),
        'chat' => $faker->text($maxNbChars = 150)

    ];
});
