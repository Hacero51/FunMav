@extends('dashboard')

@section('topbar')
    @include('admin.topbar')
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    DATOS ACUDIENTE
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form>
                                <div id="form_validation">
                                    <br>
                                    <div class="form-group form-float" >
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="names" required>
                                            <label class="form-label">Nombres y Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="input-group-lg">
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <p>
                                                    <b>TIpo de Documento</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>Selecciona</option>
                                                    <option>Cedula ciudadania</option>
                                                    <option>Cedula Extranjeria</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Numero Identidad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Dirrecion">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Barrio">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ciudad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Numero Celular</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control mobile-phone-number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Profesion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Empresa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <p>
                                                    <b>Parentesco con el Interno</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>Selecciona</option>
                                                    <option>Madre</option>
                                                    <option>Padre</option>
                                                    <option>Hijo(a)</option>
                                                    <option>Tio(a)</option>
                                                    <option>Primo(a)</option>
                                                    <option>Amigo(a)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ha sufrido alguna emfermedad ?.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Has sido Operado?.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Eps-Sisben-Ars">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ha estado hospitalizado?.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Toma algun medicamento ?.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                <b>Valor aporte</b>
                                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control money-dollar" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <b>Telefono (Adicionales)</b>
                                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_iphone</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control mobile-phone-number" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Firma del Acudiente">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <b>Telefono </b>
                                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_iphone</i>
                                            </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control mobile-phone-number" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Firma del interno">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3>NOTA EXCLUSIVA PARA EL ACUDIENTE O FAMILIAR:</h3>
                                        <p align="justify">
                                            Queremos informarle que en el momento en que el interno desee abandonar nuestra Institución, lo podrá hacer ya
                                            que el programa es voluntario, pero antes trataremos de persuadirlo o concientizarlo del paso que va a tomar y de
                                            la misma manera haremos lo posible para informarle a usted, para que sepa que desde ese momento no nos hacemos
                                            responsables de nada de lo que pueda suceder con el interno.
                                        </p>
                                        <p>
                                            NOTA. La colchoneta, las sabanas, las camisetas del uniforme y el dinero no
                                            tienen devolución.
                                        </p>
                                        <button class="btn btn-primary waves-effect" type="submit">Enviar</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
