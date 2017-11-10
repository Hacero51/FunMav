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
                    FORMATO DE EVALUACION
                    TERAPIA OCUPACIONAL
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Datos Personales</h2>
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Edad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <p>
                                                    <b>Estado Civil</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>Seleccione</option>
                                                    <option>Soltero(a)</option>
                                                    <option>Casado(a)</option>
                                                    <option>Viudo(a)</option>
                                                    <option>Union libre</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <b>Escolaridad</b>
                                                </p>
                                                <select class="form-control">
                                                    <option>Seleccione</option>
                                                    <option>Primaria</option>
                                                    <option>Segundaria</option>
                                                    <option>Universidad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Emfermedad Actual">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="Natural">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES INTEGRALES DE MOVIMIENTO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Patrones</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Alcance plano superior</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alcance plano inferior</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agarre a mano llena</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agarre cilíndrico</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Enganche</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saltar involuntario</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saltar voluntario</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lanzar con proporción</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lanzar con rudimentaria</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES FUNCIONALES DE MOVIMIENTO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Patrones</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Mano-Cabeza</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-boca</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-Hombro</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-espalda</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Mano-pierna</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-pie</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-cola</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-bilateral</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES COGNITIVOS</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Area Cognitiva</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Observación</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nivel de Atención</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Concentración</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Habilidad solucionar </td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Problemas</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Creatividad</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Iniciativa</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Competencia</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Interpretación</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Planificación</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Alta</option>
                                                                <option>Media</option>
                                                                <option>Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES AVDB</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Area AVDB</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Alimentación</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Independiente</option>
                                                                <option>Semindependiente</option>
                                                                <option>Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vestido</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Independiente</option>
                                                                <option>Semindependiente</option>
                                                                <option>Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Higiene Mayor</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Independiente</option>
                                                                <option>Semindependiente</option>
                                                                <option>Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Higiene menor</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Independiente</option>
                                                                <option>Semindependiente</option>
                                                                <option>Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Desplazamiento</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Independiente</option>
                                                                <option>Semindependiente</option>
                                                                <option>Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PERCETIVO</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Sensibilidad Superficial (Calor Frio
                                                        Dolor)</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Funcional</option>
                                                            <option>Semifuncional</option>
                                                            <option>No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sensibilidad
                                                        Profunda (Barognosia
                                                        Esterognosia
                                                        Diferenciación
                                                        De texturas
                                                        Grafestesia)</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Funcional</option>
                                                            <option>Semifuncional</option>
                                                            <option>No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Visual (Agudeza Visual
                                                        Campo Visual
                                                        Forma
                                                        Color
                                                        Tamaño)</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Funcional</option>
                                                            <option>Semifuncional</option>
                                                            <option>No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Auditiva  (Fuerte
                                                        Leve
                                                        Vibrantes)</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Funcional</option>
                                                            <option>Semifuncional</option>
                                                            <option>No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Esquema
                                                        Corporal (Propio cuerpo
                                                        Partes finas
                                                        Partes gruesas)</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Funcional</option>
                                                            <option>Semifuncional</option>
                                                            <option>No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES FUNCIONALES DE MOVIMIENTO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Patron</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Destreza manual</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motricidad Gruesa</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motricidad Fina</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Movimientos bilaterales</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coordinación</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Velocidad para el desempeño</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>seleccion</option>
                                                                <option>Funcional</option>
                                                                <option>Semifuncional</option>
                                                                <option>No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
