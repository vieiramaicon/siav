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

Route::get('/ascensao', function() {
    return view('ascensao.index');
});

Route::get('/ascensao/create-dados-gerais', function() {
    return 'Formulário 1';
});

Route::post('/ascensao/create-dados-gerais', function() {
    return 'Formulário 1';
});

Route::get('/ascensao/create-dados-funcionais', function() {
    return 'Formulário 2';
});

Route::post('/ascensao/create-dados-funcionais', function() {
    return 'Formulário 2';
});


require __DIR__.'/auth.php';
