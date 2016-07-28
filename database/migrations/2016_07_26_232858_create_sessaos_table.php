<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('filme_id')->unsigned();
            $table->integer('sala_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('horario');
            $table->boolean('ativo');
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
        Schema::drop('sessoes');
    }
}
