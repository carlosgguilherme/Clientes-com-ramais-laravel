<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDids;
use App\Models\clientes;
use App\Models\dids;
use Illuminate\Http\Request;

class DidsController extends Controller
{
    public function show()
    {
        $dids = dids::get();
        return view('admin.dids.show', compact('dids'));
    }
    public function create(){
        $clientes = clientes::get();
        $dids = dids::get();
  
        return view('admin.dids.create', compact('dids','clientes'));
      }
      public function destroy($id){
    
        if(!$dids = dids::find($id))
          return redirect()->route('clientes.show');
    
        $dids->delete();    
    
        return redirect()
          ->route('dids.show') 
          ->with('messageDelete', 'Dids foi deletado com sucesso');
        
    }
    public function edit($id)
    {   
        if(!$dids = dids::find($id)){
          return redirect()->back();
        }
        return view('admin.dids.edit', compact('dids'));
    }
    public function store(StoreUpdateDids $request){
      $data = $request->all();
      Dids::create($data);
      return redirect()
        ->route('dids.show')
        ->with('message', 'Dids criado com sucesso');
    }
}
