<?php

use Illuminate\Database\Seeder;

class FilmesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\Filme::class, 10)->create();
    }
}
