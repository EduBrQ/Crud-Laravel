<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table = 'titulos';

    protected $fillable = ['nome','editora','valor', 'data_lancamento', 'autor', 'id_colecao', 'id_user'];

    public function colecao()
    {
        return $this->belongsTo(ColecaoRevistas::class, "id_colecao");
    }
}
