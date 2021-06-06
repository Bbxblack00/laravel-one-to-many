<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> name,
        'lastname' => $faker -> lastname,
        'ral' => rand(1000, 2000),
    ];
});
