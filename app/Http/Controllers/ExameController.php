<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Models\Exame;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos_exames = Exame::join('especialidades','especialidades.id','=','exames.especialidade_id')
        ->select('exames.*','especialidades.nome as nomeEspecialidade')->get();//all();

        $especialidades = Especialidade::all();
        return view('site.admin.exames-list', compact('todos_exames','especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Exame::create($request->all());
        $todos_exames = Exame::join('especialidades','especialidades.id','=','exames.especialidade_id')
        ->select('exames.*','especialidades.nome as nomeEspecialidade')->get();//all();
        $especialidades = Especialidade::all();

        return view('site.admin.exames-list', compact('todos_exames', 'especialidades'))->with('success', 'Cadastro realizado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exame = Exame::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exame = Exame::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exame = Exame::find($id);
        $exame->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exame = Exame::find($id);
        $exame->delete();
    }
}
