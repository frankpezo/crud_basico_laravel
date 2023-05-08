<?php

use Illuminate\Support\Facades\Route;
//Extaemos lo necesario
use App\Http\Controllers\NoteController;

//1. Creamos la rutas necesarias
Route::get('/note', [NoteController::class, 'index']) -> name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');