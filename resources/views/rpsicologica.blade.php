@extends('index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    REMISION PSICOLOGICA
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form>
                                <div id="form_validation">
                                    <div class="input-group-lg">
                                        <div class="row clearfix">
                                            <br>
                                            <div class="col-md-2">
                                                <b>Fecha</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">1. Datos Personales del Remitido</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Nombres y apellidos">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>seleccione sexo</option>
                                                    <option>Femenino</option>
                                                    <option>Masculino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Edad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ciudad o lugar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <b>Fecha de Nacimiento</b>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Seleccione tipo documento</option>
                                                    <option>Cedula ciudadania</option>
                                                    <option>Tajeteta Identidad</option>
                                                    <option>Cedula Extranjeria</option>
                                                    <option>Registro Civil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Numero de Cedula">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>seleccione sexo</option>
                                                    <option>Femenino</option>
                                                    <option>Masculino</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>seleccione Escolaridad</option>
                                                    <option>Primaria</option>
                                                    <option>Secundaria</option>
                                                    <option>Universidad</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Estado Civil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Dirrecion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Telefono">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Remite Paciente a:</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>seleccione</option>
                                                    <option>Medico General</option>
                                                    <option>Psiquiatria</option>
                                                    <option>Eps</option>
                                                    <option>Sisben</option>
                                                    <option>Otros</option>
                                                    <option>Observacion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">2. Descripcion</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">3. Motivo de la Remision</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">4. Recomendaciones</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect" type="submit">Enviar</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
