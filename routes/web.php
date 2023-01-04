<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;


Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::any('/clientes/search', [ClientesController::class, 'search'])->name('clientes.search');
Route::get('/clientes/edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/clientes/show', [ClientesController::class, 'show'])->name('clientes.show');
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');



Route::get('/', function () {
    return view('welcome');
});

