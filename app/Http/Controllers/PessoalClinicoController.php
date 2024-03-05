<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Models\Pessoal_Clinico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PessoalClinicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_pessoal_clinico = Pessoal_Clinico::join('users','users.id','=','pessoal__clinicos.user_id')
        ->join('especialidades','especialidades.id','=','pessoal__clinicos.especialidade_id')
        ->select('users.id',
        'users.nome as nomeUser',
        'especialidades.nome as nomeEspecialidade',
        'pessoal__clinicos.num_ordem',
        'users.telefone',
        'users.tipo_utilizador as tipo')
        ->get();
        
        $especialidades = Especialidade::all();
        return view('site.admin.doctor-list',compact('todo_pessoal_clinico','especialidades'));
    }

    public function return_my_id($id){
        $query = User::join("pessoal__clinicos","users.id","=","pessoal__clinicos.user_id")
                            ->select("pessoal__clinicos.id")->where("users.id",$id)->first();
        return $query->id;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
        $todo_pessoal_clinico = Pessoal_Clinico::join('users','users.id','=','pessoal__clinicos.user_id')
        ->join('especialidades','especialidades.id','=','pessoal__clinicos.especialidade_id')
        ->select('users.id',
        'users.nome as nomeUser',
        'especialidades.nome as nomeEspecialidade',
        'pessoal__clinicos.num_ordem',
        'users.telefone',
        'users.tipo_utilizador as tipo')
        ->get();
        $especialidades = Especialidade::all();
        return redirect()->route('clinico.index', compact('todo_pessoal_clinico', 'especialidades'))->with('success', 'Cadastro realizado com sucesso! Faça login para continuar.');

        
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
        Hash::make($request->input("password"));
        $User= User::find($id);
        $User->update($request->all());
        $id_pessoal_clinico = $this->return_my_id($id);
        $pessoal_clinico = Pessoal_Clinico::find($id_pessoal_clinico);
        $pessoal_clinico->update($request->all());
        return view("site.admin.profile"); //$this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $my_id = $this->return_my_id(($id));
        $pessoa_clinica = Pessoal_Clinico::find($my_id);
        $pessoa_clinica->delete();
        $user= User::find($id);
        $user->delete();
        return $this->index();
    }
}
