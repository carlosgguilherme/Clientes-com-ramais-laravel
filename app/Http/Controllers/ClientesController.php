<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCliente;
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
    public function destroy($id){
    
        if(!$clientes = clientes::find($id))
          return redirect()->route('clientes.show');
    
        $clientes->delete();    
    
        return redirect()
          ->route('clientes.show') 
          ->with('message', 'Cliente foi deletado');
        
    }
    public function create(){
      $clientes = clientes::get();

      return view('admin.clientes.create', compact('clientes'));
    }
    public function store(StoreUpdateCliente $request){
    
        $data = $request->all();
    
        clientes::create($data);
        return redirect()
          ->route('clientes.show')
          ->with('message', 'Cliente criado com sucesso');

    }
    public function update(StoreUpdateCliente $request, $id){
        if(!$clientes = clientes::find($id)){
          return redirect()->back();
      }
      $clientes->update($request->all());
      return redirect()
      ->route('clientes.show') 
      ->with('message', 'O Cliente foi editado com sucesso');
    
      }
}
