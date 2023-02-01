<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRamais;
use App\Http\Requests\UpdateRamais;
use App\Models\clientes;
use App\Models\ramais;
use Illuminate\Support\Facades\DB;

class RamaisController extends Controller
{
    
    public function show(){
        $clientes = DB::table('ramais')
                ->join('clientes', 'ramais.cliente_id', '=', 'clientes.id')
                ->select('ramais.*', 'clientes.nome')
                ->get();
            return view('admin.ramais.show', compact('clientes'));
        }
    public function create(){

        $clientes = clientes::get();
        
        return view('admin.ramais.create', compact('clientes'));
    }
    public function destroy($id){
        if(!$ramais = ramais::find($id))
        return redirect()->route('ramais.show');

        $ramais->delete();

        return redirect()
            ->route('ramais.show')
            ->with('messageDelete', 'O Ramal foi deletado com sucesso');
    }
    public function edit($id){
        $clientes = clientes::get();
        if(!$ramais = ramais::find($id)){
            return redirect()->back();
        }
        return view('admin.ramais.edit', compact('ramais', 'clientes'));

    }
    public function store(StoreRamais $request){
        ramais::create($request->all());
        return redirect()
            ->route('ramais.show')
            ->with('message', 'Ramal criado com sucesso');
    }
    public function update(UpdateRamais $request, $id){
        if(!$ramais = ramais::find($id)){
            return redirect()->back();
        }
        $ramais->update($request->all());
        return redirect()
            ->route('ramais.show')
            ->with('message','Ramal editado com sucesso');
    }
}
