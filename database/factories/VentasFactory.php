<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ventas;
use Faker\Generator as Faker;

$factory->define(Ventas::class, function (Faker $faker) {

    return [
        'cliente_id' => $faker->word,
        'ccname' => $faker->word,
        'ccnumber' => $faker->word,
        'cc' => $faker->word,
        'direccion' => $faker->word,
        'subtotal' => $faker->randomDigitNotNull,
        'envio' => $faker->randomDigitNotNull,
        'otros' => $faker->randomDigitNotNull,
        'total' => $faker->randomDigitNotNull,
        'estado' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
