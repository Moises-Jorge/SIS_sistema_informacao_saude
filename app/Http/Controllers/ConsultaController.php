<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Especialidade;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todas_consultas = Consulta::join('especialidades','especialidades.id','=','consultas.especialidade_id')
        ->select('consultas.*','especialidades.nome as nomeEspecialidade')->get();//all();

        $especialidades = Especialidade::all();
        return view('site.admin.reviews', compact('todas_consultas', 'especialidades'));
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
        Consulta::create($request->all());

        $todas_consultas = Consulta::join('especialidades','especialidades.id','=','consultas.especialidade_id')
        ->select('consultas.*','especialidades.nome as nomeEspecialidade')->get();//all();
        $especialidades = Especialidade::all();

        //return view('site.admin.reviews', compact('todas_consultas', 'especialidades'))->with('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('consulta.index', compact('todas_consultas', 'especialidades'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $consulta = Consulta::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consulta = Consulta::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $consulta = Consulta::find($id);
        $consulta->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $consulta = Consulta::find($id);
        $consulta->delete();
        return $this->index();
    }
}
