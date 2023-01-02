<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::any('/clientes/search', [ClienteController::class, 'search'])->name('clientes.search');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');


Route::get('/', function () {
    return view('welcome');
});

