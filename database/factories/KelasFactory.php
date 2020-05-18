<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kelas;
use App\User;
use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

$factory->define(Kelas::class, function (Faker $faker) {
    return [
        'uuid'  => Uuid::uuid4(),
        'nama_kelas' => $faker->company,
        'mapel' => $faker->jobTitle,
        'ruang' => $faker->creditCardExpirationDate,
        'kode_kelas' => Str::random(7),
        'user_id' => User::pluck('id')->random(),
    ];
});
