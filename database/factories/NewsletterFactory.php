<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Newsletter;
use Faker\Generator as Faker;

$factory->define(Newsletter::class, function (Faker $faker) {
    return [
        'email' => $faker->email
    ];
});
