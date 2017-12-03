<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amigo extends Model
{
    protected $table = 'amigos';

    protected $fillable = ['nome', 'apelido', 'telefone', 'rua', 'bairro', 'cidade', 'estado', 'id_user'];
}
