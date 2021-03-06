<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    $title = $faker->sentence(2);
    return [
        'user_id' => rand(1,30),
        'category_id' => rand(1,20), //significa que tengo que crear 20 categorias
        'country_id' => rand(1,10),
        'type_id' => rand(1,4),
        'tag_id' => rand(1,10),
        'description' => $faker->text(50),
        'image' => $faker->imageUrl(250,250),
        'link' => $faker->imageUrl(150,150),
        'name' => $title,
    ];
});
