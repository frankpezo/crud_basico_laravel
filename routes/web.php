<?php

use Illuminate\Support\Facades\Route;
//Extaemos lo necesario
use App\Http\Controllers\NoteController;

//1. Creamos la rutas necesarias
Route::get('/note', [NoteController::class, 'index']) -> name('note.index');