<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DidsController;
use App\Http\Controllers\RamaisController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ClientesController::class, 'index'])->name('index');

Route::get('/ramais', [RamaisController::class, 'index'])->name('ramais.index');
Route::get('/ramais/create', [RamaisController::class, 'create'])->name('ramais.create');
Route::get('/ramais/edit/{id}', [RamaisController::class, 'edit'])->name('ramais.edit');
Route::put('/ramais/update/{id}', [RamaisController::class, 'update'])->name('ramais.update');
Route::get('/ramais/show', [RamaisController::class, 'show'])->name('ramais.show');
Route::delete('/ramais/{id}', [RamaisController::class, 'destroy'])->name('ramais.destroy');
Route::post('/ramais/store', [RamaisController::class, 'store'])->name('ramais.store');

    
Route::get('/dids', [DidsController::class, 'index'])->name('dids.index');
Route::get('/dids/create', [DidsController::class, 'create'])->name('dids.create');
Route::get('/dids/edit/{id}', [DidsController::class, 'edit'])->name('dids.edit');
Route::put('/dids/update/{id}', [DidsController::class, 'update'])->name('dids.update');
Route::get('/dids/show', [DidsController::class, 'show'])->name('dids.show');
Route::delete('/dids/{id}', [DidsController::class, 'destroy'])->name('dids.destroy');
Route::post('/dids', [DidsController::class, 'store'])->name('dids.store');


Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::get('/clientes/edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/clientes/show', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/clientes/relations', [ClientesController::class, 'relations'])->name('relations.show');
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::any('/clientes/search', [ClientesController::class, 'search'])->name('clientes.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

require 'routes/auth.php';


