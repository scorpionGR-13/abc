<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detalle_ventas extends Controller
{
    //
    public function index(){
        $titulo="administracion de detalles";
        return view('modules.detalle_ventas.index',compact('titulo'));
    }
}