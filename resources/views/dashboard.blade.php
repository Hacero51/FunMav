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
    {!! Html::style('') !!}
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    {!! Html::style('') !!}
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

<!-- Bootstrap Material Datetime Picker Css -->
    {!! Html::style('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}

<!-- Wait Me Css -->
    {!! Html::style('plugins/waitme/waitMe.css') !!}

<!-- Bootstrap Select Css -->
    {!! Html::style('plugins/bootstrap-select/css/bootstrap-select.css') !!}

<!-- Custom Css -->
    {!! Html::style('css/style.css') !!}

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    {!! Html::style('css/themes/all-themes.css') !!}

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
    @yield('topbar')
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
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
    @yield('menu')
    <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
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
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->

</section>

<section class="content">
    @yield('contenido')
</section>

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