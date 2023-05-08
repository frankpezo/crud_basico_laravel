<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;  //Para saber cuál función rederije a una vista
//Importamos
use App\Models\Note;
use App\Http\Requests\NoteRequest;
//use Iluminate\View\View; //Para poder saber cuáles devulven una vista


class NoteController extends Controller
{
    //1. Función principal 
    public function index()
    {
        //1.1. Para que se nos muestre todo en lista
        $notes = Note::all();
        return view('note.index', compact('notes'));

    }

    //2. función crear
    public function create()
    {
      return view('note.create');
    }
  
    //3. función store, para poder guardar en la bd la info recibida de create 
    //debemos crear un request usando: php artisan make:requeste NoteRequestest, para poder usarlo como clase, 
    // también para que podamos hacer las validaciones
    public function store(NoteRequest $request ){
         //En el request haremos las validaciones
         //3.1 Colocamos lo siguiente para guardar la información
         Note::create($request->all());

       return redirect()->route('note.index')->with('success', 'Nota creada correctamente'); //esto último lo haremos en el request y dentro del create para validar
    }

}
