<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->text(150),
        'thumbnail' => $faker->imageURL(),
        'price' => $faker->numberBetween(10000,20000),
        'size' => $faker->randomFloat(1,15,40),
        'address' => $faker->sentence(3),
        'owner_id' => App\Owner::find(rand(1,40)),
        'ward_id' => App\Ward::find(rand(1,24)),
        'category_id' => App\Category::find(rand(1,4))
    ];
});
