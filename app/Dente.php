<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dente extends Model
{
    protected $fillable = [

      'id',
      'nome',
      'situacao'

    ];
}
