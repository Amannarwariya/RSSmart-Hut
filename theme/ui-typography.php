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
                        <img src="images/logo rssmart.png" style=" width: 100px; margin-left: 25px; margin-top: -13px;"
                            alt="">
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
                        <!-- <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                                    class="mdi mdi-magnify"></i></span>
                        </div> -->
                        <!-- <form action="#" method="get" style="display: flex;">
                            <input name="search" value="" type="search" class="form-control"
                                placeholder="Search Dashboard"><span><button type="submit"
                                    class="btn btn-primary mt-1 ml-3">Search</button></span>
                        </form> -->
                        <input type="text" class="form-control" id="searchInput" placeholder="Search for page name...">
                        <button class="btn btn-primary ml-3" onclick="searchPage()">Search</button>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">

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
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.php"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.php"><i class="icon-envelope-open"></i>
                                                <span>Inbox</span>
                                                <div class="badge gradient-3 badge-pill badge-primary">3</div>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.php"><i class="icon-lock"></i> <span>Lock
                                                    Screen</span></a>
                                        </li>
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Typography</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use tags <code>h1 to h6</code> for get desire
                                                heading.</h6>
                                            <h1>h1. Bootstrap heading</h1>
                                            <h2>h2. Bootstrap heading</h2>
                                            <h3>h3. Bootstrap heading</h3>
                                            <h4>h4. Bootstrap heading</h4>
                                            <h5>h5. Bootstrap heading</h5>
                                            <h6>h6. Bootstrap heading</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Heading with subtitle</h4>
                                        <h6 class="card-subtitle">Use tags <code>h1 to h6</code> for get desire heading.
                                        </h6>
                                        <div class="card-content">
                                            <h1>Heading 1 <small>Sub-heading</small></h1>
                                            <h2>Heading 2 <small>Sub-heading</small></h2>
                                            <h3>Heading 3 <small>Sub-heading</small></h3>
                                            <h4>Heading 4 <small>Sub-heading</small></h4>
                                            <h5>Heading 5 <small>Sub-heading</small></h5>
                                            <h6>Heading 6 <small>Sub-heading</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-5">
                                        <h4 class="card-title">Paragraph with justify</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use tags <code>text-justify</code> for get desire
                                                paragraph.</h6>
                                            <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras
                                                mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu
                                                vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi.
                                                At nos hinc posthac,
                                                sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                                                diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <h4 class="card-title">Alignment text</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use tags
                                                <code>text-left, text-center, text-right</code> for get desire text.
                                            </h6>
                                            <p class="text-left">Left aligned text on all viewport sizes.</p>
                                            <p class="text-center">Center aligned text on all viewport sizes.</p>
                                            <p class="text-right">Right aligned text on all viewport sizes.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">View port text</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use tags
                                                <code>text-sm-left, text-md-left, text-lg-left, text-xl-left</code> for
                                                get desire text.</h6>
                                            <p class="text-sm-left">Left aligned text on viewports sized SM (small) or
                                                wider.</p>
                                            <p class="text-md-left">Left aligned text on viewports sized MD (medium) or
                                                wider.</p>
                                            <p class="text-lg-left">Left aligned text on viewports sized LG (large) or
                                                wider.</p>
                                            <p class="text-xl-left">Left aligned text on viewports sized XL
                                                (extra-large) or wider.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Font weight and italics</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use tags
                                                <code>font-weight-bold, font-weight-normal, font-weight-italic</code>
                                                for get desire text.</h6>
                                            <p class="font-weight-bold">Bold text.</p>
                                            <p class="font-weight-normal">Normal weight text.</p>
                                            <p class="font-italic">Italic text.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Text colors</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use tags below class for get desire text.</h6>
                                            <p class="text-muted">This is an example of muted text. Add class
                                                <code>text-muted</code>
                                            </p>
                                            <p class="text-primary">This is an example of primary text. Add class
                                                <code>text-primary</code>
                                            </p>
                                            <p class="text-success">This is an example of success text. Add class
                                                <code>text-success</code>
                                            </p>
                                            <p class="text-info">This is an example of info text. Add class
                                                <code>text-info</code>
                                            </p>
                                            <p class="text-warning">This is an example of warning text. Add class
                                                <code>text-warning</code>
                                            </p>
                                            <p class="text-danger">This is an example of danger text. Add class
                                                <code>text-danger</code>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Address</h4>
                                        <div class="card-content">
                                            <h6 class="card-subtitle">Use <code>address</code> for get desire address.
                                            </h6>
                                            <address><strong>Twitter, Inc.</strong><br>795 Folsom Ave, Suite 600<br>San
                                                Francisco, CA 94107<br><abbr title="Phone">P:</abbr>(123) 456-7890
                                            </address>
                                            <address><strong>George Belly</strong><br><a
                                                    href="mailto:#">first.last@example.com</a></address>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Blockquotes</h4>
                                        <h6 class="card-subtitle">Use <code>blockquote</code> for get desire address.
                                        </h6>
                                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                            posuere erat a ante.</blockquote>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p><small>- Someone famous in <cite
                                                    title="Source Title">Source Title</cite></small>
                                        </blockquote>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Ol Listing</h4>
                                        <h6 class="card-subtitle">Use tags <code>ol > li</code>for get desire ol list.
                                        </h6>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Ul Listing</h4>
                                        <h6 class="card-subtitle">Use tags <code>ul > li</code>for get desire ol list.
                                        </h6>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Description Text</h4>
                                        <h6 class="card-subtitle">Use tags <code>dl > dt</code>for get desire ol list.
                                        </h6>
                                        <dl>
                                            <dt>Standard Description List</dt>
                                            <dd>Description Text</dd>
                                            <dt>Description List Title</dt>
                                            <dd>Description List Text</dd>
                                        </dl>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Fancy Listing 1</h4>
                                        <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire
                                            ol list.</h6>
                                        <ul class="list-icons">
                                            <li><i class="ti-angle-right"></i> Lorem ipsum dolor sit amet</li>
                                            <li><i class="ti-angle-right"></i> Consectetur adipiscing elit</li>
                                            <li><i class="ti-angle-right"></i> Integer molestie lorem at massa</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Fancy Listing with href</h4>
                                        <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire
                                            ol list.</h6>
                                        <ul class="list-icons">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i> Lorem
                                                    ipsum dolor sit amet</a>
                                            </li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i>
                                                    Consectetur adipiscing elit</a>
                                            </li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-info"></i>
                                                    Integer molestie lorem at massa</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Fancy Listing with href</h4>
                                        <h6 class="card-subtitle">Use class <code>list-icons</code>to ul for get desire
                                            ol list.</h6>
                                        <ul class="list-icons">
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i> Lorem
                                                    ipsum dolor sit amet</a>
                                            </li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i>
                                                    Consectetur adipiscing elit</a>
                                            </li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i> Integer
                                                    molestie lorem at massa</a>
                                            </li>
                                        </ul>
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
                    <span class="copyright_text">Copyright © 2024 <a href="#">RSS</a>Smart Hut
                    </span>
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