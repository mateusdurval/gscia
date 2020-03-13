<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'sobrenome',
        'nascimento',
        'cpf',
        'rg'
    ];

    protected $table = 'users';
}
