<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Questions;
use App\User;
use App\Kelas;
use Ramsey\Uuid\Uuid;
use Faker\Generator as Faker;

$factory->define(Questions::class, function (Faker $faker) {
    return [
        'uuid'  => Uuid::uuid4(),
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),
        'body' => $faker->paragraphs(rand(3, 5), true),
        'user_id' => User::pluck('id')->random(),
        'kelas_id' => Kelas::pluck('id')->random(),
    ];
});
