<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\User;
use Illuminate\Http\Request;

class Menu extends Controller
{
    //
    public function index(){
        $class= $this;
        return view("site.admin.index",compact(("class")));
    }

    public function n_doctores(){
        return User::where("tipo_utilizador","2")->get()->count();
    }

    public function n_pacientes(){
        return User::where("tipo_utilizador","3")->count();
    }

    public function n_agendamento(){
        return Agendamento::count();
    }

}
