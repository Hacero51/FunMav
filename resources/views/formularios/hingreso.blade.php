@extends('index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    HOJA DE INGRESO
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
                                        <br>
                                        <h2 class="card-inside-title">DATOS DEL PACIENTE</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>FECHA DE CONSULTA</th>
                                                    <th>
                                                        <input align="right" type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>PACIENTE</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>IDENTIFICACION</th>
                                                    <th>
                                                        <input type="text" class="form-control date"
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>FECHA DE NACIMIENTO</th>
                                                    <th>
                                                        <input align="right" type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>EDAD</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>EMPRESA PRESTADORA DE SALUD</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>DIRECCION</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>TELEFONO</th>
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
                                                    <th>MUNICIPIO</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">DATOS DEL ACUDIENTE</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>NOMBRES Y APELLIDO</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>DIRECCION</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>TELEFONO</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>PARENTESCO</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">DATOS DE INGRESO</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder="Motivo de Consulta"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">OBSERVACIONES</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize"></textarea>
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
