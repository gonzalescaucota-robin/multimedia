@extends('layouts.layout')

@section('title','Temas')

@section('content')
    <h1>Bienvenido este es el tema {{tema->name}}</h1>


    <a href="/tema">Volver a temas</a>
@endsection