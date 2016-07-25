<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nome', 'capacidade'];
}
