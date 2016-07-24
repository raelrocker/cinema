<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_pt');
            $table->string('titulo_original');
            $table->string('diretor');
            $table->text('sinopse');
            $table->integer('duracao');
            $table->string('genero');
            $table->integer('ano');
            $table->integer('copias');
            $table->integer('copias_disponiveis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filmes');
    }
}
