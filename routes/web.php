<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\LlibreController;
use App\Http\Controllers\AutorController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [DefaultController::class, 'home'])->name('home');

//// LLIBRES
Route::get('/llibre/list', [LlibreController::class, 'list'])->name('llibre_list');

Route::match(['get', 'post'], '/llibre/edit/{id}', [LlibreController::class, 'edit'])->name('llibre_edit');

Route::match(['get', 'post'], '/llibre/new', [LlibreController::class, 'new'])->name('llibre_new');

Route::get('/llibre/delete/{id}', [LlibreController::class, 'delete'])->name('llibre_delete');

//AUTORS
Route::get('/autor/list', [AutorController::class, 'list'])->name('autor_list');

Route::match(['get', 'post'], '/autor/edit/{id}', [AutorController::class, 'edit'])->name('autor_edit');

Route::match(['get', 'post'], '/autor/new', [AutorController::class, 'new'])->name('autor_new');

Route::get('/autor/delete/{id}', [AutorController::class, 'delete'])->name('autor_delete');