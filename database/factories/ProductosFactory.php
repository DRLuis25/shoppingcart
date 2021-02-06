<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'foto' => $faker->word,
        'stock' => $faker->randomDigitNotNull,
        'precio' => $faker->randomDigitNotNull,
        'categoria_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
