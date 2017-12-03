<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $table = 'emprestimos';

    protected $fillable = ['observacao', 'data_emprestimo', 'data_entrega', 'id_amigo', 'id_user', 'id_titulo'];

    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    public function amigo()
    {
        return $this->belongsTo(Amigo::class, "id_amigo");
    }

    public function titulo()
    {
        return $this->belongsTo(Titulo::class, "id_titulo");
    }

}
