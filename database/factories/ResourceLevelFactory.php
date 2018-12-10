<?php

use Faker\Generator as Faker;

$factory->define(App\ResourceLevel::class, function (Faker $faker) {
    return [
        'label' => $faker->text(40),
        'position' => $faker->numberBetween(1,20)

    ];
});
