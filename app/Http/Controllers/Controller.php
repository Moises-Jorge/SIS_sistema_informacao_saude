<?php

namespace App\Http\Controllers;

use App\Models\Pessoal_Clinico;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(){
        $todo_pessoal_clinico = Pessoal_Clinico::join('users','users.id','=','pessoal__clinicos.user_id')
        ->join('especialidades','especialidades.id','=','pessoal__clinicos.especialidade_id')
        ->select('users.id',
        'users.nome as nomeUser',
        'especialidades.nome as nomeEspecialidade',
        'pessoal__clinicos.num_ordem',
        'users.telefone',
        'users.tipo_utilizador as tipo')
        ->get();
        
        return view("site.index")->with("todo_pessoal_clinico",$todo_pessoal_clinico );
    }
}
