<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {

    return [
    	'titulo' => $faker->sentence(2),
        'description' => $faker->sentence(6),
        'tipo' => $faker->sentence(2),
        'existencia' => 33,
        'precio' => 50,
        'img' => $faker->sentence(10),
        'type_id' => 1,

    ];
});