<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name'=>$this->faker->word,
        'price'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100) ,
        'quantity' => $this->faker->numberBetween($min = 1, $max = 999),
        'image'=>'https://source.unsplash.com/random',
        'category'=>$this->faker->numberBetween($min = 1, $max = 10),
    ];
});
