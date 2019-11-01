<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paroisse;
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

$factory->define(Paroisse::class, function (Faker $faker) {
    return [
        'nom' => 'paroisse '.$faker->city,
        'telephone' => '00-00-00-00',
        'fixe' => '22-00-00-00',
        'email' => $faker->companyEmail,
        'diocese_id' => $faker->numberBetween(3,20)
    ];
});
