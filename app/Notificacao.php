<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    protected $fillable = [

       'id',
       'id_funcionario',
       'id_agenda'
    ];
}
