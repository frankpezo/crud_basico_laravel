<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos
use App\Models\Note;
use Iluminate\Http\View\View; //Para poder saber cuáles devulven una vista
use Illuminate\Http\RedirectResponse; //Para saber cuál función rederije a una vista

class NoteController extends Controller
{
    //1. Función principal 
    public function index(){
        //1.1. Para que se nos muestre todo en lista
        $notes = Note::all();
        return view('note.index', compact('notes'));

    }
}
