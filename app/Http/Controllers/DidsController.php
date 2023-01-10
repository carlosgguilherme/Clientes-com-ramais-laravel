<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDids;
use App\Models\clientes;
use App\Models\dids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DidsController extends Controller
{
  public function show()
  {
    $clientes = DB::table('dids')
      ->join('clientes', 'dids.cliente_id', '=', 'clientes.id')
      ->select('dids.*', 'clientes.nome')
      ->get();
    return view('admin.dids.show', compact('clientes'));
  }
  public function create()
  {

    $clientes = clientes::get();
    $dids = dids::get();

    return view('admin.dids.create', compact('dids', 'clientes'));
  }
  public function destroy($id)
  {

    if (!$dids = dids::find($id))
      return redirect()->route('clientes.show');

    $dids->delete();

    return redirect()
      ->route('dids.show')
      ->with('messageDelete', 'Dids foi deletado com sucesso');
  }
  public function edit($id)
  {
    $clientes = clientes::get();
    if (!$dids = dids::find($id)) {
      return redirect()->back();
    }
    return view('admin.dids.edit', compact('dids', 'clientes'));
  }
  public function store(StoreUpdateDids $request)
  {

    dids::create($request->all());
    return redirect()
      ->route('dids.show')
      ->with('message', 'Dids criado com sucesso');
  }
  public function update(StoreUpdateDids $request, $id)
  {
    if (!$dids = dids::find($id)) {
      return redirect()->back();
    }
    $dids->update($request->all());
    return redirect()
      ->route('dids.show')
      ->with('message', 'O Dids foi editado com sucesso');
  }
}
