<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('paciente',"PacienteController");

Route::resource('acompanhamentopsicologico',"AcompanhamentoPsicologicoController");

Route::resource('agendamento',"AgendamentoController");

Route::resource('anamnese',"AnamneseController");

Route::resource('dente',"DenteController");

Route::resource('exameclinico',"ExameClinicoController");

Route::resource('funcionario',"FuncionarioController");

Route::resource('notificacao','NotificacaoController');

Route::resource('prontuariopsicologico',"ProntuarioPsicologicoController");

Route::resource('odontograma',"OdontogramaController");








