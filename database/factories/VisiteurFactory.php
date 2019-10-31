<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visiteur;
use Faker\Generator as Faker;

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

$factory->define(Visiteur::class, function (Faker $faker) {
    return [
        'ip' => bcrypt($faker->ipv4),
        'article_id' => $faker->numberBetween(1,20)
    ];
});
