<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProntuarioPsicologico extends Model
{
    protected $fillable = [

      'id',
      'encaminhamento',
      'situacao_escolar',
      'atividade_profissional',
      'motivo_consulta',
      'paciente_id'

    ];
}
