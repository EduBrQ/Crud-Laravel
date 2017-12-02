<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColecaoRevistas extends Model
{
    protected $fillable = ['n_edicao','nome','editora','data','valor','descricao','nota','review','protagonista'];
}
