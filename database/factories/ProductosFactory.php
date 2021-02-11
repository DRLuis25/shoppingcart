<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categorias;
use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'foto' => $faker->word,
        'stock' => $faker->numberBetween(10, 50),
        'precio' => $faker->numberBetween(10, 100),
        'categoria_id' => function() {
            return factory(Categorias::class)->create()->id;
        },
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => null,
        'deleted_at' => null
    ];
});
