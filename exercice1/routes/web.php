<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route pour le formulaire
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'store'])->name('form.store');
Route::get('/form/show', [FormController::class, 'show'])->name('form.show');
Route::get('/form/create', [FormController::class, 'create']);
Route::get('/form/edit', [FormController::class, 'edit'])->name('form.edit');
Route::get('/form/update', [FormController::class, 'update'])->name('form.update');
Route::get('/form/destroy', [FormController::class, 'destroy'])->name('form.destroy');

// Route pour le résultat
Route::get('/resultat', [FormController::class, 'resultat'])->name('resultat');