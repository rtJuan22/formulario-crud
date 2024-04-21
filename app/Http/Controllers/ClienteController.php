<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Dato;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('clientes.create',['datos'=>Dato::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'usuario'=>'required|max:255',
            'primernombre'=>'required|max:255',
            'segundonombre'=>'required|max:255',
            'primerapellido'=>'required|max:255',
            'segundoapellido'=>'required|max:255',
            'fecha_nacimiento'=>'required|date',
            'genero'=>'required',
            'tipoDocumento'=>'required',
            'telefono'=>'required',
            'email'=>'nullable|email',
          
        ]);
          
        $clientes = new Cliente();
        $clientes->usuario = $request->input('usuario');
        $clientes->primernombre = $request->input('primernombre');
        $clientes->segundonombre = $request->input('segundonombre');
        $clientes->primerapellido = $request->input('primerapellido');
        $clientes->segundoapellido = $request->input('segundoapellido');
        $clientes->fecha_nacimiento = $request->input('fecha_nacimiento');
        $clientes->genero = $request->input('genero');
        $clientes->tipoDocumento = $request->input('tipoDocumento');
        $clientes->telefono = $request->input('telefono');
        $clientes->email = $request->input('email');
        $clientes->save();

       return view('clientes.message',['msg' =>"Registro guardado"]);
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
