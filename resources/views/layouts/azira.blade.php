<!doctype html>
<html lang="en" dir="ltr">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

    <!-- Title -->
    <title> Medibhai -  Premium dashboard ui bootstrap rwd admin html5 template </title>

    <!--- Favicon --->
    <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>

    <!-- Bootstrap css -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" id="style"/>

    <!--- Icons css --->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!--- Style css --->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">

    <!--- Animations css --->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

    <!-- Switcher css -->
    <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/switcher/demo.css')}}"/>


    <!--- JQuery min js --->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>


</head>

<body class="main-body app sidebar-mini ltr">

@include('layouts/includes/azira-switcher')

<!-- Loader -->
<div id="global-loader">
    <img src="{{asset('assets/img/loaders/loader-4.svg')}}"  class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- page -->
<div class="page custom-index">

    @include('layouts/includes/header')

    @include('layouts/includes/sidebar')

    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div>
                    <h4 class="content-title mb-2">Hi, welcome back!</h4>

                </div>
                <div class="d-flex my-auto">
                    <div class=" d-flex right-page">
                        <div class="d-flex justify-content-center me-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <?php $segments = ''; ?>
                                    @foreach(Request::segments() as $segment)
                                        <?php $segments .= '/'.$segment; ?>
                                        <li class="breadcrumb-item">
                                            <a href="{{ $segments }}">{{ucfirst($segment)}}</a>
                                        </li>
                                    @endforeach
                                </ol>
{{--                                <ol class="breadcrumb">--}}
{{--                                    <li class="breadcrumb-item"><a   href="javascript:void(0);">Pages</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page"> Empty</li>--}}
{{--                                </ol>--}}
                            </nav>
                        </div>
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <div class="">--}}
{{--									<span class="d-block">--}}
{{--										<span class="label">PROFIT</span>--}}
{{--									</span>--}}
{{--                                <span class="value">--}}
{{--										$34,000--}}
{{--									</span>--}}
{{--                            </div>--}}
{{--                            <div class="ms-3 mt-2">--}}
{{--                                <span class="sparkline_bar31"></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row -->
            <div class="row">
                @yield('page')
            </div>
            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->

    <!--Sidebar-right-->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0">
            <div class="panel-body tabs-menu-body p-0 border-0">
                <ul class="Date-time">
                    <li class="time">
                        <h1 class="animated ">21:00</h1>
                        <p class="animated ">Sat,October 1st 2029</p>
                    </li>
                </ul>
                <div class="card-body latest-tasks">
                    <h3 class="events-title"><span>Events For Week </span></h3>
                    <div class="event">
                        <div class="Day">Monday 20 Jan</div>
                        <a   href="javascript:void(0);">No Events Today</a>
                    </div>
                    <div class="event">
                        <div class="Day">Tuesday 21 Jan</div>
                        <a   href="javascript:void(0);">No Events Today</a>
                    </div>
                    <div class="event">
                        <div class="Day">Wednessday 22 Jan</div>
                        <div class="tasks">
                            <div class=" task-line primary">
                                <a   href="javascript:void(0);" class="label">
                                    XML Import &amp; Export
                                </a>
                                <div class="time">
                                    12:00 PM
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="check-box">
                                    <label class="ckbox"><input checked="" type="checkbox"><span></span></label>
                                </label>
                            </div>
                        </div>
                        <div class="tasks">
                            <div class="task-line danger">
                                <a   href="javascript:void(0);" class="label">
                                    Connect API to pages
                                </a>
                                <div class="time">
                                    08:00 AM
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="check-box">
                                    <label class="ckbox"><input type="checkbox"><span></span></label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="Day">Thursday 23 Jan</div>
                        <div class="tasks">
                            <div class="task-line success">
                                <a   href="javascript:void(0);" class="label">
                                    Create Wireframes
                                </a>
                                <div class="time">
                                    06:20 PM
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="check-box">
                                    <label class="ckbox"><input type="checkbox"><span></span></label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="Day">Friday 24 Jan</div>
                        <div class="tasks">
                            <div class="task-line warning">
                                <a   href="javascript:void(0);" class="label">
                                    Test new features in tablets
                                </a>
                                <div class="time">
                                    02: 00 PM
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="check-box">
                                    <label class="ckbox"><input type="checkbox"><span></span></label>
                                </label>
                            </div>
                        </div>
                        <div class="tasks">
                            <div class="task-line teal">
                                <a   href="javascript:void(0);" class="label">
                                    Design Evommerce
                                </a>
                                <div class="time">
                                    10: 00 PM
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="check-box">
                                    <label class="ckbox"><input type="checkbox"><span></span></label>
                                </label>
                            </div>
                        </div>
                        <div class="tasks mb-0">
                            <div class="task-line purple">
                                <a   href="javascript:void(0);" class="label">
                                    Fix Validation Issues
                                </a>
                                <div class="time">
                                    12: 00 AM
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="check-box">
                                    <label class="ckbox"><input type="checkbox"><span></span></label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex pagination wd-100p">
                        <a   href="javascript:void(0);">Previous</a>
                        <a   href="javascript:void(0);" class="ms-auto">Next</a>
                    </div>
                </div>
                <div class="card-body border-top border-bottom">
                    <div class="row">
                        <div class="col-4 text-center">
                            <a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
                            <div>Inbox</div>
                        </div>
                        <div class="col-4 text-center">
                            <a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
                            <div>Settings</div>
                        </div>
                        <div class="col-4 text-center">
                            <a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
                            <div>Sign out</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Sidebar-right-->

    <!-- Footer opened -->
    <div class="main-footer ht-45">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span> Copyright © 2022 <a   href="javascript:void(0);" class="text-primary">Medibhai</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a   href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
        </div>
    </div>
    <!-- Footer closed -->
</div>
<!-- page closed -->

<!--- Back-to-top --->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<!--- Datepicker js --->
<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<!--- Bootstrap Bundle js --->
<script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>


<!-- DATA TABLE JS-->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

<script src="{{asset('assets/js/table-data.js')}}"></script>

<!--- Ionicons js --->
<script src="{{asset('assets/plugins/ionicons/ionicons.js')}}"></script>

<!--- Chart bundle min js --->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>


<!--- Moment js --->
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

<!--- Internal Jquery.steps js --->
<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>


<!--- JQuery sparkline js --->
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('assets/js/chart.flot.sampledata.js')}}"></script>

<!--- P-scroll js --->
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

<!--- Switcher js --->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

<!--- Eva-icons js --->
<script src="{{asset('assets/js/eva-icons.min.js')}}"></script>

<!--- Internal Sampledata js --->
<script src="{{asset('assets/js/chart.flot.sampledata.js')}}"></script>

<!--- Sidebar js --->
<script src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>

<!--- sticky js --->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!--- Right-sidebar js --->
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>

<!-- Morris js -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris.js/morris.min.js')}}"></script>

<!--- Internal Form-wizard js --->
<script src="{{asset('assets/js/form-wizard.js')}}"></script>

<!--- Index js --->
<script src="{{asset('assets/js/script.js')}}"></script>

<!--- Index js --->
{{--<script src="{{asset('assets/js/index.js')}}"></script>--}}

<!--themecolor js-->
<script src="{{asset('assets/js/themecolor.js')}}"></script>

<!--swither-styles js-->
<script src="{{asset('assets/js/swither-styles.js')}}"></script>

<!--- Custom js --->
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>
