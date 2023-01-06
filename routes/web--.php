<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
=======
Route::get('/ramais', [RamaisController::class, 'index'])->name('ramais.index');
Route::get('/ramais/create', [RamaisController::class, 'create'])->name('ramais.create');
Route::get('/ramais/edit/{id}', [RamaisController::class, 'edit'])->name('ramais.edit');
Route::put('/ramais/update/{id}', [RamaisController::class, 'update'])->name('ramais.update');
Route::get('/ramais/show', [RamaisController::class, 'show'])->name('ramais.show');
Route::delete('/ramais/{id}', [RamaisController::class, 'destroy'])->name('ramais.destroy');
Route::post('/ramais', [RamaisController::class, 'store'])->name('ramais.store');

    
Route::get('/dids', [DidsController::class, 'index'])->name('dids.index');
Route::get('/dids/create', [DidsController::class, 'create'])->name('dids.create');
Route::get('/dids/edit/{id}', [DidsController::class, 'edit'])->name('dids.edit');
Route::put('/dids/update/{id}', [DidsController::class, 'update'])->name('dids.update');
Route::get('/dids/show', [DidsController::class, 'show'])->name('dids.show');
Route::delete('/dids/{id}', [DidsController::class, 'destroy'])->name('dids.destroy');
Route::post('/dids', [DidsController::class, 'store'])->name('dids.store');


Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::any('/clientes/search', [ClientesController::class, 'search'])->name('clientes.search');
Route::get('/clientes/edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/clientes/show', [ClientesController::class, 'show'])->name('clientes.show');
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require 'routes/auth.php';


>>>>>>> 73563cc (Web e dids)

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
