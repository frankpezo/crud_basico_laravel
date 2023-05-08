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
     <li> <a href="#">{{$note->title}}</a> |   <a href="#">Editar</a> <a href="#">Eliminar</a></li>
    @empty 
    <p>Lista vacía</p>
    @endforelse
</ul>
@endsection