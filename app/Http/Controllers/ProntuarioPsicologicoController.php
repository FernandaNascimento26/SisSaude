<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProntuarioPsicologico;

class ProntuarioPsicologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prontuariopsicologico = ProntuarioPsicologico::all();
        return view("prontuariopsicologico.listar",['prontuarios'=>$prontuariopsicologico]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("prontuariopsicologico.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prontuario = new ProntuarioPsicologico();
        $prontuario->encaminhamento = $request->input("encaminhamento");
        $prontuario->situacao_escolar = $request->input("situacao_escolar");
        $prontuario->atividade_profissional = $request->input("atividade_profissional");
        $prontuario->motivo_consulta = $request->input("motivo_consulta");

        $prontuario->save();
        return redirect()->route('prontuariopsicologico.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prontuario = ProntuarioPsicologico::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prontuario = ProntuarioPsicologico::find($id);
        return view('prontuariopsicologico.editar', ['pp'=> $prontuario]);
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
        $prontuario = ProntuarioPsicologico::find($id);
        $prontuario->encaminhamento = $request->input("encaminhamento");
        $prontuario->situacao_escolar = $request->input("situacao_escolar");
        $prontuario->atividade_profissional = $request->input("atividade_profissional");
        $prontuario->motivo_consulta = $request->input("motivo_consulta");

        $prontuario->save();
        return redirect()->route('prontuariopsicologico.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prontuario = ProntuarioPsicologico::find($id); // consulta no BD
        $prontuario->delete();  // Exclui do BD

        return redirect()->route('prontuariopsicologico.index');
    }
}
