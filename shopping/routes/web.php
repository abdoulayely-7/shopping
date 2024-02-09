<?php

use Illuminate\Support\Facades\Route;

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


// ---------------------Mon Client-------------------------------
Route::get('/',[\App\Http\Controllers\clientController::class,'index'])->name('index');
Route::get('/acheter',[\App\Http\Controllers\clientController::class,'acheter'])->name('acheter');
Route::get('/panier',[\App\Http\Controllers\clientController::class,'panier'])->name('panier');
Route::get('/paiement',[\App\Http\Controllers\clientController::class,'paiement'])->name('paiement');
Route::get('/se-connecter',[\App\Http\Controllers\clientController::class,'seConnecter'])->name('se-connecter');
Route::get('/creer-compte',[\App\Http\Controllers\clientController::class,'creerCompte'])->name('creer-compte');

// ----------------------------------------------Mon admin ------------------------------------
Route::get('/admin',[\App\Http\Controllers\adminController::class,'index'])->name('index');
Route::get('/ajout-categorie',[\App\Http\Controllers\adminController::class,'ajoutCategorie'])->name('ajout-categorie');
Route::get('/categories',[\App\Http\Controllers\adminController::class,'categories'])->name('categories');
