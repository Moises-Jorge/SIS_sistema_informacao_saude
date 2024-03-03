<?php

namespace App\Http\Controllers;

use App\Models\Diagnostico;
use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receitas = $this->get_receita();
        return view('site.admin.medical-prescription',compact('receitas',));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Receita $receita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receita $receita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receita $receita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receita $receita)
    {
        //
    }

    public function get_receita(){
        if (Auth::user()->tipo_utilizador == 1) {
            return  Diagnostico::join("receitas","diagnosticos.id","=","receitas.diagnostico_id")
            ->join("pessoal__clinicos","pessoal__clinicos.id","=","diagnosticos.pessoal__clinico_id")
            ->join("users as upc","upc.id","=","pessoal__clinicos.user_id")
            ->join("reg__clinico__utentes","diagnosticos.reg__clinico__utente_id","=","reg__clinico__utentes.id")
            ->join("users as u","u.id","=","reg__clinico__utentes.user_id")
            // ->where("u.id","=",Auth::user()->id )
            ->select("receitas.*","u.nome as nome_pa", "upc.nome as nome_pc")->get();  
        } 
        elseif (Auth::user()->tipo_utilizador == 2) {
            $Pessoal_clinco = new PessoalClinicoController();
            $id_pessoal_clinico=$Pessoal_clinco->return_my_id(Auth::user()->id);
           return  Diagnostico::join("receitas","diagnosticos.id","=","receitas.diagnostico_id")->join("pessoal__clinicos","pessoal__clinicos.id","=","diagnosticos.pessoal__clinico_id")->join("reg__clinico__utentes","diagnosticos.reg__clinico__utente_id","=","reg__clinico__utentes.id")
            ->join("users","users.id","=","reg__clinico__utentes.user_id")->where("pessoal__clinicos.id","=",$id_pessoal_clinico )
            ->select("receitas.*","users.nome as nome_user")->get();
        } 
        else {
           return  Diagnostico::join("receitas","diagnosticos.id","=","receitas.diagnostico_id")
            ->join("pessoal__clinicos","pessoal__clinicos.id","=","diagnosticos.pessoal__clinico_id")
            ->join("users as upc","upc.id","=","pessoal__clinicos.user_id")
            ->join("reg__clinico__utentes","diagnosticos.reg__clinico__utente_id","=","reg__clinico__utentes.id")
            ->join("users as u","u.id","=","reg__clinico__utentes.user_id")
            ->where("u.id","=",Auth::user()->id )
            ->select("receitas.*","u.nome as nome_pa", "upc.nome as nome_pc")->get();
        }
    }
}
