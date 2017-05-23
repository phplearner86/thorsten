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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'thorsten',
        'email' => 'thorsten@gmail.com',
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Car::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->unique()->word,
        'category_id' => function(){
            return factory(App\Category::class)->create()->id;
        },
        'model' => $faker->numerify(' ### SL'),
        'color' => $faker->word,
        'displacement' => $faker->randomNumber($nbDigits = 4, $strict = false),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->word
    ];
});


