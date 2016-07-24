<?php
$factory->define(App\Entities\Filme::class, function (Faker\Generator $faker) {
    return [
        'titulo_pt' => $faker->name,
        'titulo_original' => $faker->name,
        'diretor' => $faker->name,
        'sinopse' => $faker->text(50),
        'duracao' => $faker->numberBetween(90, 220),
        'genero' => $faker->name,
        'ano' => $faker->numberBetween(1950, 2016),
        'copias' => $faker->numberBetween(1, 5),
        'copias_disponiveis' => $faker->numberBetween(1, 5)
    ];
});