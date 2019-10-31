<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
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

$factory->define(Article::class, function (Faker $faker) {
    return [
        'titre' => $faker->text(20),
        'description' => $faker->text(400),
        'slug' => $faker->slug,
        'category_id' => $faker->numberBetween(1,10),
        'img' => $faker->imageUrl(555,280),
        'is_active' => true,
        'debut' => $faker->date(),
        'fin' => $faker->date(),
        'user_id' => $faker->numberBetween(1, 50),
        'diocese_id' => $faker->numberBetween(3,5)
    ];
});
