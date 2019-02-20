<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcompanhamentoPsicologico extends Model
{
    protected $fillable = [

      'id',
      'data',
      'procedimento',
      'observacoes',
      'proxima_sessao',
      'paciente_id'

    ];
}
