<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Productos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titulo="administracion de productos";
        $produc=Producto::all();
        return view('modules.productos.index',compact('produc','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titulo="Crear Productos";
        return view('modules.productos.create',compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $item = new Producto();
        $item->user_id = Auth::user()->id;
        $item->categoria_id  = Auth::user()->id;
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->cantidad = $request->cantidad;
        $item->precio = $request->precio;
        $item->save();
        return to_route('producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
