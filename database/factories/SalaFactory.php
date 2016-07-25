<?php
$factory->define(App\Entities\Sala::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'capacidade' => $faker->numberBetween(30, 100)
    ];
});