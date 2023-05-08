{{--1. Extendemos el layout--}}
@extends('layouts.app')
{{--2. Contenido--}}
@section('content')
 {{--2.1. link para cambiar de pestaña--}}
 <a href="{{route('note.index')}}">Regresar</a> <br><br>
  {{--3. Formulario donde se mostrará los datos que queremos editar--}}
  {{-- No olvidemos que vamos a mandar a una función que nos permita hacer la actualición 
     y que también estamos utilizando el método PUT en las rutas por lo que es ncesario transformar 
     este formulario con una función
    --}}
  <form action="{{route('note.update', $note->id)}}" method="POST">
    {{--3.1. Transformamos el formulario a método PUT--}}
    @method('PUT')
    {{--3.2. Seguridad al formulario--}}
    @csrf
    {{--3.3. Colocamos los campos y con el valor obtenido poniendo value en cada uno--}}
    <input type="text" name="title" id="title" value="{{$note->title}}">  <br> <br>
    {{-- validación de campo--}}
    @error('title')
    <p style ="color:red;">{{$message}}</p>
    @enderror
    <input type="text" name="description" id="description" value="{{$note->description}}"> <br> <br>
    {{-- validación de campo--}}
    @error('description')
    <p style ="color:red;">{{$message}}</p>
    @enderror
     <input type="submit" value="Actualizar">

  </form>
@endsection