<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = clientes::get();
        
        return view('admin.clientes.index',compact('clientes'));
    }
    public function edit($id)
    {
        if(!$clientes = clientes::find($id)){
          return redirect()->back();
        }
        return view('admin.clientes.edit', compact('clientes'));
    }
    public function show()
    {
        $clientes = clientes::get();
        return view('admin.clientes.show', compact('clientes'));
}
}
