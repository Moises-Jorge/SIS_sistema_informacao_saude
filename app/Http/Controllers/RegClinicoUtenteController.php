<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Alergia;
use App\Models\Diagnostico;
use App\Models\Reg_Clinico_Utente;
use Illuminate\Http\Request;

class RegClinicoUtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos_rcu = Reg_Clinico_Utente::join('users','users.id','=','reg__clinico__utentes.user_id')
                                       ->select('reg__clinico__utentes.*','users.nome as nomeUser')->get();
        return view('site.admin.rcu', compact('todos_rcu'));
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
        
        //return redirect("diagnostico/index");
        return redirect()->route('diagnostico.index')->with('success', 'Cadastro realizado com sucesso! Faça login para continuar.');
        ;

       // return view('site.admin.diagnostic-list', compact('todos_diagnosticos','todas_alergias','todos_agendamentos','controller'));

        //return Reg_Clinico_Utente::latest()->first()->id;
        
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
