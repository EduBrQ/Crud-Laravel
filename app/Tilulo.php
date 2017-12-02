<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tilulo extends Model
{
    protected $table = 'titulos';

    protected $fillable = ['nome','editora','valor', 'data_lancamento', 'autor', 'id_colecao'];

    public function colecao()
    {
        return $this->belongsTo(ColecaoRevistas::class, "id_colecao");
    }
}
