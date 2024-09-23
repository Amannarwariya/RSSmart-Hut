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
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
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
                    <li class="mega-menu mega-menu-sm">
                        <a href="">
                            <span class="nav-text"> Dashboard </span>
                        </a>

                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="./allroom.php">
                            <span class="nav-text"> Rooms</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="./allroom.php">All Rooms</a></li>
                            
                        </ul> -->
                    </li>
                    <!-- <li class="nav-label">Apps</li>     -->
                    <li>
                        <a href="./connected.php" aria-expanded="false">
                            <span class="nav-text">Connected Devices</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="./connected.php">See All Devices</a></li>

                        </ul> -->
                    </li>
                    <li>
                        <a href="./schedule.php">
                            <span class="nav-text">Schedule</span>
                        </a>

                    </li>
                    <li>
                        <a href="./supportive.php">
                            <span class="nav-text">Supportive Devices</span>
                        </a>
                    </li>
                    <!-- <li class="nav-label">UI Components</li> -->
                    <li>
                        <a href="./energyestimate.php" aria-expanded="false">
                            <span class="nav-text">Energy Estimate</span>
                        </a>

                    </li>
                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="ri-lock-fill"></i> <span class="nav-text">Security</span>
                        </a>
                    </li>
                    <li>
                        <a href="./setting.php">
                            <span class="nav-text">Setting</span>
                        </a>

                    </li>
                    <li>
                        <a href="app-profile.php">
                            <span class="nav-text">Profile</span>
                        </a>

                    </li>

                    <li>
                        <a href="widgets.php">
                            <span class="nav-text">Logout</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="nav-text">RESOURCES</span>
                        </a>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">SMART HUT Availale in Play
                                Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">ITM University</span>
                        </a>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Premium Subscription</span>
                        </a>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username"
                                                    name="val-username" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email"
                                                    placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password"
                                                    name="val-password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm
                                                Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confirm-password"
                                                    name="val-confirm-password" placeholder="..and confirm it!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Suggestions
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions"
                                                    name="val-suggestions" rows="5"
                                                    placeholder="What would you like to see?"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Best Skill <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="php">php</option>
                                                    <option value="css">CSS</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="angular">Angular</option>
                                                    <option value="angular">React</option>
                                                    <option value="vuejs">Vue.js</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="php">PHP</option>
                                                    <option value="asp">ASP.NET</option>
                                                    <option value="python">Python</option>
                                                    <option value="mysql">MySQL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Currency <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-currency"
                                                    name="val-currency" placeholder="$21.60">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Website <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website"
                                                    name="val-website" placeholder="http://example.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (US) <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus"
                                                    name="val-phoneus" placeholder="212-999-0000">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Digits <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits"
                                                    name="val-digits" placeholder="5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Number <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number"
                                                    name="val-number" placeholder="5.0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5] <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-range" name="val-range"
                                                    placeholder="4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a href="#">Terms &amp;
                                                    Conditions</a> <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox"
                                                    for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms"
                                                        name="val-terms" value="1"> <span
                                                        class="css-control-indicator"></span> I agree to the
                                                    terms</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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

    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>

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