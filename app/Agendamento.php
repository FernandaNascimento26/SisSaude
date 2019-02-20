<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [

         'id',
         'data',
         'hora',
         'status',
         'paciente_id'

    ];
}
