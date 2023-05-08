{{--1. Extendemos el layout--}}
@extends('layouts.app')
{{--2. Contenido--}}
@section('content')
 {{--2.1. link para cambiar de pestaña--}}
 <a href="{{route('note.index')}}">Regresar</a> <br><br>
 <h1>{{$note->title}}</h1>
 <p>{{$note->description}}</p> 
 {{--
    Por esta razón es que creamos del modelo
    --}}
@endsection