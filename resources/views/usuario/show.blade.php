@extends('layouts.layout')

@section('title','Usuarios')

@section('content')
    <h1>Bienvenido este es el usuario {{usuario->name}}</h1>


    <a href="/usuario">Volver a usuarios</a>
@endsection