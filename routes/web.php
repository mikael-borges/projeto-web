<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('pokemon', [PokemonController::class, 'listar']);
Route::get('pokemon/criar', [PokemonController::class, 'criar']);
Route::post('pokemon', [PokemonController::class, 'salvar']);
Route::get('pokemon/{id}/editar', [PokemonController::class, 'editar']);
Route::put('pokemon/{id}', [PokemonController::class, 'atualizar']);
Route::delete('pokemon/{id}', [PokemonController::class, 'deletar']);