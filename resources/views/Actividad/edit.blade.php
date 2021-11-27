@extends('layouts.layout')

@section('title', 'Materia edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar una materia</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('actividad.update', $actividad) }}" method="POST">
				@csrf
				@method('put')
	
				<div>
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name" value="{{$actividad->name}}" />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
					<textarea rows="6" cols="38" class="block mt-1 w-full" name="descripcion" ><?php echo $actividad->descripcion?></textarea>
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
						{{ __('Actulizar registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>