<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class,'homepage'])-> name('homepage');

// rotta per gestire la dashboard utente
Route::get('user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');

// rotte per creare il form articoli
Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');

// rotta che mi fara salvare i dati nel db
Route::post('/article/store', [ArticleController::class,'store'])->name('article.store');

// rotta per recuperare e mostrare gli articoli
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// rotta per l'articolo in dettaglio
Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article.show');

// rotte per mostrareil form creazione categoria
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');

// rotta mi fa salvare nel DB
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');

// rotta che mostra tutte le categorie
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');

// Rotta per il dettaglio di una categoria
Route::get('/category/show/{category}',[CategoryController::class,'show'])->name('category.show');

//rotta per mostrare un form di modifica
Route::get('/category/edit/{category}',[CategoryController::class,'edit'])->name('category.edit');

// rotta per effettuare una modifica
Route::put('/category/update/{category}',[CategoryController::class,'update'])->name('category.update');

// rotta per eliminare una categoria
Route::delete('/category/destroy/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
