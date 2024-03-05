<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pessoal_Clinico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    //
    public function login()
    {
        Auth::logout();
        return view("site.login");
    }

    public function logar(Request $request)
    {
        $class = $this;
        $ObjectUser = new UserController();
        $User = $ObjectUser->getMe($request->input("numeroUser"), $request->input("password"));
        if ($User) {
            Auth::login($User);
            return view("site/admin/index", compact("class"));
            // return redirect("menu/index");
        } else {
            return redirect()->back()->with('error', 'palavra passe ou numero do utilizador errado!');
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect("/");
            // Redirecione ou faça qualquer outra ação necessária após o logout.
        }
    }

    public function n_doctores()
    {
        return User::where("tipo_utilizador", "2")->get()->count();
    }

    public function n_pacientes()
    {
        return User::where("tipo_utilizador", "3")->count();
    }

    public function n_agendamento()
    {
        return Agendamento::count();
    }

    public function recover_password()
    {
        return view('site.forgot-password');
    }
}
