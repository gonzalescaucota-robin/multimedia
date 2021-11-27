@extends('layouts.showlayout')
<h4>Bienvenido al Tema {{$materia->name}} </h4>
<h4>Descripcion:{{$materia->descripcion}}<h4>
@yield('title')
@section('content')
<form id="materia" action="{{route('materia.destroy',$materia)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="botones">
<a  class="boton_personalizado" href="{{route('materia.edit', $materia)}}">Editar</a>
<button class="boton_personalizado" type="submit" form="materia" >Eliminar</button>
<a class="boton_personalizado" href="{{route('materia.index')}}">volver a materia</a>
@endsection
© 2021 GitHub, Inc.