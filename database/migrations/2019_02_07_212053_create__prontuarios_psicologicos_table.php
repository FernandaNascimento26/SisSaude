<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProntuariosPsicologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_prontuarios_psicologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('encaminhamento',100);
            $table->string('situacao_escolar',100);
            $table->string('atividade_profissional',100);
            $table->string('motivo_consulta',100);
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
        Schema::dropIfExists('_prontuarios_psicologicos');
    }
}
