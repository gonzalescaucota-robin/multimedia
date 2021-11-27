@extends('layouts.layout')

@section('title', 'Crear Actividad')

@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
			<form action="{{ route('actividad.store') }}" method="POST">
				@csrf
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name"  />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
					<textarea rows="6" cols="38" class="mt-4" name="descripcion" ></textarea>
					</label>
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Tema') }}" />
					<select name="tema_id">
					<option value="">seleccione una tema</option>
					@foreach($tema as $temas)
					<option value={{$temas->id}}>{{$temas->name}}</option>	
					@endforeach
					</select>
				</div>
					<x-jet-button class="mt-4">
							<br>
						{{ __('Registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>
	@endsection