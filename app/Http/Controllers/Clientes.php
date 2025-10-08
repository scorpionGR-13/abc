<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Clientes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titulo="administracion de clientes";
        $client=Cliente::all();
        return view('modules.clientes.index',compact('client','titulo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $titulo="Crear Cliente";
        return view('modules.clientes.create',compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $item = new Cliente();
        $item->user_id = Auth::user()->id;
        $item->apellido = $request->apellido;
        $item->nombre = $request->nombre;
        $item->email = $request->email;
        $item->save();
        return to_route('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $titulo = "Eliminar Cliente";
        $item = Cliente::find($id);
        return view('modules.clientes.show', compact('item', 'titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $titulo = "Editar Categoria";
        $item = Cliente::find($id);
        return view('modules.clientes.edit', compact('item', 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $item = Cliente::find($id);
        $item->nombre = $request->nombre;
        $item->apellido = $request->apellido;
        $item->email = $request->email;
        $item->save();
        return to_route('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Cliente::find($id);
        $item->delete();
        return to_route('cliente');
    }
}