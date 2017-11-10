@extends('index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    HOJA DE VIDA
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>INFORMACION BASICA</h2>
                        </div>
                        <div class="body">
                            <form>
                                <div id="form_validation">
                                    <div class="form-group form-float" >
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="names" required>
                                            <label class="form-label">Nombres y Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="input-group-lg">
                                        <div class="row clearfix">
                                            <div class="col-md-4">
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
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Ciudad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Edad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <b>Fecha de Ingreso</b>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>TIpo de Documento</b>
                                                </p>
                                                <select class="form-control">
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
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="De Donde">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Estado Civil">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="No. Hijos">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Alias">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Estudios</h2>
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="md_checkbox_1" class="chk-col-yellow"/>
                                            <label for="md_checkbox_1">Primaria</label>
                                            <input type="checkbox" id="md_checkbox_2" class="chk-col-blue"/>
                                            <label for="md_checkbox_2">Secundaria</label>
                                            <input type="checkbox" id="md_checkbox_3" class="chk-col-red"/>
                                            <label for="md_checkbox_3">Universidad</label>
                                        </div>
                                        <h2 class="card-inside-title">Motivos de Ingreso</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Bazuco</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_4" class="chk-col-black"/>
                                                        <label for="md_checkbox_4"></label>
                                                    </th>
                                                    <th>Pastillas</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_5" class="chk-col-black"/>
                                                        <label for="md_checkbox_5"></label>
                                                    </th>
                                                    <th>Cocaina</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_6" class="chk-col-black"/>
                                                        <label for="md_checkbox_6"></label>
                                                    </th>
                                                    <th>Marihuana</th>
                                                    <th><br>
                                                        <input type="checkbox" id="md_checkbox_7" class="chk-col-black"/>
                                                        <label for="md_checkbox_7"></label>
                                                    </th>
                                                    <th>Licor</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_8" class="chk-col-black"/>
                                                        <label for="md_checkbox_8"></label>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Calillo</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_9" class="chk-col-black"/>
                                                        <label for="md_checkbox_9"></label>
                                                    </th>
                                                    <th>Inyeccion</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_10" class="chk-col-black"/>
                                                        <label for="md_checkbox_10"></label>
                                                    </th>
                                                    <th>Gasolina</th>
                                                    <th><br>
                                                        <input type="checkbox" id="md_checkbox_11" class="chk-col-black"/>
                                                        <label for="md_checkbox_11"></label></th>
                                                    <th>Poopers</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_12" class="chk-col-black"/>
                                                        <label for="md_checkbox_12"></label>
                                                    </th>
                                                    <th>Crack</th>
                                                    <th><br>
                                                        <input type="checkbox" id="md_checkbox_13" class="chk-col-black"/>
                                                        <label for="md_checkbox_13"></label>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Chamber</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_14" class="chk-col-black"/>
                                                        <label for="md_checkbox_14"></label>
                                                    </th>
                                                    <th>Heroina</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_15" class="chk-col-black"/>
                                                        <label for="md_checkbox_15"></label>
                                                    </th>
                                                    <th>Creepink</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_16" class="chk-col-black"/>
                                                        <label for="md_checkbox_16"></label>
                                                    </th>
                                                    <th>Extasis</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_17" class="chk-col-black"/>
                                                        <label for="md_checkbox_17"></label>
                                                    </th>
                                                    <th>Acidos</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_18" class="chk-col-black"/>
                                                        <label for="md_checkbox_18"></label>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Hongos</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_19" class="chk-col-black"/>
                                                        <label for="md_checkbox_19"></label>
                                                    </th>
                                                    <th>Cocaina Rosada</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_20" class="chk-col-black"/>
                                                        <label for="md_checkbox_20"></label>
                                                    </th>
                                                    <th>Krokodil</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_21" class="chk-col-black"/>
                                                        <label for="md_checkbox_21"></label>
                                                    </th>
                                                    <th>Otros</th>
                                                    <th>
                                                        <br>
                                                        <input type="checkbox" id="md_checkbox_22" class="chk-col-black"/>
                                                        <label for="md_checkbox_22"></label>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 align="center" class="card-inside-title">En que centros de Rehabilitacion ha estado</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="1.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="2.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="3.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="4.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Recaidas">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Fecha de Retiro</b>
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
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Razones">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" placeholder="Introduzca Observaciones Paciente ......"></textarea>
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
