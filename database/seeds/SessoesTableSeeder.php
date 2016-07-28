<?php

use Illuminate\Database\Seeder;

class SessoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\Sessao::class, 10)->create();
    }
}
