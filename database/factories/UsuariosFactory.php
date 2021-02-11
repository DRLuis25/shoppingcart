<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'last_name' => $faker->word,
        'email' => $faker->word,
        'direccion' => $faker->word,
        'direccion2' => $faker->word,
        'ciudad' => $faker->word,
        'estado' => $faker->word,
        'pais' => $faker->word,
        'zip' => $faker->word,
        'telefono' => $faker->word,
        'password' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
