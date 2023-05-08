{{--1. Extendemos--}}
@extends('layouts.app')
{{--2. Contenido --}}
@section('content')
 {{--2.1. link para cambiar de pestaña--}}
 <a href="{{route('note.index')}}">Regresar</a>  <br> <br>
{{--3.formulario --}}
 <form action="">
   
    <input type="text" name="titulo" id="title" placeholder="Ingrese el título">  <br> <br>
    <input type="text" name="description" id="description" placeholder="Ingrese la descripción"> <br> br
     <input type="submit" value="Crear">

 </form>

@endsection