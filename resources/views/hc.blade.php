@extends('index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                        Historia Clinica
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
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="No.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            </div>
                                            <div class="col-md-2">
                                                <b>Fecha</b>
                                                <div class="input-group">
                                                    <span align="right" class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div align="right" class="form-line">
                                                        <input align="right" type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-8">
                                                <h2 class="card-inside-title">I.</h2>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Datos de Identificacion">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="A.  Nombre de quien lo solicita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="1.  Parentesco con el P.I">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-3">
                                                <p>
                                                    <b>2.</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>seleccione</option>
                                                    <option>Femenino</option>
                                                    <option>Masculino</option>
                                                </select>
                                            </div>
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
                                                        <input type="text" class="form-control date" placeholder="Estado Civil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="B.  Nombre del paciente">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>1.</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>Seleccione</option>
                                                    <option>Cedula ciudadania</option>
                                                    <option>Tajeteta Identidad</option>
                                                    <option>Cedula Extranjeria</option>
                                                    <option>Registro Civil</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Numero Identidad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-3">
                                                <p>
                                                    <b>2.</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>seleccion</option>
                                                    <option>Femenino</option>
                                                    <option>Masculino</option>
                                                </select>
                                            </div>
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
                                                        <input type="text" class="form-control date" placeholder="Estado Civil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <b>3. Fecha nacimiento </b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div align="right" class="form-line">
                                                        <input align="right" type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Lugar nacimiento">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="4. Dirrecion de residencia">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ciudad y barrio">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="5. Telefono">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Celular">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="6. Escolaridad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <b>7. Sistema de seguridad en salud </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="E.P.S">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Sisben">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">II. Genograma</h2>
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
