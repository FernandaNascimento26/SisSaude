<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExameClinico extends Model
{
    protected $fillable = [

        'id',
        'tipo_procedimento',
        'observacoes',
        'paciente_id'

    ];
}
