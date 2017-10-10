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
    <div class="block-header">
        <h2>
            FORM VALIDATION
            <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>BASIC VALIDATION</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="{{url('usuario')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nombres" required>
                                <label class="form-label">Nombres</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="apellidos" required>
                                <label class="form-label">Apellidos</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label class="form-label">Tipo de Docuento</label>

                            <div class="form-line">

                                <input type="radio" name="tipo_documento" id="CE" class="with-gap" value="CE">
                                <label for="CE">C.E.</label>

                                <input type="radio" name="tipo_documento" id="CC" class="with-gap" value="CC">
                                <label for="CC">C.C.</label>

                                <input type="radio" name="tipo_documento" id="TI" class="with-gap">
                                <label for="TI" class="m-l-20">T.I.</label>

                                <input type="radio" name="tipo_documento" id="RC" class="with-gap">
                                <label for="RC" class="m-l-20">R.C.</label>

                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="documento" required>
                                <label class="form-label">Documento</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="direccion" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                <label class="form-label">Dirección</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" class="form-control" name="telefono" required>
                                <label class="form-label">Telefono</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" required>
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="usuario" class="form-control" name="usuario" required>
                                <label class="form-label">Usuario</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="checkbox" name="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->

</div>

<!-- #END# Advanced Form Example With Validation -->
@endsection