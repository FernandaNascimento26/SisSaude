<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnamnesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamneses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tratamento_medico',100);
            $table->string('gravidez',100);
            $table->string('hipertensao',100);
            $table->string('diabete',100);
            $table->string('doenca_grave',100);
            $table->string('anestesia_local',100);
            $table->string('problema_cardiaco',100);
            $table->string('uso_medicamento',100);
            $table->string('alergia',100);
            $table->string('febre_reumática',100);
            $table->string('queixa_principal',100);
            $table->string('hemorragia',100);
            $table->unsignedInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anamneses');
    }
}
