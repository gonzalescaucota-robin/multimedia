@extends('layouts.layout')

@section('title', 'Actividad '. $actividad->name)

@section('content')

<h4>Bienvenido a la actividad {{$actividad->name}} </h4>
@section('content')
<form id="eliminar" action="{{route('actividad.destroy',$actividad)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="botones">
<a class="boton_personalizado" href="{{route('actividad.edit', $actividad)}}">Editar</a>
<button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
<a class="boton_personalizado" href="{{route('actividad.index')}}" >Volver</a>
</div>
@endsection