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
        $todos_rcu = Reg_Clinico_Utente::all();
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
        $todos_diagnosticos = Diagnostico::join("reg__clinico__utentes",'reg__clinico__utentes.id',"=","diagnosticos.reg__clinico__utente_id")
        ->join("users","users.id","=","reg__clinico__utentes.user_id")
        ->join("pessoal__clinicos","pessoal__clinicos.id","=","diagnosticos.pessoal__clinico_id")
        ->join("alergias","alergias.id","=","diagnosticos.alergia_id")
        ->select("users.id as idUser",
                "users.nome as nomeUser",
                "diagnosticos.tipo_doenca",
                "diagnosticos.nome",
                "diagnosticos.data",
                "diagnosticos.descricao",
                "reg__clinico__utentes.grupo_sang",
                "reg__clinico__utentes.status",)
        ->where("pessoal__clinicos.id","=",1)
        ->get();


        $todas_alergias=Alergia::all();

        $todos_agendamentos = Agendamento::join("users", "agendamentos.user_id", "=", "users.id")
        ->join("pessoal__clinicos", "pessoal__clinicos.id", "=", "agendamentos.pessoal__clinico_id")
        ->select("users.id as idUser",
            'users.nome as nomeUser',
            'users.telefone',
            'agendamentos.*'
        )
        ->where("pessoal__clinico_id", "=", 1)
        ->orderBy('agendamentos.data', 'asc') // Ordena pela data em ordem crescente
        ->orderBy('agendamentos.hora', 'asc') // Em seguida, ordena pela hora em ordem crescente
        ->get();
        
        $controller=$this;
        
        
        return view('site.admin.diagnostic-list', compact('todos_diagnosticos','todas_alergias','todos_agendamentos','controller'));

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
