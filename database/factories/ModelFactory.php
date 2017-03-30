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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// some cities
$cities = [
    'Kaunas',
    'Vilnius',
    'Klaipėda',
    'Alytus',
    'Panevėžys'
];

$factory->define(\App\Models\Advertisement::class, function (Faker\Generator $faker) use ($cities) {
    $title =$faker->words(2, true);
    return [
        'user_id' => $faker->randomElement(\App\Models\User::all()->pluck('id')->toArray()),
        'title' => $title,
        'slug' => str_slug($title).'-'.$faker->randomLetter,
        'description' => $faker->paragraphs(2, true),
        'price' => $faker->randomFloat(3, 1, 500),
        'city' => $faker->randomElement($cities),
    ];
});