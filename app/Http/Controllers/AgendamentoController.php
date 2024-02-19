<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Consulta;
use App\Models\Especialidade;
use App\Models\Exame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos_agendamentos = Agendamento::join("pessoal__clinicos", "pessoal__clinicos.id", "=", "agendamentos.pessoal__clinico_id")
            ->join("users", "pessoal__clinicos.user_id", "=", "users.id")
            ->join("especialidades", "especialidades.id", "=", "pessoal__clinicos.especialidade_id")
            ->select(
                'users.nome as nomePessoalClinico',
                'especialidades.nome as nome_especialidade',
                'agendamentos.*'
            )
            ->where("agendamentos.user_id", "=", 1)
            ->orderBy('agendamentos.data', 'asc')
            ->orderBy('agendamentos.hora', 'asc')
            ->get();


        $todas_consultas = Consulta::join('especialidades', 'especialidades.id', '=', 'consultas.especialidade_id')
            ->select('consultas.*', 'especialidades.nome as nomeEspecialidade')->get(); //all();

        $todos_exames = Exame::join('especialidades', 'especialidades.id', '=', 'exames.especialidade_id')
            ->select('exames.*', 'especialidades.nome as nomeEspecialidade')->get(); //all();



        return view('site.admin.appointment-list', compact('todos_agendamentos', 'todas_consultas', 'todos_exames'));
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
        if ($request->has("exame_id")) {
            $especialidade_id = Exame::find($request->input("exame_id"))->especialidade_id;
        } else if ($request->has("consulta_id")) {
            $especialidade_id = Consulta::find($request->input("consulta_id"))->especialidade_id;
        }



        $resultado = DB::table('pessoal__clinicos as pc')
            ->leftJoin('agendamentos as a', 'a.pessoal__clinico_id', '=', 'pc.id')
            ->select('pc.id', 'pc.especialidade_id', DB::raw('COUNT(a.id) AS total_agendamentos'))
            ->groupBy('pc.id', 'pc.especialidade_id')
            ->having('pc.especialidade_id', '=', 1)
            ->orderBy('total_agendamentos', 'ASC')
            ->first();

       

        if ($request->has("exame_id")) {
            Agendamento::create([
                'data' => date('Y-m-d'), // Insere a data atual no formato 'Ano-Mês-Dia'
                'hora' => date('H:i:s'), // Insere a hora atual no formato 'Hora:Minuto:Segundo'
                'estado' => 0,
                'user_id' => 1,
                'pessoal__clinico_id' => $resultado->id,
                'exame_id' => $request->input("exame_id")
            ]);
        } else {
            Agendamento::create([
                'data' => date('Y-m-d'), // Insere a data atual no formato 'Ano-Mês-Dia'
                'hora' => date('H:i:s'), // Insere a hora atual no formato 'Hora:Minuto:Segundo'
                'estado' => 0,
                'user_id' => 1,
                'pessoal__clinico_id' => $resultado->id,
                'consulta_id' => $request->input("consulta_id")
            ]);
        }

        $todos_agendamentos = Agendamento::join("pessoal__clinicos", "pessoal__clinicos.id", "=", "agendamentos.pessoal__clinico_id")
            ->join("users", "pessoal__clinicos.user_id", "=", "users.id")
            ->join("especialidades", "especialidades.id", "=", "pessoal__clinicos.especialidade_id")
            ->select(
                'users.nome as nomePessoalClinico',
                'especialidades.nome as nome_especialidade',
                'agendamentos.*'
            )
            ->where("agendamentos.user_id", "=", 1)
            ->orderBy('agendamentos.data', 'asc')
            ->orderBy('agendamentos.hora', 'asc')
            ->get();


        $todas_consultas = Consulta::join('especialidades', 'especialidades.id', '=', 'consultas.especialidade_id')
            ->select('consultas.*', 'especialidades.nome as nomeEspecialidade')->get(); //all();

        $todos_exames = Exame::join('especialidades', 'especialidades.id', '=', 'exames.especialidade_id')
            ->select('exames.*', 'especialidades.nome as nomeEspecialidade')->get(); //all();



        //return view('site.admin.appointment-list', compact('todos_agendamentos', 'todas_consultas', 'todos_exames'))->with('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('agendamento.index', compact('todos_agendamentos', 'todas_consultas', 'todos_exames'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agendamento = Agendamento::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agendamento = Agendamento::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agendamento = Agendamento::find($id);
        $agendamento->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agendamento = Agendamento::find($id);
        $agendamento->delete();
    }
}
