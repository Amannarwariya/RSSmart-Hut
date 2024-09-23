<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="./plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="./plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="./plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="./plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="position: fixed;">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <p style="color: white; margin: auto;"><img src="images/logo rssmart.png"
                                style=" width: 100px; margin-left: 25px; margin-top: -13px;" alt=""></p>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
                    Nav header end
                ***********************************-->
        
        <!--**********************************
                    Header start
                ***********************************-->
        <div class="header">
            <div class="header-content clearfix">
        
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
        
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix" style="display: flex;">
        
                        <button class="btn btn-primary mt-3" style="height: 45px;" onclick="searchPage()">Search</button>
                        <input type="text" class="form-control mt-3 ml-3" style="width: 50%;" id="searchInput"
                            placeholder="Search page">
        
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                <span>English</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.php"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span>
                                                <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.php"><i class="icon-lock"></i> <span>Lock
                                                    Screen</span></a>
                                        </li>
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                        <!-- <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a>
                                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar" style="position: fixed; max-height: fit-content; overflow: scroll;">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.php">Home 1</a></li>
                            <!-- <li><a href="./index-2.php">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./layout-blank.php">Blank</a></li>
                            <li><a href="./layout-one-column.php">One Column</a></li>
                            <li><a href="./layout-two-column.php">Two column</a></li>
                            <li><a href="./layout-compact-nav.php">Compact Nav</a></li>
                            <li><a href="./layout-vertical.php">Vertical</a></li>
                            <li><a href="./layout-horizontal.php">Horizontal</a></li>
                            <li><a href="./layout-boxed.php">Boxed</a></li>
                            <li><a href="./layout-wide.php">Wide</a></li>
                            
                            
                            <li><a href="./layout-fixed-header.php">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.php">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./email-inbox.php">Inbox</a></li>
                            <li><a href="./email-read.php">Read</a></li>
                            <li><a href="./email-compose.php">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.php">Profile</a></li>
                            <li><a href="./app-calender.php">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.php">Flot</a></li>
                            <li><a href="./chart-morris.php">Morris</a></li>
                            <li><a href="./chart-chartjs.php">Chartjs</a></li>
                            <li><a href="./chart-chartist.php">Chartist</a></li>
                            <li><a href="./chart-sparkline.php">Sparkline</a></li>
                            <li><a href="./chart-peity.php">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Accordion</a></li>
                            <li><a href="./ui-alert.php">Alert</a></li>
                            <li><a href="./ui-badge.php">Badge</a></li>
                            <li><a href="./ui-button.php">Button</a></li>
                            <li><a href="./ui-button-group.php">Button Group</a></li>
                            <li><a href="./ui-cards.php">Cards</a></li>
                            <li><a href="./ui-carousel.php">Carousel</a></li>
                            <li><a href="./ui-dropdown.php">Dropdown</a></li>
                            <li><a href="./ui-list-group.php">List Group</a></li>
                            <li><a href="./ui-media-object.php">Media Object</a></li>
                            <li><a href="./ui-modal.php">Modal</a></li>
                            <li><a href="./ui-pagination.php">Pagination</a></li>
                            <li><a href="./ui-popover.php">Popover</a></li>
                            <li><a href="./ui-progressbar.php">Progressbar</a></li>
                            <li><a href="./ui-tab.php">Tab</a></li>
                            <li><a href="./ui-typography.php">Typography</a></li>
                        <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="./uc-nestedable.php">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.php">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.php">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.php">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic.php">Basic Form</a></li>
                            <li><a href="./form-validation.php">Form Validation</a></li>
                            <li><a href="./form-step.php">Step Form</a></li>
                            <li><a href="./form-editor.php">Editor</a></li>
                            <li><a href="./form-picker.php">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.php" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.php" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.php">Login</a></li>
                            <li><a href="./page-register.php">Register</a></li>
                            <li><a href="./page-lock.php">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.php">Error 404</a></li>
                                    <li><a href="./page-error-403.php">Error 403</a></li>
                                    <li><a href="./page-error-400.php">Error 400</a></li>
                                    <li><a href="./page-error-500.php">Error 500</a></li>
                                    <li><a href="./page-error-503.php">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Material Date picker</h4>
                                <h6 class="card-subtitle">Use <code>.bootstrapMaterialDatePicker</code> to create it.</h6>
                                <div class="row form-material">
                                    <div class="col-md-6">
                                        <label class="m-t-20">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                        <label class="m-t-40">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="m-t-20">Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                        <label class="m-t-40">Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clock Picker</h4>
                                <h6 class="card-subtitle">Use <code>.clockpicker</code> to create it.</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="m-t-20">Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                        <label class="m-t-40">Auto close Clock Picker</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="m-t-20">Now time</label>
                                        <div class="input-group">
                                            <input class="form-control" id="single-input" value="" placeholder="Now"> <span class="input-group-btn"><button type="button" id="check-minutes" class="btn waves-effect waves-light btn-success">Check the minutes</button></span>
                                        </div>
                                        <label class="m-t-40">Left Placement</label>
                                        <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 m-b-30">
                                        <div class="example">
                                            <h5 class="box-title">Simple mode</h5>
                                            <p class="text-muted m-b-20">just add class <code>.colorpicker</code> to create it.</p>
                                            <input type="text" class="colorpicker form-control" value="#7ab2fa">
                                        </div>
                                    </div>
                                    <div class="col-md-4 m-b-30">
                                        <div class="example">
                                            <h5 class="box-title">Complex mode</h5>
                                            <p class="text-muted m-b-20">just add class <code>.complex-colorpicker</code> to create it.</p>
                                            <input type="text" class="complex-colorpicker form-control" value="#fa7a7a">
                                        </div>
                                    </div>
                                    <div class="col-md-4 m-b-30">
                                        <div class="example">
                                            <h5 class="box-title">Gradiant mode</h5>
                                            <p class="text-muted m-b-20">just add class <code>.gradient-colorpicker-colorpicker</code> to create it.</p>
                                            <input type="text" class="gradient-colorpicker form-control" value="#bee0ab">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Date Range picker</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date Range Pick</h5>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date Range With Time</h5>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Limit Selectable Dates</h5>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Default Datedpicker</h5>
                                            <p class="text-muted m-b-20">just add class <code>.mydatepicker</code> to create it.</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Autoclose Datedpicker</h5>
                                            <p class="text-muted m-b-20">just add class <code>.complex-colorpicker</code> to create it.</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date Range picker</h5>
                                            <p class="text-muted m-b-20">just add id <code>#date-range</code> to create it.</p>
                                            <div class="input-daterange input-group" id="date-range">
                                                <input type="text" class="form-control" name="start"> <span class="input-group-addon bg-info b-0 text-white">to</span>
                                                <input type="text" class="form-control" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <h5 class="box-title m-t-30">Datepicker Inline</h5>
                                            <p class="text-muted m-b-20">You also can set the datepicker to be inline and flat.</p>
                                            <div>
                                                <div id="datepicker-inline"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <footer class="footer ">
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <i class="fab fa-slack"></i>
              <span class="logo_name">RSSmart Hut</span>
            </div>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">About</li>
              <li><a href="#">About</a></li>
              <li><a href="#">Service</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Team</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Quick Links</li>
              <li><a href="#"> career</a></li>
              <li><a href="#"> support</a></li>
              <li><a href="#"> Privacy policy</a></li>
              <li><a href="#"> License</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Account</li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">My account</a></li>
              <li><a href="#">Prefrences</a></li>
              <li><a href="#">Purchase</a></li>
            </ul>
            
            <ul class="box input-box">
              <li class="link_name">Subscribe</li>
              <li><input type="text" placeholder="Enter your email" /></li>
              <li><input type="button" value="Subscribe" /></li>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text"
              >Copyright © 2024 <a href="#">RSS</a>Smart Hut
              </span
            >
            <span class="policy_terms">
              <a href="#">Privacy policy</a>
              <a href="#">Terms & condition</a>
            </span>
          </div>
        </div>
      </footer>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/moment/moment.js"></script>
    <script src="./plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="./plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="./plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="./plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="./plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="./js/plugins-init/form-pickers-init.js"></script>

    <script>
        function searchPage() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const pageMap = {
                'index': 'index.php',
                'allroom': 'allroom.php',
                'calender': 'app-calender.php',
                'profile': 'app-profile.php',
                'bed room appliance': 'bedroomappliance.php',
                'bed room schedule': 'bedroomschedule.php',
                'blank': 'blank.php',
                'cctv camera': 'cctv-camera.php',
                'chart chartist': 'chart-chartist.php',
                'chart chartjs': 'chart-chartjs.php',
                'chart flot': 'chart-flot.php',
                'chart morris': 'chart-morris.php',
                'chart-peity': 'chart-peity.php',
                'chart-sparkline': 'chart-sparkline.php',
                'connected': 'connected.php',
                'dineroomappliance': 'dineroomappliance.php',
                'dineroomschedule': 'dineroomschedule.php',
                'email-compose': 'email-compose.php',
                'email-inbox': 'email-inbox.php',
                'email-read': 'email-read.php',
                'energyestimate': 'energyestimate.php',
                'energy-estimate-dining-room': 'energy-estimate-dining-room.php',
                'energy-estimate-guest-room': 'energy-estimate-guest-room.php',
                'energy-estimate-hall': 'energy-estimate-hall.php',
                'energy-estimate-home': 'energy-estimate-home.php',
                'energy-estimate-kitchen': 'energy-estimate-kitchen.php',
                'energy-estimate-study-room': 'energy-estimate-study-room.php',
                'form-basic': 'form-basic.php',
                'form-editor': 'form-editor.php',
                'form-picker': 'form-picker.php',
                'form-step': 'form-step.php',
                'form-validation': 'form-validation.php',
                'guestroomappliance': 'guestroomappliance.php',
                'guestroomschedule': 'guestroomschedule.php',
                'hallappliances': 'hallappliances.php',
                'hallschedule': 'hallschedule.php',
                'inhome': 'inhome.php',
                'kitchenappliance': 'kitchenappliance.php',
                'kitchenshedule': 'kitchenshedule.php',
                'layout-blank': 'layout-blank.php',
                'layout-boxed': 'layout-boxed.php',
                'layout-compact-nav': 'layout-compact-nav.php',
                'layout-dark': 'layout-dark.php',
                'layout-fixed-header': 'layout-fixed-header.php',
                'layout-fixed-sidebar': 'layout-fixed-sidebar.php',
                'layout-horizontal': 'layout-horizontal.php',
                'layout-light': 'layout-light.php',
                'layout-one-column': 'layout-one-column.php',
                'layout-two-column': 'layout-two-column.php',
                'layout-vertical': 'layout-vertical.php',
                'layout-wide': 'layout-wide.php',
                'livingroomappliance': 'livingroomappliance.php',
                'livingroomschedule': 'livingroomschedule.php',
                'login': 'login.php',
                'logout': 'logout.php',
                'offdevices': 'offdevices.php',
                'ondevices': 'ondevices.php',
                'page-lock': 'page-lock.php',
                'page-login': 'page-login.php',
                'page-register': 'page-register.php',
                'schedule': 'schedule.php',
                'searchbar': 'searchbar.php',
                'setting': 'setting.php',
                'storeroomappliance': 'storeroomappliance.php',
                'storeroomschedule': 'storeroomschedule.php',
                'studyroomappliance': 'studyroomappliance.php',
                'studyroomschedule': 'studyroomschedule.php',
                'supportive': 'supportive.php',
                'table-basic': 'table-basic.php',
                'table-datatable': 'table-datatable.php',
                'totaldevices': 'totaldevices.php',
                'uc-nestedable': 'uc-nestedable.php',
                'uc-noui-slider': 'uc-noui-slider.php',
                'uc-sweetalert': 'uc-sweetalert.php',
                'uc-toastr': 'uc-toastr.php',
                'ui-accordion': 'ui-accordion.php',
                'ui-alert': 'ui-alert.php',
                'ui-badge': 'ui-badge.php',
                'ui-button': 'ui-button.php',
                'ui-button-group': 'ui-button-group.php',
                'ui-cards': 'ui-cards.php',
                'ui-carousel': 'ui-carousel.php',
                'ui-dropdown': 'ui-dropdown.php',
                'ui-list-group': 'ui-list-group.php',
                'ui-media-object': 'ui-media-object.php',
                'ui-modal': 'ui-modal.php',
                'ui-pagination': 'ui-pagination.php',
                'ui-popover': 'ui-popover.php',
                'ui-progressbar': 'ui-progressbar.php',
                'ui-tab': 'ui-tab.php',
                'ui-typography': 'ui-typography.php',


            };

            if (pageMap[input]) {
                window.location.href = pageMap[input];
            } else {
                alert('Page not found. Please try again.');
            }
        }
    </script>

</body>

</php>