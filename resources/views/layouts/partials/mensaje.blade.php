{{--1. Para hacer esto primero debimos haber creado el formulario que nos permita crear notas, la ruta store 
       la función store para guardar la info en la bd, el request para poder hacer las restricciones y redireccionar la pagina con un mensaje, 
       este mensaje lo crearemos aquí
    --}}


@if($message = Session::get('success'))
<div style = "padding:15px; background-color: rgb(4, 255, 25); color: white" >
    <p>{{$message}}</p>
</div>
@endif

@if($message = Session::get('danger'))
 <div style = "padding:15px; background-color: rgb(255, 4, 4); color: white ">
    <p>{{$message}}</p>
 </div>
@endif