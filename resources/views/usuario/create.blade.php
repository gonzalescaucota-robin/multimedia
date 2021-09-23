@extends('layouts.layout')

@section('title','Usuarios')

@section('content')
    <h1><a class="block nt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear usuarios</a></h1>
    <div class=" max-w-md max-width: 28rem/* 448px */ bg-gray-300 mx-auto">
        <label for="">nombre
            <input type="text" id="name">
        </label>
	</div>
@endsection
