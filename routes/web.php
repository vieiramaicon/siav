<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Ascensao;
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
Route::get('/ascensao', function() {
    return view('ascensao.index');
})->name('ascensao.index');

//Formulário (etapa 1)
Route::get('/ascensao/criar-primeiro-passo', function(Request $request) {
    $id = DB::table('ascensoes')->insert([]);

    $ascensao = new Ascensao();
    $ascensao->save();

    session(['id' => $ascensao->id]);

    return view('ascensao.criar-primeiro-passo');
})->name('ascensao.criar.primeiro.passo');

Route::post('/ascensao/criar-primeiro-passo', function(Request $request) {
    $id = session('id');
    //dd($id);
    return to_route('ascensao.criar.segundo.passo');
})->name('ascensao.criar.primeiro.passo.post');

// Formulário (etapa 2)
Route::get('/ascensao/criar-segundo-passo', function(Request $request) {
    return view('ascensao.criar-segundo-passo');
})->name('ascensao.criar.segundo.passo');

Route::post('/ascensao/criar-segundo-passo', function(Request $request) {
    return to_route('ascensao.criar.terceiro.passo');
})->name('ascensao.criar.segundo.passo.post');

//Formulário (etapa 3)
Route::get('/ascensao/criar-terceiro-passo', function(Request $request) {
    return view('ascensao.criar-terceiro-passo');
})->name('ascensao.criar.terceiro.passo');

Route::post('/ascensao/criar-terceiro-passo', function(Request $request) {
    $id = session('id');
    dd($id);
    return 'Finalizou';
})->name('ascensao.criar.terceiro.passo.post');


require __DIR__.'/auth.php';
