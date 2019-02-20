<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula',100);
            $table->string('nome',100);
            $table->string('curso',100);
            $table->string('email',50);
            $table->string('telefone',50);
            $table->string('sexo',50);
            $table->integer('tipo');
            $table->unsignedInteger('id_prontuario');
            $table->unsignedInteger('id_anamnese');
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
        Schema::dropIfExists('pacientes');
    }
}
