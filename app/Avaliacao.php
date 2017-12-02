<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

    protected $fillable = ['descricao', 'estrelas', 'id_titulo'];

    public function titulos()
    {
        return $this->belongsTo(Tilulo::class, "id_titulo");
    }
}
