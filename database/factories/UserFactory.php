<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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
        'company_name' => $this->faker->company,
        'company_address' => $this->faker->address,
        'name' => $this->faker->name,
        'email' => $this->faker->unique()->safeEmail,
        'password' => Hash::make('123'), // password
        'country' =>'America',
        'Region' => $this->faker->state,
        'role' => 'customer',
    ];
});
