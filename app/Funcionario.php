<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [

      'id',
      'siape',
      'nome',
      'telefone',
      'tipo',
      'senha'

    ];
}
