<?php

use App\Http\Controllers\AscensaoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use App\Models\Curso;
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
Route::get('/ascensoes', [AscensaoController::class, 'index'])->name('ascensoes.index');

//Formulário (etapa 1)
Route::get('/ascensoes/criar-primeiro-passo', [AscensaoController::class, 'criarPrimeiroPasso'])->name('ascensoes.criar.primeiro.passo');

Route::post('/ascensoes/criar-primeiro-passo', [AscensaoController::class, 'criarPrimeiroPassoPost'])->name('ascensoes.criar.primeiro.passo.post');

// Formulário (etapa 2)
Route::get('/ascensoes/criar-segundo-passo', [AscensaoController::class, 'criarSegundoPasso'])->name('ascensoes.criar.segundo.passo');

Route::post('/ascensoes/criar-segundo-passo', [AscensaoController::class, 'criarSegundoPassoPost'])->name('ascensoes.criar.segundo.passo.post');

//Formulário (etapa 3)
Route::get('/ascensoes/criar-terceiro-passo', [AscensaoController::class, 'criarTerceiroPasso'])->name('ascensoes.criar.terceiro.passo');

Route::post('/ascensoes/criar-terceiro-passo', [AscensaoController::class, 'criarTerceiroPassoPost'])->name('ascensoes.criar.terceiro.passo.post');

//Cadastrar curso
Route::get('/ascensoes/cursos/criar', [CursoController::class, 'create'])->name('ascensoes.cursos.criar');

Route::post('/ascensoes/cursos', [CursoController::class, 'store'])->name('ascensoes.cursos.criar.post');

//Baixar curso
Route::post('/ascensoes/cursos/downloading', function(Request $request) {
    $curso = Curso::find($request->curso_id);

    return response($curso->arquivo)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment;filename=' . $curso->nome .'.pdf');

})->name('ascensoes.cursos.downloading.post');


require __DIR__.'/auth.php';
