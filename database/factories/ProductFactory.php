<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'category_id' => \App\Models\Category::all('id')->random(),
        'title' => $faker->jobTitle,
        'description' => $faker->realText(),
        'price' => rand(100, 1000),
    ];
});
