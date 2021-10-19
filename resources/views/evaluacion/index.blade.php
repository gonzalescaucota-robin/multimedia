@extends('layouts.layout')

@section('title','evaluacion')

@section('content')
    <h1><a class="block nt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a la seccion de los evaluaciones</a></h1>
    <a href="/usuario/create" class="block nt-1 text-lg leading-tight font-medium text-black hover:underline">Crear nueva evaluacion...</a>
    <div class=" max-w-md max-width: 28rem/* 448px */ bg-gray-300 mx-auto">
    <div class="grid sn-grid-cols-1 md-grid-cols-2 lg-grid-cols-4 gap-4">
		@foreach($evaluacion as $evaluacion)
			<div class="max-w-md mx-auto bg-white rounded-x1 shadow-nd overflow-hidden md:max-w-2x1">
				<div class="md:flex">
					<div class="p-8">
						<div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$evaluacion->name}}</div>
						    <p class="mt-2 text-gray-800"> una descripcion de ejemplo para rellenar con un poco de codigo hardcore y que nos muestre como esta quedando la listilla aguante informatica </p>
						    <a href="/usuario/{{$usuario->id}}" class="block nt-1 text-lg leading-tight font-medium text-black hover:underline">Ver mas...{{$evaluacion->id}}</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>


@endsection
