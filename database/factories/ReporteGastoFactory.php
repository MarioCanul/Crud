<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ReporteGasto;
use Faker\Generator as Faker;

$factory->define(ReporteGasto::class, function (Faker $faker) {
    return [
           'created_at'=>$faker->unique()->dateTimeBetween('-1years','now'),
           'Descripcion' => $faker->sentence($nbWords = 5, $variableNbWords = true),
    ];
});
