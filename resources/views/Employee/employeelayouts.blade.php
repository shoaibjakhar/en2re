<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Employee - Community Score</title>
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
    <!-- =======================================================-->   <!-- =======================================================-->
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>

    <script type="text/javascript">
        var viz;

        function initViz() {
            var containerDiv = document.getElementById("vizContainer"),
            url = "http://public.tableau.com/views/BeatlesAnalysis/BeatlesAnalysis?:embed=y&:showVizHome=no&:embed_code_version=3&:tabs=no&:toolbar=yes&:animate_transition=yes&:display_static_image=yes&:display_spinner=no&:display_overlay=yes&:display_count=yes&:loadOrderID=0",
            options = {
                "Academic Year": "",
                hideTabs: true,
                onFirstInteractive: function () {
                    listenToMarksSelection();
                }
            };

            viz = new tableau.Viz(containerDiv, url, options);
        }

        function listenToMarksSelection() {
            viz.addEventListener(tableau.TableauEventName.MARKS_SELECTION, onMarksSelection);
        }

        function onMarksSelection(marksEvent) {
            return marksEvent.getMarksAsync().then(reportSelectedMarks);
        }

        function reportSelectedMarks(marks) {
            var html = "";

            for (var markIndex = 0; markIndex < marks.length; markIndex++) {
                var pairs = marks[markIndex].getPairs();
                html += "<b>Mark " + markIndex + ":</b><ul>";

                for (var pairIndex = 0; pairIndex < pairs.length; pairIndex++) {
                    var pair = pairs[pairIndex];
                    html += "<li><b>Field Name:</b> " + pair.fieldName;
                    html += "<br/><b>Value:</b> " + pair.formattedValue + "</li>";
                }

                html += "</ul>";
            }

            var infoDiv = document.getElementById('markDetails');
            infoDiv.innerHTML = html;
        }
    </script>
    <style>
        @media (min-width: 992px){
            .col-lg-3 {
                width: 23%!important;
                margin: 10px;
            }
        }
        .card-title{
            height: 50px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .card-text{
            /*height: 400px;*/
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
        }
        #company_name{
            padding-top: 10px!important;
        }
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
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
        data-target=".navbar-collapse">
        <span></span>
    </a>

    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a href="#{{route('employee.overview')}}" class="logo me-auto login" id="company_name">
            @php
            $company_name = App\Models\Customer::where('id',auth()->user()->customer_id)->first();

            @endphp
            {{$company_name['name']??''}}
        </a>
    </div>
    <!-- END LOGO -->

</header><!-- End Header -->
<div class="clearfix" style="    background: #222a35;"> </div>
<section class="section-pad section_pad_bt s992_pad">
    <div class="page-sidebar-wrapper ">

        <div class="page-sidebar navbar-collapse collapse">

            <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 6px">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

            <!-- END SIDEBAR TOGGLER BUTTON -->
            <li class="nav-item secondary_bg font-white">
             <a href="#" class="nav-link nav-toggle" style="background: white;">
                <img src="{{ asset('./assets/img/preview.svg') }}" class="highlight4" id="profile" height="45" width="24" alt="">
                <span class="title head" style="font-size:large;color:black;"><b>{{auth()->user()->name}}</b></span>
            </a>
            <ul class="sub-menu ">
                <li class="nav-item  ">
                    <a href="{{ url('employee/changepassword') }}" class="nav-link ">
                        <span class="title">Change Password</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/usersetting') }}" class="nav-link ">
                        <span class="title">User Setting</span>
                    </a>
                </li>
            </ul>

        </li>
     <!--    <li class="nav-item secondary_bg font-white">
            <a href="#" class="nav-link nav-toggle">
                <img src="{{ asset('./assets/img/dashboard.svg') }}" class="highlight4" height="24" width="24" alt="">
                <span class="title head">Dashboard</span>
            </a>
        </li> -->
        <li class="nav-item secondary_bg font-white">
            <a href="{{ url('employee/Overview') }}" class="nav-link nav-toggle">
                <img src="{{ asset('./assets/img/overview.svg') }}" class="highlight4" height="24" width="24" alt="">
                <span class="title head">Overview</span>
            </a>
        </li>
        <li class="nav-item  secondary_bg font-white">
            <a href="#" class="nav-link nav-toggle">
                <img src="{{ asset('./assets/img/portfolio.svg') }}" class="highlight4" height="24" width="24" alt="">
                <span class="title head">Portfolio
                </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu new1">
                <li class="nav-item  ">
                    <a href="{{ url('employee/emission') }}" class="nav-link ">
                        <span class="title">Emissions
                        </span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/transections') }}" class="nav-link ">
                        <span class="title">Transactions </span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/interest') }}" class="nav-link ">
                        <span class="title">Interest </span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item  secondary_bg font-white">
            <a href="#" class="nav-link nav-toggle">
                <img src="{{ asset('./assets/img/impact.svg') }}" class="highlight4" height="24" width="24" alt="">
                <span class="title head">Impact
                </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu new1">
                <li class="nav-item  ">
                    <a href="{{ url('employee/impact') }}" class="nav-link ">
                        <span class="title">Impact
                        </span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/project') }}" class="nav-link ">
                        <span class="title">Projects
                        </span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/roadmap') }}" class="nav-link ">
                        <span class="title">Roadmap </span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item  secondary_bg font-white">
            <a href="#" class="nav-link nav-toggle">
                <img src="{{ asset('./assets/img/community.svg') }}" class="highlight4" height="24" width="24" alt="">
                <span class="title head">Community
                </span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu new1">
                <li class="nav-item  ">
                    <a href="{{ url('employee/blog') }}" class="nav-link ">
                        <span class="title">Blog/ Feed
                        </span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/ranking') }}" class="nav-link ">
                        <span class="title">Ranking </span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('employee/score') }}" class="nav-link ">
                        <span class="title">Community Score </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item secondary_bg font-white">
            <a href="{{ route('employee.faq') }}" class="nav-link nav-toggle">
                <img src="{{ asset('./assets/img/faq.svg') }}" class="highlight4" height="24" width="24" alt="">
                <span class="title head">FAQ</span>
            </a>
        </li>
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
<!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
</div>
            <!-- <div class=" page-content-wrapper">

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
                                                                  <strong> Community Score</strong> 
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-40 ">
                                                            <div class="Center score-bd pd-8">
                                                                <h4 class="">
                                                                  <strong> Zeitleiste</strong> 
                                                                </h4>
                                                            </div>
                                                         <div class="image mt-4">
                                                             <img src="assets/img/score.png" class="img-res"  alt="" srcset="">
                                                         </div>
                                                        </div>
                                                        <div class="col-md-6 mb-40 d-flex justify-content-center">
                                                            <div class="col-lg-8 col-md-12">
                                                                <div class="Center score-bd pos-token pd-8">
                                                                    <h5 class="">
                                                                      <b>Symbole:</b> 
                                                                    </h5>
                                                                    <ul>
                                                                        <li class="mt-2"><img src="assets/img/token.png" width="50" alt=""> <span>Kauf Token gruen</span></li>
                                                                        <li class="mt-2"><img src="assets/img/token2.png" width="50" alt=""> <span>VerkaufToken rot</span></li>
                                                                        <li class="mt-2"> <img src="assets/img/images.png" width="50" alt=""> <span>Freund werben   </span></li>
                                                                       
                                                                    </ul>
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
            </div> -->
        </section>
    </main><!-- End #main -->
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                Copyright &copy <strong><span></span></strong>. All Rights Reserved <span class="ml-10">| Designed
                    by <a href="#" class=" "><b>employee</b> </a></span>
                </div>

            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>

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