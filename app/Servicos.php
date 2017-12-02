<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    protected $table = 'servicos';

    protected $fillable = ['nome','referencia','valor'];


}
