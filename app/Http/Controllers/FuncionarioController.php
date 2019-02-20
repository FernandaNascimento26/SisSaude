<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $funcionarios = Funcionario::all();

        return view("funcionario.listar",['funcionarios'=>$funcionarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("funcionario.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        //$funcionario->id = $request->input('id');
        $funcionario->siape = $request->input('siape');
        $funcionario->nome = $request->input('nome');
        $funcionario->email = $request->input('email');
        $funcionario->telefone = $request->input('telefone');
        $funcionario->tipo = $request->input('tipo');
        $funcionario->senha = $request->input('senha');

        $funcionario->save();
        return redirect()->route('funcionario.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = Funcionario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario.editar', ['f' => $funcionario]);
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
       //echo "$id";
        $funcionario = Funcionario::find($id); // consulta dos dados que estão no BD 
       $funcionario->siape = $request->input('siape');
        $funcionario->nome = $request->input('nome');
        $funcionario->email = $request->input('email');
        $funcionario->telefone = $request->input('telefone');
        $funcionario->tipo = $request->input('tipo');
        $funcionario->senha = $request->input('senha');

        $funcionario->save();

        return redirect()->route('funcionario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::find($id); // consulta no BD
        $funcionario->delete();  // Exclui do BD

        return redirect()->route('funcionario.index');
    }
}
