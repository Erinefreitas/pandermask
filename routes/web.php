<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('clientes.index');
})->middleware(['auth'])->name('dashboard');

Route::resource('clientes',\App\Http\Controllers\ClienteController::class)->middleware(['auth']);
Route::resource('categorias',\App\Http\Controllers\CategoriaController::class)->middleware(['auth']);
Route::resource('produtos',\App\Http\Controllers\ProdutoController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
