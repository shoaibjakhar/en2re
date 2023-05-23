<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Global CSS Files -->
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- END -->
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/page1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/_start/simple.css') }}" rel="stylesheet" type="text/css" />
    <!-- =======================================================-->
    <style>
 
    </style>
</head>

<body>
    <main id="main" class=" ">
        <!-- ======= Header ======= -->

        <header id="header" class="primary_bg page-header navbar navbar-fixed-top ">
            <div class=" sidebar-toggler filter-bg">
                <span class="menu">
                    <svg viewBox="0 0 24 24" color="#333" width="30" height="26" class="mt-2">
                        <path fill="currentColor"
                        d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z">
                    </path>
                </svg>
            </span>

        </div>

        <!-- BEGIN TOP NAVIGATION MENU -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>

        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('admin/dashboard')}}" class="logo me-auto login"><img src="{{ asset('assets/img/EN2RE_LOGO.png') }}" alt="" class="img-fluid filter-bg"></a>


        </div>
        <!-- END LOGO -->

    </header>
    <!-- End Header -->
    <div class="clearfix" style="    background: #222a35;"> </div>
    <section class="section-pad section_pad_bt s992_pad">
        <div class="page-sidebar-wrapper ">

            <div class="page-sidebar navbar-collapse collapse">

                <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 6px">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="nav-item secondary_bg font-white">
                        <a href="#" class="nav-link nav-toggle" style="background: white;">
                            <img src="{{ asset('./assets/img/preview.svg') }}" class="highlight4" id="profile" height="45" width="24" alt="">
                            <span class="title head" style="font-size:large;color:black;"><b>{{auth()->user()->name}}</b></span>
                        </a>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <!-- <li class="nav-item secondary_bg font-white">
                        <a href="{{ url('admin/dashboard') }}" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/dashboard.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Dashboard</span>
                        </a>
                    </li> -->
                    <li class="nav-item secondary_bg font-white">
                        <a href="#" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/preview.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Account</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu ">
                            <li class="nav-item  ">
                                <a href="{{ url('admin/onboarding') }}" class="nav-link ">
                                    <span class="title">Onbording</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  secondary_bg font-white">
                        <a href="#" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/portfolio.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Decarbonization Service</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu new1">
                            <li class="nav-item  ">
                                <a href="{{ url('admin/ideation') }}" class="nav-link ">
                                    <span class="title">Ideation
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  secondary_bg font-white">
                        <a href="#" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/impact.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Workspace</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu new1">
                            <li class="nav-item  ">
                                <a href="{{ url('admin/emission') }}" class="nav-link ">
                                    <span class="title">Emission
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <!--     <li class="nav-item  secondary_bg font-white">
                        <a href="#" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/impact.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Project</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu new1">
                            <li class="nav-item  ">
                                <a href="{{ url('admin/project') }}" class="nav-link ">
                                    <span class="title">Project
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item  secondary_bg font-white">
                        <a href="{{ route('admin.transections') }}" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/community.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Transections</span>
                        </a>
                    </li>
                    <li class="nav-item  secondary_bg font-white">
                        <a href="{{ url('admin/ideation') }}" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/community.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Data Extraction</span>
                        </a>
                    </li>
                  <!--   <li class="nav-item  secondary_bg font-white">
                        <a href="{{ url('admin/blog') }}" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/community.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Blog/Feed</span>
                        </a>
                    </li> -->
                 
                    <!--   <li class="nav-item  secondary_bg font-white">
                        <a href="#" class="nav-link nav-toggle">
                            <img src="{{ asset('./assets/img/impact.svg') }}" class="highlight4" height="24" width="24" alt="">
                            <span class="title head">Settings</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu new1">
                            <li class="nav-item  ">
                                <a href="{{ url('admin/benefit') }}" class="nav-link ">
                                    <span class="title">Benefit</span>
                                </a>
                            </li>
                              <li class="nav-item  ">
                                <a href="{{ url('admin/authorization') }}" class="nav-link ">
                                    <span class="title">Authorization</span>
                                </a>
                            </li>
                              <li class="nav-item  ">
                                <a href="{{ url('admin/benefit') }}" class="nav-link ">
                                    <span class="title">Benefit</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item  secondary_bg font-white" >
                        <a class="dropdown-item text-light bi-box-arrow-right" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
            <!-- END SIDEBAR MENU -->

        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- start input forms -->
    {{--  <div class=" page-content-wrapper">

        <div class="page-content hero2">
            <div class="portlet light bordered " id="form_wizard_1">
                <div class="portlet-body form">
                    <div class="row">

                        <div class="col-md-12 mx-0">
                            <div>
                                <div class="form-group ">

                                    <div class="left">
                                        <div class="wrapper center-block">
                                            <div class="left">

                                                <div class="col-md-12  justify-space-between">
                                                    <div class="col-md-12 mb-40 box-bd">
                                                        <div class="portlet-body">
                                                            <h2>Onbording Input</h2>
                                                            <div class="col-md-6">
                                                                <label class="control-label left ">Customer Name </label>
                                                                <input type="text" value="" class="form-control" name="" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="control-label left ">Customer Address </label>
                                                                <input type="text" value="" class="form-control" name="" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="control-label left ">Customer Contact </label>
                                                                <input type="text" value="" class="form-control" name="" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="control-label left ">Contract or letter-of-intend</label>
                                                                <input name="userfile" class="form-control" type="file" accept="application/pdf, application/vnd.ms-excel" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="control-label left ">Customer Questionnaire</label>
                                                                <input name="userfile" class="form-control" type="file" accept="application/pdf, application/vnd.ms-excel" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="control-label left ">Partner Questionnaire</label>
                                                                <input name="userfile" class="form-control" type="file" accept="application/pdf, application/vnd.ms-excel" />
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <label for="Region">Region Classification </label><br>
                                                                <select name="Region" id="" class="form-control">
                                                                    <option value="EMEA">EMEA</option>
                                                                    <option value="AMERICAS">AMERICAS</option>
                                                                    <option value="ASEAN">ASEAN</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <label>Partner Classification</label><br><br>
                                                                <input type="radio" name="selection" id="Yes" /><label for="Yes">Yes</label><input type="radio" name="selection" id="No" /><label for="No">No</label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- end input forms-->
    {{--  <div class=" page-content-wrapper">
        <!-- start database table-->
        <div class="page-content hero2">
            <div class="portlet light bordered " id="form_wizard_1">
                <div class="portlet-body form">
                    <div class="row">

                        <div class="col-md-12 mx-0">
                            <div>
                                <div class="form-group ">

                                    <div class="left">
                                        <div class="wrapper center-block">
                                            <div class="left">
                                                <div class="col-md-12 mb-40 box-bd">

                                                    <div class="col-md-8">
                                                        <h4 class="">
                                                            <strong>Onbording View</strong>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-40 box-bd">
                                                    <div class="portlet-body filter-none">
                                                        <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                            <div class="table Add">
                                                                <div class="table-scrollable">
                                                                    <table class="table table-hover  order-column dataTable" role="grid" aria-describedby="sample_5_info">
                                                                        <thead>
                                                                            <tr class="secondary_bg font-white">

                                                                                <th style="width: 88px;">
                                                                                    Customer name
                                                                                </th>
                                                                                <th style="width: 88px;"> Customer Address
                                                                                </th>

                                                                                <th style="width: 59px;"> Customer Point of Contact
                                                                                </th>
                                                                                <th style="width: 59px;"> Contract or letter-of-intend
                                                                                </th>
                                                                                <th style="width: 59px;">Customer questionnaire
                                                                                </th>
                                                                                <th style="width: 59px;"> Partner questionnaire
                                                                                </th>
                                                                                <th style="width: 59px;">
                                                                                    Action
                                                                                </th>


                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                                <td class="ft-16"><b> 3</b>
                                                                                </td>
                                                                                <td class="ft-16">10.000.000 €</td>
                                                                                <td class="ft-16">3.500.000 €</td>
                                                                                <td class="ft-16">175.000 €
                                                                                </td>
                                                                                <td class="ft-16">
                                                                                35%</td>
                                                                                <td class="ft-16">175 days</td>
                                                                                <td class="ft-16">
                                                                                    <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                                    <thead>
                                                                        <tr role="row " class="secondary_bg font-white">

                                                                            <th style="width: 88px;">
                                                                                Customer name
                                                                            </th>
                                                                            <th style="width: 88px;"> Customer Address
                                                                            </th>

                                                                            <th style="width: 59px;"> Customer Point of Contact
                                                                            </th>
                                                                            <th style="width: 59px;"> Contract or letter-of-intend
                                                                            </th>
                                                                            <th style="width: 59px;">Customer questionnaire
                                                                            </th>
                                                                            <th style="width: 59px;"> Partner questionnaire
                                                                            </th>
                                                                            <th style="width: 59px;">
                                                                                Action
                                                                            </th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr class="gradeX odd" role="row">

                                                                            <td class="ft-16"><b> 1</b>
                                                                            </td>
                                                                            <td class="ft-16">1.000.000 €</td>

                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">Refinancing of 100kW PV Rooftop</td>
                                                                            <td class="ft-16">
                                                                                <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a>
                                                                                <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 20px;color: black; margin-top: 20px;"></span></a>
                                                                            </td>

                                                                        </tr>
                                                                        <tr class="gradeX odd" role="row">

                                                                            <td class="ft-16"><b> 2</b>
                                                                            </td>
                                                                            <td class="ft-16">4.000.000 €</td>

                                                                            <td class="ft-16">
                                                                            2/11/2023</td>
                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">Financing of 300kW PV Rooftop </td>
                                                                            <td class="ft-16">
                                                                                <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a>
                                                                                <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 20px;color: black; margin-top: 20px;"></span></a>
                                                                            </td>

                                                                        </tr>
                                                                        <tr class="gradeX odd" role="row">

                                                                            <td class="ft-16"><b> 3</b>
                                                                            </td>
                                                                            <td class="ft-16">5.000.000 €</td>

                                                                            <td class="ft-16">
                                                                            1/9/2023</td>
                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">
                                                                            1/12/2023</td>
                                                                            <td class="ft-16">....</td>

                                                                            <td class="ft-16">
                                                                                <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="font-size: 20px; color: black;"></i></a>
                                                                                <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 20px;color: black; margin-top: 20px;"></span></a>
                                                                            </td>
                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

    @yield('content')
    <!-- end database table-->
</section>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('ssets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>




<script src="{{ asset('assets/pages/scripts/form-wizard.min.js') }}" type="text/javascript"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main-load.js') }}"></script>
<script src="{{ asset('assets/js/progress.js') }}"></script>
<script src="{{ asset('assets/global/plugins/components-select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script>
    $('.panel-collapse').on('show.bs.collapse', function() {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function() {
        $(this).siblings('.panel-heading').removeClass('active');
    });
</script>


<script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>

<script>
    $('.nav-item').on('click', function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.sub-menu').first().stop(true, true).delay(200).slideUp()
    });

    $.fn.dataTable.ext.errMode = 'none';
    var table = $('#sample_5').DataTable();
    table.order( [ [0, 'asc'] ] ).draw();
</script>
</body>

</html>