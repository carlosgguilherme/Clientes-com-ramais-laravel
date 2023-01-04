<?php

namespace App\Http\Controllers;

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
        $dids = dids::get();
  
        return view('admin.dids.create', compact('dids'));
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
}
