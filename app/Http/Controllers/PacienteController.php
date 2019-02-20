<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();

        return view("paciente.listar",['pacientes'=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("paciente.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        //$funcionario->id = $request->input('id');
        $paciente->matricula = $request->input('matricula');
        $paciente->nome = $request->input('nome');
        $paciente->email = $request->input('email');
        $paciente->curso = $request->input('curso');
        $paciente->telefone = $request->input('telefone');
        $paciente->sexo = $request->input('sexo');
        $paciente->tipo = $request->input('tipo');
        $paciente->senha = $request->input('senha');

        $paciente->save();
        return redirect()->route('paciente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $paciente = Paciente::find($id);
        return view('paciente.editar', ['p' => $paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        //$paciente->id = $request->input('id');
        $paciente->matricula = $request->input('matricula');
        $paciente->nome = $request->input('nome');
        $paciente->email = $request->input('email');
        $paciente->curso = $request->input('curso');
        $paciente->telefone = $request->input('telefone');
        $paciente->sexo = $request->input('sexo');
        $paciente->tipo = $request->input('tipo');
        $paciente->senha = $request->input('senha');

        $paciente->save();
        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $paciente = Paciente::find($id); // consulta no BD
        $paciente->delete();  // Exclui do BD

        return redirect()->route('paciente.index');
    }
}
