<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Corona;
use Faker\Generator as Faker;

$factory->define(Corona::class, function (Faker $faker) {
    return [
        'country_name' => $this->faker->name(),
        'symptoms' => $this->faker->numerify('######'),
        'cases' => $this->faker->numerify('######'),
    ];
});
