<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUserRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos_usuarios = User::all();

        return view('site.admin.patient-list', compact('todos_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("site.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hash::make($request->input("password"));
        User::create($request->all());
        $UltimoUser = User::latest()->first();
        $idUser=$UltimoUser->id;
        $numero_utilizador=$this->getNumeroUtilizador($idUser);
        $UltimoUser->numero_utilizador=$numero_utilizador;
        $UltimoUser->update();
        if($request->input("tipo_utilizador")==3){

            return view("site.login")->with('success', 'Cadastro realizado com sucesso! Faça login para continuar.');
        }else{
            return User::latest()->first()->id;
        }
        
    }

    public function getNumeroUtilizador($id){
        $numero=$id;
        for($cont=1;$cont<=6;$cont++){
            $numero.=rand(0,9);
        }
        return $numero;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Hash::make($request->input("password"));
        $usuario = User::find($id);
        $usuario->update($request->all());
        return view("site.admin.profile");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return $this->index();
    }

    public function getMe($numero_utilizador, $password){
        $User= User::where("numero_utilizador",$numero_utilizador)->first();
        if($User && Hash::check($password,$User->password)){
            return $User;
        }else{
            return null;
        }
    }
}
