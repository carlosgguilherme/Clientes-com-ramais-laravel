<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCliente;
use App\Http\Requests\UpdateClientes;
use App\Models\clientes;
use Illuminate\Http\Request;


class ClientesController extends Controller
{
    public function index()
    {  
        return view('admin.clientes.index');
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
          ->with('messageDelete', 'Cliente foi deletado');
        
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
    $clientes = clientes::find($id);
        if(!$clientes){  
          return redirect()->back()
                            ->with('message', 'Não fopi possível editar');
      }
      $clientes->update($request->all());

      // $clientes->validate([
      //   'email' => 'required|email|unique:clientes,email,'.$id, ]);
      return redirect()
      ->route('clientes.show') 
      ->with('message', 'O Cliente foi editado com sucesso');
    
      }
      public function search(Request $request){
        $filters = $request->except('_token');
        $clientes = clientes::where('nome','LIKE', "%{$request->search}%")
                      ->orWhere('telefone','LIKE', "%{$request->search}%")
                        ->paginate();
        return view('admin.clientes.show', compact('clientes', 'filters'));
      }
}
