<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'is_active' => $faker->boolean,
        'role_id' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
        'email' => $faker->email,
        'password' => $faker->password,
        'image' => $faker->image($dir = null, $width = 500, $height = 500, $category = null, $fullPath = true),
        'info' => $faker->text($maxNbChars = 200),
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->regexify($regex = '(0|\+98)?([ ]|,|-|[()]){0,2}9[1|2|3|4]([ ]|,|-|[()]){0,2}(?:[0-9]([ ]|,|-|[()]){0,2}){8}'),
    ];
});
