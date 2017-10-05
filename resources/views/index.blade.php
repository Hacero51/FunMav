<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->


    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    {!! Html::style('plugins/bootstrap/css/bootstrap.css') !!}
    {!! Html::style('') !!}

    <!-- Waves Effect Css -->
    {!! Html::style('plugins/node-waves/waves.css') !!}


    <!-- Animation Css -->
    {!! Html::style('plugins/animate-css/animate.css') !!}

    <!-- Morris Chart Css-->
    {!! Html::style('plugins/morrisjs/morris.css') !!}

    <!-- Custom Css -->
    {!! Html::style('css/style.css') !!}

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    {!! Html::style('css/themes/all-themes.css') !!}

    <!-- Bootstrap Material Datetime Picker Css -->
    {!! Html::style('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}

    <!-- Wait Me Css -->
    {!! Html::style('plugins/waitme/waitMe.css') !!}

    <!-- Bootstrap Select Css -->
    {!! Html::style('plugins/bootstrap-select/css/bootstrap-select.css') !!}

    <!-- Colorpicker Css -->
    {!! Html::style('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') !!}

    <!-- Dropzone Css -->
    {!! Html::style('plugins/dropzone/dropzone.css') !!}

    <!-- Multi Select Css -->
    {!! Html::style('plugins/multi-select/css/multi-select.css') !!}

    <!-- Bootstrap Spinner Css -->
    {!! Html::style('plugins/jquery-spinner/css/bootstrap-spinner.css') !!}

    <!-- Bootstrap Tagsinput Css -->
    {!! Html::style('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}

    <!-- noUISlider Css -->
    {!! Html::style('plugins/nouislider/nouislider.min.css') !!}

    <!-- Sweet Alert Css -->
    {!! Html::style('plugins/sweetalert/sweetalert.css') !!}

</head>

<body class="theme-red">

<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">FUNDACION MANANTIAL DE VIDA</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">NAVEGACION</li>
                <li class="active">
                    <a href="#">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
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
                            <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-examples.html">Form Examples</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="pages/forms/editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">FUNMAV</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

@yield('content')

<!-- Jquery Core Js -->
{!! Html::script('plugins/jquery/jquery.min.js') !!}
{!! Html::script('') !!}

<!-- Bootstrap Core Js -->
{!! Html::script('plugins/bootstrap/js/bootstrap.js') !!}

<!-- Select Plugin Js -->
{!! Html::script('plugins/bootstrap-select/js/bootstrap-select.js') !!}

<!-- Slimscroll Plugin Js -->
{!! Html::script('plugins/jquery-slimscroll/jquery.slimscroll.js') !!}

<!-- Waves Effect Plugin Js -->
{!! Html::script('plugins/node-waves/waves.js') !!}

<!-- Autosize Plugin Js -->
{!! Html::script('plugins/autosize/autosize.js') !!}

<!-- Moment Plugin Js -->
{!! Html::script('plugins/momentjs/moment.js') !!}

<!-- Jquery CountTo Plugin Js -->
{!! Html::script('plugins/jquery-countto/jquery.countTo.js') !!}

<!-- Morris Plugin Js -->
{!! Html::script('plugins/raphael/raphael.min.js') !!}
{!! Html::script('plugins/morrisjs/morris.js') !!}

<!-- ChartJs -->
{!! Html::script('plugins/chartjs/Chart.bundle.js') !!}

<!-- Flot Charts Plugin Js -->
{!! Html::script('plugins/flot-charts/jquery.flot.js') !!}
{!! Html::script('plugins/flot-charts/jquery.flot.resize.js') !!}
{!! Html::script('plugins/flot-charts/jquery.flot.pie.js') !!}
{!! Html::script('plugins/flot-charts/jquery.flot.categories.js') !!}
{!! Html::script('plugins/flot-charts/jquery.flot.time.js') !!}

<!-- Jquery Validation Plugin Css -->
{!! Html::script('plugins/jquery-validation/jquery.validate.js') !!}

<!-- JQuery Steps Plugin Js -->
{!! Html::script('plugins/jquery-steps/jquery.steps.js') !!}

<!-- Sweet Alert Plugin Js -->
{!! Html::script('plugins/sweetalert/sweetalert.min.js') !!}

!-- Bootstrap Colorpicker Js -->
{!! Html::script('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') !!}

<!-- Dropzone Plugin Js -->
{!! Html::script('plugins/dropzone/dropzone.js') !!}

<!-- Input Mask Plugin Js -->
{!! Html::script('plugins/jquery-inputmask/jquery.inputmask.bundle.js') !!}

<!-- Multi Select Plugin Js -->
{!! Html::script('plugins/multi-select/js/jquery.multi-select.js') !!}

<!-- Jquery Spinner Plugin Js -->
{!! Html::script('plugins/jquery-spinner/js/jquery.spinner.js') !!}

<!-- Bootstrap Tags Input Plugin Js -->
{!! Html::script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}

<!-- noUISlider Plugin Js -->
{!! Html::script('plugins/nouislider/nouislider.js') !!}

<!-- Waves Effect Plugin Js -->
{!! Html::script('plugins/node-waves/waves.js') !!}

<!-- Sparkline Chart Plugin Js -->
{!! Html::script('plugins/jquery-sparkline/jquery.sparkline.js') !!}

<!-- Bootstrap Material Datetime Picker Plugin Js -->
{!! Html::script('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') !!}

<!-- Custom Js -->
{!! Html::script('js/admin.js') !!}
{!! Html::script('js/pages/index.js') !!}
{!! Html::script('js/pages/forms/basic-form-elements.js') !!}
{!! Html::script('js/pages/forms/advanced-form-elements.js') !!}


<!-- Demo Js -->
{!! Html::script('js/demo.js') !!}
</body>

</html>