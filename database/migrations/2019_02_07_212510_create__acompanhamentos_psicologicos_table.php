<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcompanhamentosPsicologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_acompanhamentos_psicologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('procedimento',300);
            $table->string('observacoes',300);
            $table->string('proxima_sessao',200);
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
        Schema::dropIfExists('_acompanhamentos_psicologicos');
    }
}
