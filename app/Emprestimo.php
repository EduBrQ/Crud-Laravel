<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $table = 'emprestimos';

    protected $fillable = ['observacao', 'data_emprestimo', 'data_entrega', 'id_amigo'];

    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }

    public function amigo()
    {
        return $this->belongsTo(User::class, "id_amigo");
    }
}
