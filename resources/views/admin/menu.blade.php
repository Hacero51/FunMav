<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="{{url('/')}}">
                <i class="material-icons">home</i>
                <span>Inicio</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_identity</i>
                <span>Usuarios</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{route('usuario.index')}}">Ver Usuarios</a>
                </li>
                <li>
                    <a href="{{route('usuario.create')}}">Crear Usuarios</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Forms</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{!!URL::to('/hv')!!}">Hoja de Vida</a>
                </li>
                <li>
                    <a href="{!!URL::to('/acudiente')!!}">Datos Acudiente</a>
                </li>
                <li>
                    <a href="{!!URL::to('/diario')!!}">Diario terapeutico</a>
                </li>
                <li>
                    <a href="{!!URL::to('/hc')!!}">Historia clinica</a>
                </li>
                <li>
                    <a href="{!!URL::to('/sproceso')!!}">Seguimiento de proceso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/cproceso')!!}">Cierre de proceso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/rpsicologica')!!}">Remision Psicologica</a>
                </li>
                <li>
                    <a href="{!!URL::to('/hingreso')!!}">Hoja de Ingreso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/eingreso')!!}">Epicrisis de Ingreso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/eegreso')!!}">Epicrisis de egreso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/eto')!!}">Evaluacion terapia ocupacional</a>
                </li>
                <li>
                    <a href="{!!URL::to('/encuesta')!!}">Encuesta terapia ocupacional</a>
                </li>
                <li>
                    <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                </li>
            </ul>
        </li>

    </ul>
</div>