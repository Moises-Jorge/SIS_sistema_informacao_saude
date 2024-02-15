<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use App\Models\Diagnostico;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos_diagnosticos = Diagnostico::all();
        $todas_alergias=Alergia::all();
        
        return view('site.admin.diagnostic-list', compact('todos_diagnosticos','todas_alergias'));
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
        $Registo_clinico = new RegClinicoUtenteController();

        Diagnostico::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $diagnostico = Diagnostico::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $diagnostico = Diagnostico::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $diagnostico = Diagnostico::find($id);
        $diagnostico->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diagnostico = Diagnostico::find($id);
        $diagnostico->delete();
    }
}
