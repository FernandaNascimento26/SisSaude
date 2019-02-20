<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
    protected $fillable = [

       'id',
       'paciente_id',
       'cod_dente'

    ];
}
