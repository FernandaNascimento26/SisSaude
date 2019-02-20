<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    protected $fillable = [
      
      'id',
      'tratamento_medico',
      'gravidez',
      'hipertensao',
      'diabete',
      'doenca_grave',
      'anestesia_local',
      'problema_cardiaco',
      'uso_medicamento',
      'alergia',
      'febre_reumatica',
      'queixa_principal',
      'hemorragia',
      'paciente_id'

    ];
}
