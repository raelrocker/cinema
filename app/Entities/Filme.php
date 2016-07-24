<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['titulo_pt', 'titulo_original', 'diretor', 'sinopse', 'duracao', 'genero', 'ano', 'copias',
                           'copias_disponiveis'];
}
