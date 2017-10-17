@extends('dashboard')

@section('topbar')
    @include('admin.topbar')
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
<!-- Advanced Form Example With Validation -->
<div class="container-fluid">
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>Registro Usuario</h1>
                </div>
                <div class="body">
                    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombres" placeholder="Nombres" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label class="form-label">Tipo de Docuento</label>
                                <div class="form-line">
                                    <input type="radio" name="tipo_documento" id="CE" class="with-gap" value="CE">
                                    <label for="CE">C.E.</label>

                                    <input type="radio" name="tipo_documento" id="CC" class="with-gap" value="CC">
                                    <label for="CC">C.C.</label>

                                    <input type="radio" name="tipo_documento" id="TI" class="with-gap" value="TI">
                                    <label for="TI" class="m-l-20">T.I.</label>

                                    <input type="radio" name="tipo_documento" id="RC" class="with-gap" value="RC">
                                    <label for="RC" class="m-l-20">R.C.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="documento"  placeholder="Documento" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <textarea name="dirrecion" cols="1" rows="2" class="form-control no-resize" placeholder="Dirección" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="tel" class="form-control" name="telefono" placeholder="Telefono" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="usuario" class="form-control" name="usuario" placeholder="Usuario" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="contrasena" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <p>
                                        <b>Tipo de Usuario</b>
                                    </p>
                                    <select class="form-control" name="perfil">
                                        <option name="admin">ADMIN</option>
                                        <option name="administrador">Administradora</option>
                                        <option name="psicologo">Psicologa</option>
                                        <option name="trabajadora">Trabajadora</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {!!Form::submit('Registrar',['class'=>'btn btn-primary waves-effect'])!!}
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection