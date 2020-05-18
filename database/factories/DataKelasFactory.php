<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DataKelas;
use App\User;
use App\Kelas;
use Faker\Generator as Faker;

$factory->define(DataKelas::class, function (Faker $faker) {
    return [
        // $faker->unique()->randomDigit;
        'user_id' => User::pluck('id')->random(),
        'kelas_id' => Kelas::pluck('id')->random(),
        'status' => '0',
    ];
});
