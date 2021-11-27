@extends('layouts.Listalayout')
<div class="mt-4">
<h3>Lista de asistencia</h3>
</div>
@section('content')
<div class="mt-4">
    <div class="card">
        <div class="card-body">
                <table id="asistencia" class="table table-striped table-bordered">
                    <div>
                    <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Email</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($asistencia as $asistencias)
                        <tr>
                    <td>{{$asistencias->nameus}}</a></td>
                    <td>{{$asistencias->estado}} </td>
                    <td>{{$asistencias->email}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-4">
    <a class="boton_personalizado" href="{{route('asistencia.index')}}">volver</a>
    </div>
 @section('js')
    <script>
        $('#asistencia').DataTable({
            "language": {
            "lengthMenu": "Mostrar _MENU_ Registros de pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search" : "Buscar",
            "paginate" :{
                "next" : "Siguiente",
                "previous" : "Anterior"
            }
            }
        });
    </script>
@endsection