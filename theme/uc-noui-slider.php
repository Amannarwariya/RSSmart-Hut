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
    <link rel="stylesheet" href="./plugins/nouislider/nouislider.min.css">
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
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Basic slider</h4>
                                <div id="basic-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Stepping and snapping to values</h4>
                                <div class="stepping-slider">
                                    <div id="slider-step"></div>
                                    <span class="example-val" id="slider-step-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider margin</h4>
                                <div class="margin-slider">
                                    <div id="slider-margin"></div>
                                    <span class="example-val" id="slider-margin-value-min"></span>
                                    <span class="example-val" id="slider-margin-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider limit</h4>
                                <div class="limit-slider">
                                    <div id="slider-limit"></div>
                                    <span class="example-val" id="slider-limit-value-min"></span>
                                    <span class="example-val" id="slider-limit-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider padding</h4>
                                <div class="padding-slider">
                                    <div id="slider-padding"></div>
                                    <span class="example-val" id="slider-padding-value-min"></span>
                                    <span class="example-val" id="slider-padding-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider tooltip</h4>
                                <div class="slider-tooltip py-2">
                                    <div id="slider-tooltips"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Drag)</h4>
                                <div class="slider-behaviour">
                                    <div id="behaviour"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Tap)</h4>
                                <div class="slider-behaviour">
                                    <div id="tap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Fixed dragging)</h4>
                                <div class="slider-behaviour">
                                    <div id="drag-fixed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (Snap)</h4>
                                <div class="snap">
                                    <div id="snap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (hover)</h4>
                                <div class="snap">
                                    <div id="hover"></div>
                                    <span class="example-val mt-4 d-inline-block" id="hover-val"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (unconstrained)</h4>
                                <div class="unconstrained">
                                    <div id="unconstrained" class="mb-4"></div>
                                    <span class="example-val" id="unconstrained-values"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider behaviour (combined)</h4>
                                <div class="combined">
                                    <div id="combined"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range (left to right)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range (right to left)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range-rtl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range Vertical (top to bottom)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range-vertical" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider range Vertical (bottom to top)</h4>
                                <div class="slider-range py-5">
                                    <div id="pips-range-vertical-rtl" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pip positions</h4>
                                <div class="pip-position py-5">
                                    <div id="pips-positions"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pip position stepped</h4>
                                <div class="pip-position py-5">
                                    <div id="pips-positions-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips count</h4>
                                <div class="pips-count py-5">
                                    <div id="pips-count"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips count (stepped)</h4>
                                <div class="pips-count py-5">
                                    <div id="pips-count-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips value</h4>
                                <div class="pips-values py-5">
                                    <div id="pips-values"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Pips values (stepped)</h4>
                                <div class="pips-values py-5">
                                    <div id="pips-values-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Disabling a slider</h4>
                                <div class="slider-disabled py-5">
                                    <div id="disable1" class="mb-4"></div>
                                    <label>
                                        <input class="ml-2" type="checkbox" id="checkbox1">
                                        Disable slider
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Disabling a slider</h4>
                                <div class="slider-disabled py-5">
                                    <div id="disable2"></div>
                                    <label>
                                        <input type="checkbox" id="checkbox2">
                                        Disable handle 1
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" id="checkbox3">
                                        Disable handle 2
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Updating a slider</h4>
                                <div class="slider-update py-5">
                                    <div id="slider-update"></div>
                                    <span class="example-val d-block my-4" id="slider-update-value"></span>
                                    <button class="update-button btn btn-info" id="update-1">Set range [20, 50]</button>
                                    <button class="update-button btn btn-info" id="update-2">Set range [10, 40]</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider step</h4>
                                <div class="slider-step py-5">
                                    <div id="pips-steps"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Keyboard slider</h4>
                                <div id="keyboardslider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Working with dates</h4>
                                <div class="date-slider">
                                    <div id="slider-date"></div>
                                    <div class="example-val my-4" id="event-start"></div>
                                    <div class="example-val" id="event-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Using php5 input elements</h4>
                                <div class="input-element">
                                    <div id="php5"></div>
                                    <div class="inputs mt-4">
                                        <select class="form-control my-4" id="input-select"></select>
                                        <input class="form-control" type="number" min="-20" max="40" step="1" id="input-number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Non linear slider</h4>
                                <div class="nonlinear-slider">
                                    <div id="nonlinear"></div>
                                    <div class="outputs mt-4">
                                        <span class="example-val" id="lower-value"></span>
                                        <span class="example-val" id="upper-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Snapping between steps</h4>
                                <div class="nonlinear-slider">
                                    <div id="slider-snap"></div>
                                    <span class="example-val" id="slider-snap-value-lower"></span>
                                    <span class="example-val" id="slider-snap-value-upper"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Stepping in non-linear sliders</h4>
                                <div class="nonlinear-slider">
                                    <div id="slider-non-linear-step"></div>
                                    <span class="example-val" id="slider-non-linear-step-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Number formatting</h4>
                                <div class="format-slider">
                                    <div id="slider-format"></div>
                                    <input class="mt-4 form-control" title="Formatted number" id="input-format">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Getting and setting slider values</h4>
                                <div class="getnset-slider">
                                    <div id="slider"></div>
                                    <div class="logger mt-4">
                                        <button class="btn btn-info" id="write-button">Set to 20</button>
                                        <button class="btn btn-info" id="read-button">Read slider value</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Locking sliders together</h4>
                                <div class="locked-slider">
                                    <div class="slider" id="slider1"></div>
                                    <span class="example-val" id="slider1-span"></span>
                                    <div class="slider mt-4" id="slider2"></div>
                                    <span class="example-val" id="slider2-span"></span>
                                    <button class="btn btn-info mt-4" id="lockbutton" style="float: right; margin: 20px 0 0;">Lock</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="extra-padding py-5">
                                    <h4 class="card-title mb-5">Moving the slider by clicking pips</h4>
                                    <div class="slider-pips">
                                        <div class="slider" id="slider-pips"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Colored Connect Elements</h4>
                                <div class="slider-color">
                                    <div class="slider" id="slider-color"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Changing the slider by key press</h4>
                                <div class="keypress-slider pt-5">
                                    <div id="keypress"></div>
                                    <input type="text" class="form-control my-4" id="input-with-keypress-1">
                                    <input type="text" class="form-control" id="input-with-keypress-0">                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Skipping steps</h4>
                                <div class="skipping-slider">
                                    <div id="skipstep"></div>
                                    <span class="example-val" id="skip-value-lower"></span>
                                    <span class="example-val" id="skip-value-upper"></span>               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Using the slider with huge numbers</h4>
                                <div class="hugenumber-slider">
                                    <div id="slider-huge"></div>
                                    <span class="example-val" id="huge-value"></span>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Creating a toggle</h4>
                                <div class="toggle-slider">
                                    <div id="slider-toggle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="extra-padding py-5">
                                    <h4 class="card-title mb-5">Soft limits</h4>
                                    <div class="softlimit-slider">
                                        <div id="soft"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider direction</h4>
                                <div class="slider-direction">
                                    <div id="slider-direction"></div>
                                    <div class="example-val" id="field"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="extra-padding py-5">
                                    <h4 class="card-title mb-5">Color picker</h4>
                                    <div class="colorpicker-slider">
                                        <div class="sliders" id="red"></div>
                                        <div class="sliders" id="green"></div>
                                        <div class="sliders" id="blue"></div>
                            
                                        <div id="result"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Slider orientation</h4>
                                <div class="slider-orientation">
                                    <div id="slider-vertical" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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

    <script src="./plugins/nouislider/nouislider.min.js"></script>
    <script src="./plugins/wnumb/wNumb.js"></script>
    <script src="./js/plugins-init/nouislider-init.js"></script>

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