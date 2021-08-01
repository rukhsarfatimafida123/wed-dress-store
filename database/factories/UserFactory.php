<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Categories;
use App\Models\Brands;
use App\Models\Products;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('123456'), // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});

$factory->define(Brands::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});

$factory->define(Products::class, function (Faker $faker) {
    $brand_id = rand(1,6);
    $cat_id = rand(1,5);
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'price' => $faker->randomDigit,
        'image' => 'http://via.placeholder.com/400x500',
        'brand_id' => $brand_id,
        'cat_id' => $cat_id,
    ];
});
