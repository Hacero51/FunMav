@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 3,$menun2=3))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')

    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            VER PACIENTES
                        </h2>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Edad</th>
                                    <th>T.D.</th>
                                    <th>Documento</th>
                                    <th>Genero</th>
                                    <th>Ubicacion</th>
                                    <th>Grupo Etnico</th>
                                    <th>Eps</th>
                                    <th>Estado Civil</th>
                                    <th>No. Hijos</th>
                                    <th>Alias</th>
                                    <th>Señales</th>
                                    <th>Rh</th>
                                    <th>Nivel Educativo</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Edad</th>
                                    <th>T.D.</th>
                                    <th>Documento</th>
                                    <th>Genero</th>
                                    <th>Ubicacion</th>
                                    <th>Grupo Etnico</th>
                                    <th>Eps</th>
                                    <th>Estado Civil</th>
                                    <th>No. Hijos</th>
                                    <th>Alias</th>
                                    <th>Señales</th>
                                    <th>Rh</th>
                                    <th>Nivel Educativo</th>
                                    <th>Accion</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($paciente as $paciente)
                                    <tr>
                                        <td>{{$paciente->nombres}}</td>
                                        <td>{{$paciente->apellidos}}</td>
                                        <td>{{$paciente->fecha_nacimiento}}</td>
                                        <td>{{$paciente->edad}}</td>
                                        <td>{{$paciente->tipo_documento}}</td>
                                        <td>{{$paciente->documento}}</td>
                                        <td>{{$paciente->genero}}</td>
                                        <td>{{$paciente->ubicacion_id}}</td>
                                        <td>{{$paciente->procedencia}}</td>
                                        <td>{{$paciente->eps_id}}</td>
                                        <td>{{$paciente->estado_civil}}</td>
                                        <td>{{$paciente->hijos}}</td>
                                        <td>{{$paciente->alias}}</td>
                                        <td>{{$paciente->senales}}</td>
                                        <td>{{$paciente->rh}}</td>
                                        <td>{{$paciente->estudios}}</td>
                                        <td>
                                            <a class="btn-circle" href="{{route('paciente.edit',$paciente->id)}}" role="button"><i class="material-icons">create</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->


    </div>

@endsection