{{--1. Extendemos el layout--}}
@extends('layouts.app')
{{--2. Contenido--}}
@section('content')
 {{--2.1. link para cambiar de pestaña--}}
 <a href="{{route('note.create')}}">Crear nueva nota</a>

{{-- 3. Mostramos la lista en donde se verán los datos creados--}}
<ul>
    {{--3.1. Un forelse --}}
    @forelse($notes as $note)
     <li> <a href="{{route('note.show', $note->id)}}">{{$note->title}}</a> |
        {{-- 3.2. Para editar también debemos mandar el id a la ruta--}} 
          <a href="{{route('note.edit', $note->id)}}">Editar</a>
         {{--3.3. Para elimiar debemos hacerlo como un botón y es necesario el formulario--}}
         <form action="{{route('note.delete', $note->id)}}" method="POST">
            {{--3.3.1. Convertimos en método delete--}}
            @method('DELETE')
            {{--3.3.2. Hacemos seguro --}}
             @csrf
            <input type="submit" value="Eliminar">
         </form>
    @empty 
    <p>Lista vacía</p>
    @endforelse
</ul>
@endsection