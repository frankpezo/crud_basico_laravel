<?php

use Illuminate\Support\Facades\Route;
//Extaemos lo necesario
use App\Http\Controllers\NoteController;

//1. Creamos la rutas necesarias
Route::get('/note', [NoteController::class, 'index']) -> name('note.index');
//1.1.Para guardar en la bd
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
//1.2. Para mostar la info 
Route::get('/note/show/{note}',[NoteController::class, 'show'])->name('note.show');