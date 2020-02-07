<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Datostabla;
use Faker\Generator as Faker;

$factory->define(Datostabla::class, function (Faker $faker) {
    return [
        'created_at'=>$faker->unique()->dateTimeBetween('-1years','now'),
           'Nombre' => $faker->sentence($nbWords = 5, $variableNbWords = true),
           'Costo' => $faker->randomFloat(2,10,35),
           'reporte_gasto_id' => $faker->numberBetween(1,5),
    ];
});
