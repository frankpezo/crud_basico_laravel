<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;  //Para saber cuál función rederije a una vista
//Importamos
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\View\View; //Para poder saber cuáles devulven una vista


class NoteController extends Controller
{
    //1. Función principal 
    public function index():View
    {
        //1.1. Para que se nos muestre todo en lista
        $notes = Note::all();
        return view('note.index', compact('notes'));

    }

    //2. función crear
    public function create():View
    {
      return view('note.create');
    }
  
    //3. función store, para poder guardar en la bd la info recibida de create 
    //debemos crear un request usando: php artisan make:requeste NoteRequestest, para poder usarlo como clase, 
    // también para que podamos hacer las validaciones
    public function store(NoteRequest $request ):RedirectResponse
    {
         //En el request haremos las validaciones
         //3.1 Colocamos lo siguiente para guardar la información
         Note::create($request->all());

       return redirect()->route('note.index')->with('success', 'Nota creada correctamente'); //esto último lo haremos en el request y dentro del create para validar
    }

    //4. Para mostar la info
    //creamos objeto del modelo para poder hacer las visualizaciones
    public function show(Note $note):view
    {
    
        return view('note.show', compact('note'));
    }

    //5. Para traer la información al formulario y poder editarlo
    public function edit(Note $note):view
    {
       return view('note.edit', compact('note'));
    }

    //6. Para actualiza la información recibida en el edit
    public function update(NoteRequest $request, Note $note):RedirectResponse
    {
        //6.1. Actualizamos todo con la función estática "update"
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Nota modificada con éxito');
    }

    //7. Para eliminar el elemento
    public function delete(Note $note):RedirectResponse
    { 
      //7.1. Eliminamos con la función estática: delete
      $note->delete();
        return redirect()->route('note.index')->with('danger', 'Elemento eliminado');
    }


}
