<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DetalleVentas;
use Faker\Generator as Faker;

$factory->define(DetalleVentas::class, function (Faker $faker) {

    return [
        'venta_id' => $faker->word,
        'product_id' => $faker->word,
        'precio' => $faker->randomDigitNotNull,
        'cantidad' => $faker->randomDigitNotNull,
        'subtotal' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
