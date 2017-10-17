@extends('index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    SEGUIMIENTO DE PROCESO
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
                                                <p>
                                                    <b>No. Historia Clinica</b>
                                                </p>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-3">
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
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-2">
                                                <p>
                                                    <b>No. Sesion</b>
                                                </p>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">1.Personas que Asistieron.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="2" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">2.Objectivo a Trabajar.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="2" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">3.Resumen de Sesion.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="5" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">4.Hipotesis.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">5.Tarea:</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
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
