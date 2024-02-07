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
        //
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

        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoal_Clinico $pessoal_Clinico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoal_Clinico $pessoal_Clinico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoal_Clinico $pessoal_Clinico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoal_Clinico $pessoal_Clinico)
    {
        //
    }
}
