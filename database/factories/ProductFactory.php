<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->word.' '.$faker->word;
    return [
        'sku' => str_slug($name,'_'),
        'name' => $name,
        'description' => $faker->text,
        'slug' => str_slug($name,'_'),
        'storage' => rand(1,500),
        'price' => rand(1,100),
        'special_price' => null,
        'special_price_from' => null,
        'special_price_to' => null,
        'visible' => 1,
    ];
});
