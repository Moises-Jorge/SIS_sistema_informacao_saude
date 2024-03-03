<?php

namespace App\Http\Controllers;

use App\Models\Pessoal_Admin;
use App\Models\User;
use Illuminate\Http\Request;

class PessoalAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_pessoal_adm = Pessoal_Admin::all();
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
        $userController = new UserController();
        $idUser = $userController->store($request);
        Pessoal_Admin::create([
            'cargo' => $request->input("cargo"),
            'user_id' => $idUser,
        ]);
    }
    
    function return_my_id($id)
    {
        $query = User::join("pessoal__admins", "users.id", "=", "pessoal__admins.user_id")
            ->select("pessoal__admins.id")->where("users.id", $id)->first();
        return $query->id;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa_adm = Pessoal_Admin::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoa_adm = Pessoal_Admin::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pessoa_adm = Pessoal_Admin::find($id);
        $pessoa_adm->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa_adm = Pessoal_Admin::find($id);
        $pessoa_adm->delete();
    }
}
