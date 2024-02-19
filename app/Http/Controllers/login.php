<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    //
    public function login(){
        return view("site.login");
    }

    public function logar(Request $request){
        $ObjectUser = new UserController();
        $User = $ObjectUser->getMe($request->input("numeroUser"),$request->input("password"));
        if($User){
            Auth::login($User);
            return redirect("menu/index");
        }else{
            return redirect()->back()->with('error', 'palavra passe ou numero do utilizador errado!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }

}
