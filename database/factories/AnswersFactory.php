<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answers;
use App\Questions;
use App\User;
use Faker\Generator as Faker;

$factory->define(Answers::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraphs(rand(3, 5), true),
        'user_id' => User::pluck('id')->random(),
        'questions_id' => Questions::pluck('id')->random(),
    ];
});
