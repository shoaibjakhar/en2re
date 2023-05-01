<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Employee - Reset Password</title>
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
  
  </head>

<body>
  <main id="main" class="hero2 pb-50">


 <section class="" data-aos="fade" data-aos-delay="100">
    
    <div class="row d-fl ">
     
      <div class="col-md-4" style="margin: 10px; margin-top:50px;">
          <div class="portlet light bordered " id="form_wizard_1">
              <div class="portlet-body form">
                  <form class="form-horizontal" action="#" id="submit_form" method="POST">
                      <div class="form-wizard">
                        <div class="tab-pane  active" id="tab1">
                           
                            <div class="form-group">
                                <br>
                                <div class="col-md-12 d-flex justify-content-center ">
                                  <img src="{{ asset('assets//img/password.png') }}" width="100" alt="">
                                  </div>
      
                                  
                                    <div class="col-md-12">
                                      <label class="control-label left ">Password
                                      </label>
                                        <input type="text" placeholder="Password" class="form-control " name="username1" />
                                        <span> <i class="bi bi-person-fill ic-pos1 gold"></i></span>
                                    </div>
                                    <div class="col-md-12">
                                      <label class="control-label left ">Confirm Password
                                      </label>
                                        <input type="text" placeholder="Password" class="form-control " name="username1" />
                                        <span> <i class="bi bi-person-fill ic-pos1 gold"></i></span>
                                    </div>
                                    <div class="col-md-12 mt-5 mb-20 Center">
                                      <a type="button" href="index.html" class=" btn-gold">Set Password</a>
      
                                    </div>
                                   <div  class="col-md-12 mt-4">
                                    <p class="power"><b>Powered by:</b> <img src="{{ asset('./assets/img/logo-6.png') }}" class="filter-bg" width="100" alt=""></p>
                                   </div>
                                   
                                </div>
                                
   
                               
                                   
                              
                            </div>
                            
                        </div>
                      </div>
                  </form>
              </div>
          </div>
    </div>
    </section>

  </main><!-- End #main -->



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
    </script>

</body>

</html>