<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todas_especialidades = Especialidade::all();
        return view('site.admin.specialities', compact('todas_especialidades'));
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
        Especialidade::create($request->all());

        $todas_especialidades = Especialidade::all();
        //return view('site.admin.specialities', compact('todas_especialidades'))->with('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('especialidade.index', compact('todas_especialidades'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $especialidade = Especialidade::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $especialidade = Especialidade::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $especialidade = Especialidade::find($id);
        $especialidade->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $especialidade = Especialidade::find($id);
        $especialidade->delete();
        return $this->index();
    }
}
