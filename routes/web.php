<?php

use App\Http\Controllers\AscensaoController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn () => redirect('dashboard'));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Solicitar ascensão
//Index
Route::get('/ascensao', [AscensaoController::class, 'index'])->name('ascensao.index');

//Formulário (etapa 1)
Route::get('/ascensao/criar-primeiro-passo', [AscensaoController::class, 'criarPrimeiroPasso'])->name('ascensao.criar.primeiro.passo');

Route::post('/ascensao/criar-primeiro-passo', [AscensaoController::class, 'criarPrimeiroPassoPost'])->name('ascensao.criar.primeiro.passo.post');

// Formulário (etapa 2)
Route::get('/ascensao/criar-segundo-passo', [AscensaoController::class, 'criarSegundoPasso'])->name('ascensao.criar.segundo.passo');

Route::post('/ascensao/criar-segundo-passo', [AscensaoController::class, 'criarSegundoPassoPost'])->name('ascensao.criar.segundo.passo.post');

//Formulário (etapa 3)
Route::get('/ascensao/criar-terceiro-passo', [AscensaoController::class, 'criarTerceiroPasso'])->name('ascensao.criar.terceiro.passo');

Route::post('/ascensao/criar-terceiro-passo', [AscensaoController::class, 'criarTerceiroPassoPost'])->name('ascensao.criar.terceiro.passo.post');


require __DIR__.'/auth.php';
