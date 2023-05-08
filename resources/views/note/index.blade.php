{{--1. Extendemos el layout--}}
@extends('layouts.app')
{{--2. Contenido--}}
@section('content')

{{-- 3. Mostramos la lista en donde se verán los datos creados--}}
<ul>
    {{--3.1. Un forelse --}}
    @forelse($notes as $note)

    @empty 
    <p>Lista vacía</p>
    @endforelse
</ul>
@endsection