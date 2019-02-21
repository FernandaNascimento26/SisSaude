<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcompanhamentoPsicologico;

class AcompanhamentoPsicologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acompanhamentopsicologico = AcompanhamentoPsicologico::all();
        return view("acompanhamentopsicologico.listar",['acompanhamentos'=>$acompanhamentopsicologico]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("acompanhamentopsicologico.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $acompanhamento = new AcompanhamentoPsicologico();
         $acompanhamento->data = $request->input("data");
         $acompanhamento->procedimento = $request->input("procedimento");
         $acompanhamento->observacoes = $request->input("observacoes");
         $acompanhamento->proxima_sessao = $request->input("proxima_sessao");

         $acompanhamento->save();
        return redirect()->route('acompanhamentopsicologico.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acompanhamento = AcompanhamentoPsicologico::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acompanhamento = AcompanhamentoPsicologico::find($id);
        return view('acompanhamentopsicologico.editar', ['ap'=> $acompanhamento]);
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
         $acompanhamento = AcompanhamentoPsicologico::find($id);
         $acompanhamento->data = $request->input("data");
         $acompanhamento->procedimento = $request->input("procedimento");
         $acompanhamento->observacoes = $request->input("observacoes");
         $acompanhamento->proxima_sessao = $request->input("proxima_sessao");

         $acompanhamento->save();
        return redirect()->route('acompanhamentopsicologico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $acompanhamento = AcompanhamentoPsicologico::find($id); // consulta no BD
        $acompanhamento->delete();  // Exclui do BD

        return redirect()->route('acompanhamentopsicologico.index');
    }
}
