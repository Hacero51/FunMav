@extends('dashboard')

@section('topbar')
    @include('admin.topbar')
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
<!-- Advanced Form Example With Validation -->

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>CREAR USUARIOS</h2>
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

                <form id="wizard_with_validation" method="POST">
                    {!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
                    <h3>Información de la Cuenta</h3>
                    <fieldset>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::email('email',null,['class' =>'form-control', 'placeholder' =>'Email','required'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('usuario',null,['class' =>'form-control', 'placeholder' =>'Usuario','required'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::password('password', ['class' => 'form-control','placeholder' =>'Contraseña','required']); !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::password('password', ['class' => 'form-control','placeholder' =>'Confirmar Contraseña','required']); !!}
                            </div>
                        </div>

                    </fieldset>

                    <h3>Información Personal</h3>
                    <fieldset>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('nombres',null,['class' =>'form-control', 'placeholder' =>'Nombres','required'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('apellidos',null,['class' =>'form-control', 'placeholder' =>'Apellidos','required'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('documento',null,['class' =>'form-control', 'placeholder' =>'Numero de Documento','required'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('direccion',null,['class' =>'form-control', 'placeholder' =>'Dirección','required'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('telefono',null,['class' =>'form-control', 'placeholder' =>'Telefono','required'])!!}
                            </div>
                        </div>

                    </fieldset>

                    {!! Form::close() !!}
                </form>

                <form id="wizard_with_validation" method="POST">
                    <h3>Account Information</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="username" required>
                                <label class="form-label">Username*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" id="password" required>
                                <label class="form-label">Password*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="confirm" required>
                                <label class="form-label">Confirm Password*</label>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Profile Information</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" required>
                                <label class="form-label">First Name*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="surname" class="form-control" required>
                                <label class="form-label">Last Name*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control" required>
                                <label class="form-label">Email*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                <label class="form-label">Address*</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input min="18" type="number" name="age" class="form-control" required>
                                <label class="form-label">Age*</label>
                            </div>
                            <div class="help-info">The warning step will show up if age is less than 18</div>
                        </div>
                    </fieldset>

                    <h3>Terms & Conditions - Finish</h3>
                    <fieldset>
                        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                        <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Advanced Form Example With Validation -->
@endsection