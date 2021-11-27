@extends('layouts.layout')

@section('title', 'Asistencia')
<h3>Bienvenido a crear Asistencia</h3>
@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('asistencia.store',) }}" method="POST">
				@csrf
				<x-jet-label  value="{{ __('Usuario') }}" />
				<select name="user_id">
					<option value="">seleccione un Usuario</option>
					@foreach($user as $users)
					<option value={{$users->id}}>{{$users->nameus}}</option>	
					@endforeach
					</select>
				<div>
					<x-jet-label value="{{ __('Estado') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="estado"  />
				</div>
				<div>
					<x-jet-label value="{{ __('Fecha') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fecha"  />
				</div>

					<x-jet-button class="mt-4">
						{{ __('Registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>
	@endsection