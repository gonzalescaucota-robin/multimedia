@extends('layouts.layout')
<h1><a>Bienvenido a crear Materia</a></h1>
@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
			<form action="{{ route('materia.store') }}" method="POST">
				@csrf
	
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name"  />
				</div>
				
				<div class="mt-4">
					<x-jet-label  value="{{ __('Contenido') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="contenido"  />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
					<textarea rows="6" cols="38" class="block mt-1 w-full" name="descripcion" ></textarea>
					</label>
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Curso') }}" />
					<select name="curso_id">
					<option value="">seleccione una materia</option>
					@foreach($curso as $cursos)
					<option value={{$cursos->id}}>{{$cursos->name}}</option>	
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