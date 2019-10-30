<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Diocese;
use App\Ville;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Diocese::class, function (Faker $faker) {
    return [
        'nom' => $faker->company,
        'ville_id' => $faker->numberBetween(1,20)
    ];
});
