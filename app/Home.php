<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['
        nome,
        nascimento,
        rg,
        cpf,
        cep,
        logradouro,
        numero,
        complemento
    '];

    protected $table = 'user';
}
