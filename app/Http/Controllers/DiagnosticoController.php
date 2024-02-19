<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Alergia;
use App\Models\Diagnostico;
use App\Models\Reg_Clinico_Utente;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
                "reg__clinico__utentes.status",
                'alergias.nome as nomeAlergia')
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
        $agendamentoId = $request->input("agendamentoId");
        $Registo_clinico = new RegClinicoUtenteController();

        $data= date('y-m-d');
        Diagnostico::create($request->all());
        $UltimoDiagnostico= Diagnostico::latest()->first();
        $UltimoDiagnostico->data=$data;
        $UltimoDiagnostico->update();
        $agendamento= Agendamento::find($agendamentoId);
        $agendamento->estado=1;
        $agendamento->update();

        return redirect("diagnostico/index");
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

    public function temRCU($id){
        $dados= Reg_Clinico_Utente::where("user_id",$id)->first();
        if($dados){
            $struct =$id.",".$dados->id;
            return $struct;
        }else{
            return 0;
        }

    }
}
