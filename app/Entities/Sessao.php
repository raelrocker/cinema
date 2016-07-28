<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    protected $table = 'sessoes';

    public function filme()
    {
        return $this->belongsTo('App\Entities\Filme');
    }

    public function sala()
    {
        return $this->belongsTo('App\Entities\Sala');
    }
}
