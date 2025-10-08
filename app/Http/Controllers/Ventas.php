<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ventas extends Controller
{
    //
    public function index(){
        $titulo="administracion de ventas";
        return view('modules.ventas.index',compact('titulo'));
    }
}
