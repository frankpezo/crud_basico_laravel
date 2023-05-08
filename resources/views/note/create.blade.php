{{--1. Extendemos--}}
@extends('layouts.app')
{{--2. Contenido --}}
@section('content')
 {{--2.1. link para cambiar de pestaña--}}
 <a href="{{route('note.index')}}">Regresar</a>  <br> <br>
{{--3.formulario --}}
 <form action="{{route('note.store')}}" method="POST">
    {{-- note.store, solo será una función donde se hará la magia de guardar en la base de datos--}}
    {{--3.2. Hacemos seguro el formulario con:  --}}
    @csrf
    {{--3.1. Colocamos los campos y el botón--}}
    <input type="text" name="title" id="title" placeholder="Ingrese el título">  <br> <br>
    {{-- validación de campo--}}
    @error('title')
    <p style ="color:red;">{{$message}}</p>
    @enderror
    <input type="text" name="description" id="description" placeholder="Ingrese la descripción"> <br> <br>
    {{-- validación de campo--}}
    @error('description')
    <p style ="color:red;">{{$message}}</p>
    @enderror
     <input type="submit" value="Crear">

 </form>

@endsection