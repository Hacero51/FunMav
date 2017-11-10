@extends('index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    EPICRISIS DE INGRESO
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
                                        <br>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>FECHA</th>
                                                    <th>
                                                        <input align="right" type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>HORA</th>
                                                    <th>
                                                        <input align="right" type="time"  class="form-control date" placeholder="hh/mm">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>EDAD</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>SEXO</th>
                                                    <th>
                                                        <select class="form-control">
                                                            <option>seleccion sexo</option>
                                                            <option>Femenino</option>
                                                            <option>Masculino</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>SERVICIO</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>LINEA DE PAGO</th>
                                                    <th>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Efectivo</option>
                                                            <option>Consignacion Bancaria</option>
                                                            <option>Cheque</option>
                                                        </select>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th>NOMBRES Y APELLIDOS</th>
                                                    <th>
                                                        <input type="text" class="form-control" name="names" required>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>DOCUMENTO</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">MOTIVO DE CONSULTA O SOLICITUD DE SERVICIO</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">EMFERMEDAD ACTUAL</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="2" class="form-control no-resize"></textarea>
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
