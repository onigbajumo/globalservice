<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Global Service Plug</title>

    <meta name="description" content="Global Service Plug">
    <meta name="author" content="Digipeng">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Global Service Plug">
    <meta property="og:site_name" content="GSP">
    <meta property="og:description" content="Global Service Plug">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href='{{asset("assets/media/global/favicon_global.png")}}'> 
    <link rel="icon" type="image/png" sizes="192x192" href='{{asset("assets/media/global/favicon_global.png")}}'> 
    <link rel="apple-touch-icon" sizes="180x180" href='{{asset("assets/media/global/favicon_global.png")}}'> 
    
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href='{{asset("assets/js/plugins/datatables-bs5/dataTables.bootstrap5.min.css")}}'> 
    <link rel="stylesheet" href='{{asset("assets/js/plugins/datatables-buttons-bs5/buttons.bootstrap5.min.css")}}'> 
    
    <link rel="stylesheet" href='{{asset("assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css")}}'> 
    <link rel="stylesheet" href='{{asset("assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}'> 
    <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/js/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="assets/js/plugins/flatpickr/flatpickr.min.css">

    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href='{{asset("assets/css/oneui.min.css")}}'> 


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   
    <!-- {{asset("assets/js/oneui.app.min.js")}} -->
    <!-- END Stylesheets -->
  </head>
  <body>

  <div id="page-container" class="page-header-dark main-content-boxed">
      
     
      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold fs-5 tracking-wider  me-3" href="{{ url('/user' )}}"> <img src='{{asset("assets/media/global/header_logo.png")}}' width="30%" alt=""></a> 

            
            <!-- END Logo -->

          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">

            <!-- Open Search Section (visible on smaller screens) -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            <form class="d-none d-md-inline-block" action="" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2" />
                <span class="input-group-text bg-body border-0">
                  <i class="fa fa-fw fa-search"></i>
                </span>
              </div>
            </form>
            <!-- END Search Form -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded" src='{{asset("assets/media/avatars/avatar10.jpg")}}' alt="Header Avatar" style="width: 21px;" /> 
                <span class="d-none d-sm-inline-block ms-1 text-capitalize">{{ Auth::user()->name }}</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src='{{asset("assets/media/avatars/avatar10.jpg")}}' alt="">
                  <p class="mt-2 mb-0 fw-medium text-capitalize">{{ Auth::user()->name }}</p>
                  <!-- <p class="mt-2 mb-0 fw-medium text-capitalize">{{ Auth::user()->id }}</p> -->
                </div>
               
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="">
                    <span class="fs-sm fw-medium">Support</span>
                  </a>
                  <div class="">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <span class="fs-sm fw-medium">Log Out</span>

                  </a>
                  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input" />
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary-lighter">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Navigation -->
        <div class="bg-primary-darker">
          <div class="content py-3">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none">
              <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
              <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
              <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">

                <li class="nav-main-item">
                  <a class="nav-main-link active" href="{{ url('/user' )}}">
                    <i class="nav-main-link-icon si si-compass"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ url('/passport/create' )}}">
                    <i class="nav-main-link-icon far fa-id-card"></i>
                    <span class="nav-main-link-name">Passport Application</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ url('/visa/create')}}">
                    <i class="nav-main-link-icon far fa-address-card"></i>
                    <span class="nav-main-link-name">Visa Application</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="{{ url('/nin/create' )}}">
                    <i class="nav-main-link-icon fab fa-wpforms"></i>
                    <span class="nav-main-link-name">NIN Application</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="">
                    <i class="nav-main-link-icon si si-credit-card"></i>
                    <span class="nav-main-link-name">Payment</span>
                  </a>
                </li>
       
               
              </ul>
            </div>
            <!-- END Main Navigation -->
          </div>
        </div>
        <!-- END Navigation -->
      <!-- END Header -->


        

        <!-- Page Content -->
        
            <div class="content">
               @yield('content')
            </div>

        
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Design <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="#" target="_blank">Digipeng</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="#" target="_blank">Global Plug Service</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <script src='{{asset("assets/js/oneui.app.min.js")}}'></script>

     <!-- jQuery (required for jQuery Validation plugin) -->
     <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chart.js/Chart.min.js"></script>

    <script src='{{asset("assets/js/plugins/datatables/jquery.dataTables.min.js")}}'></script>'{{asset("assets/js/pages/be_pages_dashboard.min.js")}}'
    <script src='{{asset("assets/js/plugins/datatables-bs5/dataTables.bootstrap5.min.js")}}'></script>
    <script src='{{asset("assets/js/plugins/datatables-buttons/dataTables.buttons.min.js")}}'></script>
    <script src='{{asset("assets/js/plugins/datatables-buttons/buttons.print.min.js")}}'></script>
    <script src='{{asset("assets/js/plugins/datatables-buttons/buttons.html5.min.js")}}'></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.flash.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.colVis.min.js"></script>
    
    <script src='{{asset("assets/js/plugins/flatpickr/flatpickr.min.js")}}'></script>
    <script src='{{asset("assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js")}}'></script>

    <!-- Page JS Code -->
    <script src='{{asset("assets/js/pages/be_pages_dashboard.min.js")}}'></script>


    <script>One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider', 'jq-colorpicker']);</script>
  </body>
</html>
