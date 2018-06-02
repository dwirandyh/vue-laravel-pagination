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

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'student_name' => $faker->name,
        'student_address' => $faker->address,
        'student_phone' => substr($faker->phoneNumber, 0, 20), // secret
        'student_date_of_birth' => $faker->date(),
    ];
});
