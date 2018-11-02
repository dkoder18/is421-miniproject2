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

$factory->define(App\Car::class, function (Faker $faker) {
    $test = array("Ford", "Toyota", "Honda");
    return [
        'make' => $faker->randomElement($array = array('Ford', 'Toyota', 'Honda')),
        'model' => $faker->randomElement($array = array('Highlander', 'Fusion', 'Corolla', 'Camry', 'Accord', 'Civic', 'Taurus', 'Explorer')),
        'year' => $faker->numberBetween($min=1960, $max=2018),
    ];
});
