<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    //
    public function index(){
        return view("site.admin.index");
    }
}
