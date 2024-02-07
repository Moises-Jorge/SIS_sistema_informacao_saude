<?php

namespace App\Http\Controllers;

use App\Models\Reg_Clinico_Utente;
use Illuminate\Http\Request;

class RegClinicoUtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos_rcu = Reg_Clinico_Utente::all();
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
        Reg_Clinico_Utente::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rcu = Reg_Clinico_Utente::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rcu = Reg_Clinico_Utente::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rcu = Reg_Clinico_Utente::find($id);
        $rcu->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rcu = Reg_Clinico_Utente::find($id);
        $rcu->delete();
    }
}
