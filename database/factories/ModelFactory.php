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


$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' =>  $faker->name,
        'apellido' =>  $faker->lastname,
        'email' => $faker->email,
        'rol_id' => mt_rand(1,3),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\SADocumento::class, function (Faker\Generator $faker) {

    $sourceDir = 'tmp/';
    $targetDir = 'app/';
    return [
        'tipo_documento'  => $faker->randomNumber($nbDigits = 8),
        'nro_documento'  => $faker->randomNumber($nbDigits = 8),
        'detalle' => $faker->text($maxNbChars = 200),
        'tomo' => $faker->randomNumber($nbDigits = NULL),
        'fecha_documento' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'archivo' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'tags' => $faker->text($maxNbChars = 20),
        'tag_id' => rand(1,4),
        'user_id' => rand(1,4),
        'store_id' => mt_rand(1,3),
    ];
});
