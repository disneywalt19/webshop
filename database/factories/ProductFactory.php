<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
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

$factory->define(Products::class, function (Faker $faker) {
    return [
        'category_id' => App\Category::inRandomOrder()->first()->id,
        'name' => $faker->sentence(3),
        'price' => $faker->numberBetween(999, 9999),
        'description' => $faker->paragraph(),
        'amount' => $faker->numberBetween(5, 100)
    ];
});
