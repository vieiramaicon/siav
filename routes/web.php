<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
Route::get('/ascensao', function() {
    return view('ascensao.index');
})->name('ascensao.index');

//Formulário de dados gerais (etapa 1)
Route::get('/ascensao/create-dados-gerais', function() {
    return view('ascensao.create-dados-gerais');
})->name('ascensao.create.dados.gerais');

Route::post('/ascensao/create-dados-gerais', function() {
    return to_route('ascensao.create.dados.residenciais');
})->name('ascensao.create.dados.gerais');

// Formulário de dados residencias (etapa 2)
Route::get('/ascensao/create-dados-residencias', function() {
    return view('ascensao.create-dados-residencias');
})->name('ascensao.create.dados.residenciais');

Route::post('/ascensao/create-dados-residencias', function() {
    return to_route('ascensao.create.dados.funcionais');
})->name('ascensao.create.dados.residenciais');

//Formulário de dados funcionais (etapa 3)
Route::get('/ascensao/create-dados-funcionais', function() {
    return view('ascensao.create-dados-funcionais');
})->name('ascensao.create.dados.funcionais');

Route::post('/ascensao/create-dados-funcionais', function() {
    return 'Finalizou';
})->name('ascensao.create.dados.funcionais');

//Formulário de curos (etapa 4)


require __DIR__.'/auth.php';
