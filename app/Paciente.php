<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [

         'id',
         'matricula',
         'nome',
         'curso',
         'email',
         'telefone',
         'sexo',
         'tipo',
         'senha',
         'id_prontuario',
         'id_anamnese'
    ];
}
