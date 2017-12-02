<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColecaoRevistas extends Model
{
    protected $table = 'colecoes';

    protected $fillable = ['id_user','n_edicao','nome','editora'];

    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    public function titulos()
    {
        return $this->hasMany(Tilulo::class, "id_colecao");
    }
}
