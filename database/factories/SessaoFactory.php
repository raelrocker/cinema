<?php
$factory->define(App\Entities\Sessao::class, function (Faker\Generator $faker) {
    return [
        'filme_id' => rand(1,10),
        'sala_id' => rand(1, 5),
        'data_inicio' => $faker->date(),
        'data_fim' => $faker->date(),
        'horario' => $faker->time(),
        'ativo' => $faker->boolean()
    ];
});