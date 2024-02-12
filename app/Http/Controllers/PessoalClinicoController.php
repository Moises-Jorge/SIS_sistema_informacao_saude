<?php

namespace App\Http\Controllers;

use App\Models\Pessoal_Clinico;
use Illuminate\Http\Request;

class PessoalClinicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_pessoal_clinico = Pessoal_Clinico::all();
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
        $UserController = new UserController();
        $idUser = $UserController->store($request);
        Pessoal_Clinico::create([
            'num_ordem'=>$request->input("num_ordem"),
            'user_id'=>$idUser,
            'especialidade_id'=>$request->input("especialidade_id")
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa_clinica = Pessoal_Clinico::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoa_clinica = Pessoal_Clinico::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pessoa_clinica = Pessoal_Clinico::find($id);
        $pessoa_clinica->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa_clinica = Pessoal_Clinico::find($id);
        $pessoa_clinica->delete();
    }
}
