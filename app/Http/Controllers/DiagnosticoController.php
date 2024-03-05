<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Alergia;
use App\Models\Diagnostico;
use App\Models\Receita;
use App\Models\Reg_Clinico_Utente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_pessoa_clinico=0;
        if(Auth::user()->tipo_utilizador==2){
            $pessoal_clinico_object = new PessoalClinicoController();
            $id_pessoa_clinico= $pessoal_clinico_object->return_my_id(Auth::user()->id);
        }
       

        $todos_diagnosticos = $this->returnDiagnostic($id_pessoa_clinico);
        


        $todas_alergias = Alergia::all();

        $todos_agendamentos = Agendamento::join("users", "agendamentos.user_id", "=", "users.id")
        ->join("pessoal__clinicos", "pessoal__clinicos.id", "=", "agendamentos.pessoal__clinico_id")
        ->select("users.id as idUser",
            'users.nome as nomeUser',
            'users.telefone',
            'agendamentos.*'
        )
        ->where("pessoal__clinico_id", "=", $id_pessoa_clinico)
        ->orderBy('agendamentos.data', 'asc') // Ordena pela data em ordem crescente
        ->orderBy('agendamentos.hora', 'asc') // Em seguida, ordena pela hora em ordem crescente
        ->get();
        
        $controller=$this;

        
        return view('site.admin.diagnostic-list', compact('todos_diagnosticos','todas_alergias','todos_agendamentos','controller','id_pessoa_clinico'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    private function returnDiagnostic($id_pessoa_clinico){
        if($id_pessoa_clinico==0){
          return  Diagnostico::join("reg__clinico__utentes",'reg__clinico__utentes.id',"=","diagnosticos.reg__clinico__utente_id")
        ->join("users","users.id","=","reg__clinico__utentes.user_id")
        ->join("pessoal__clinicos","pessoal__clinicos.id","=","diagnosticos.pessoal__clinico_id")
        ->leftjoin("alergias","alergias.id","=","diagnosticos.alergia_id")
        ->select("users.id as idUser",
                "users.nome as nomeUser",
                "diagnosticos.tipo_doenca",
                "diagnosticos.nome",
                "diagnosticos.data",
                "diagnosticos.descricao",
                'diagnosticos.estado',
                "reg__clinico__utentes.grupo_sang",
                "reg__clinico__utentes.status",
                'alergias.nome as nomeAlergia')
                ->get();
        }else{
            return Diagnostico::join("reg__clinico__utentes",'reg__clinico__utentes.id',"=","diagnosticos.reg__clinico__utente_id")
        ->join("users","users.id","=","reg__clinico__utentes.user_id")
        ->join("pessoal__clinicos","pessoal__clinicos.id","=","diagnosticos.pessoal__clinico_id")
        ->leftjoin("alergias","alergias.id","=","diagnosticos.alergia_id")
        ->select("users.id as idUser",
                "users.nome as nomeUser",
                "diagnosticos.tipo_doenca",
                "diagnosticos.nome",
                "diagnosticos.data",
                "diagnosticos.descricao",
                'diagnosticos.estado',
                "reg__clinico__utentes.grupo_sang",
                "reg__clinico__utentes.status",
                'alergias.nome as nomeAlergia')
        ->where("pessoal__clinicos.id","=",$id_pessoa_clinico)
        ->get();
        }
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
        $agendamento->descricao=$request->input("descricao");
        $agendamento->estado=1;
        $agendamento->update();
        $id_diagnostico = $UltimoDiagnostico->id;
        Receita::create(
            [
                'diagnostico_id'=> $id_diagnostico,
                'prescricao'=>$request->input("prescricao")
            ]
            );

        //return redirect("diagnostico/index");
        return redirect()->route('diagnostico.index')->with('success', 'Cadastro realizado com sucesso! Faça login para continuar.');        ;
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

    public function prescricao(){
        return view('site.admin.medical-prescription');
    }
}
