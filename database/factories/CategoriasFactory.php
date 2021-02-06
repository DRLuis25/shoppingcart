<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categorias;
use Faker\Generator as Faker;

$factory->define(Categorias::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
