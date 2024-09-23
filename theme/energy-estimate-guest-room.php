<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>RSSmarthut</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .status {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
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
            <div class="nk-nav-scroll" style="overflow: scroll">
                <ul class="metismenu" id="menu" style="background-color: whitesmoke; border: 2px solid white;">
                    <li class="mega-menu mega-menu-sm">
                        <a href="">
                            <i class="ri-dashboard-2-fill"></i> <span class="nav-text"> Dashboard </span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="./allroom.php">
                            <i class="ri-door-closed-fill"></i> <span class="nav-text"> Rooms</span>
                        </a>
                    </li>
                    <li>
                        <a href="./connected.php" aria-expanded="false">
                            <i class="ri-wifi-line"></i> <span class="nav-text">Connected Devices</span>
                        </a>
                    </li>
                    <li>
                        <a href="./schedule.php">
                            <i class="ri-calendar-2-fill"></i> <span class="nav-text">Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="./supportive.php">
                            <i class="ri-lifebuoy-fill"></i> <span class="nav-text">Supportive Devices</span>
                        </a>
                    </li>
                    <li>
                        <a href="./energyestimate.php" aria-expanded="false">
                            <i class="ri-rfid-fill"></i> <span class="nav-text">Energy Estimate</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="ri-lock-fill"></i> <span class="nav-text">Security</span>
                        </a>
                    </li>
                    <li>
                        <a href="./setting.php">
                            <i class="ri-settings-3-line"></i> <span class="nav-text">Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-profile.php">
                            <i class="ri-user-fill"></i> <span class="nav-text">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">

                            <i class="ri-login-box-line"></i> <span class="nav-text">Logout</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="nav-text">RESOURCES</span>
                        </a>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i> <span class="nav-text">SMART HUT Availale in Play
                                Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i> <span class="nav-text">Premium Subscription</span>
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
            Main contant start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <!-- WebSocket Connection -->
                <div class="container">
                    <h2>WebSocket Connection Status</h2>
                    <div id="status" class="status">Connecting...</div>
                </div>
                <div class="container mt-2">

                    <center>
                        <h2>Electricity estimate Bar Chart</h2>
                        <hr>
                        <br>
                    </center>
                    <h3 style="color: #7571f9;">Energy use by light 1 in the unit</h3>
                    <canvas id="myBarChart"></canvas>
                    <!-- fatch data from sinric pro  -->
                    <h1>LED Bulb Energy Usage</h1>
                    <canvas id="energyUsageChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

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

        <!-- Chartjs -->
        <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="./plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="./plugins/d3v3/index.js"></script>
        <script src="./plugins/topojson/topojson.min.js"></script>
        <script src="./plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="./plugins/raphael/raphael.min.js"></script>
        <script src="./plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="./plugins/moment/moment.min.js"></script>
        <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="./plugins/chartist/js/chartist.min.js"></script>
        <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
        <!-- bar chart js -->
        <script>
            const ctx = document.getElementById("myBarChart").getContext("2d");

            const myBarChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                    datasets: [
                        {
                            label: "Unit",
                            data: [60, 50, 30, 40, 20, 60, 70],
                            backgroundColor: "rgba(75, 192, 192, 0.6)",
                            borderColor: "rgba(75, 192, 192, 1)",
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        </script>
        <!-- WebSocket Connection Status js -->
        <script>
            const WEBSOCKET_URL = 'wss://your.websocket.server'; // Replace with your WebSocket server URL
            const APP_KEY = '0c87d9d5-f516-4981-beab-730a476febf5'; // Replace with your app key
            const SECRET_KEY = '5975834c-18a7-45ba-b4f0-9323cd166b91-68c92767-cd85-4488-8a89-691fb831a070'; // Replace with your secret key

            let ws;

            // Establish WebSocket connection
            function connectWebSocket() {
                ws = new WebSocket(WEBSOCKET_URL);

                ws.onopen = () => {
                    document.getElementById('status').textContent = 'Connected!';
                    authenticate();
                };

                ws.onerror = (error) => {
                    console.error('WebSocket error:', error);
                    document.getElementById('status').textContent = 'Connection Error';
                };

                ws.onclose = () => {
                    document.getElementById('status').textContent = 'Disconnected. Reconnecting...';
                    setTimeout(connectWebSocket, 5000); // Attempt to reconnect after a delay
                };

                ws.onmessage = handleServerMessage;
            }

            // Authenticate with the WebSocket server
            function authenticate() {
                const authMessage = {
                    type: 'authorize',
                    payload: {
                        appKey: APP_KEY,
                        secretKey: SECRET_KEY
                    }
                };
                ws.send(JSON.stringify(authMessage));
            }

            // Handle messages from the WebSocket server
            function handleServerMessage(event) {
                const data = JSON.parse(event.data);

                if (data.type === 'authorized') {
                    document.getElementById('status').textContent = 'Authenticated!';
                } else if (data.type === 'error') {
                    document.getElementById('status').textContent = 'Authentication Failed';
                }
            }

            // Initialize the WebSocket connection when the page is ready
            document.addEventListener('DOMContentLoaded', connectWebSocket);
        </script>
        <!-- real data fatch from sinric pro  -->
        <script>
            // Function to fetch energy usage data from Sinric Pro
            async function fetchEnergyUsageFromSinric() {
                try {
                    // Fetch historical energy usage data for the LED bulb device
                    const response = await fetch('https://api.sinric.pro/data/your-led-bulb-device-id', {
                        headers: {
                            'Api-Key': 'your-api-key'
                        }
                    });
                    const data = await response.json();
                    return data;
                } catch (error) {
                    console.error('Error fetching energy usage data from Sinric Pro:', error);
                    return null;
                }
            }

            // Function to estimate energy usage for a day
            function estimateDailyEnergyUsage(energyData) {
                // Assume energyData is an array of hourly energy usage for a day
                // Sum up the energy usage for all hours
                const totalEnergyUsage = energyData.reduce((total, hourData) => total + hourData.energyUsage, 0);
                // Return the total energy usage for a day
                return totalEnergyUsage;
            }

            // Function to display energy usage bar graph
            async function displayEnergyUsageChart() {
                const energyUsageChartCanvas = document.getElementById('energyUsageChart');
                const energyUsageData = await fetchEnergyUsageFromSinric();
                if (energyUsageData) {
                    const dailyEnergyUsage = estimateDailyEnergyUsage(energyUsageData);
                    // Chart.js configuration
                    const chartConfig = {
                        type: 'bar',
                        data: {
                            labels: ['LED Bulb Energy Usage'],
                            datasets: [{
                                label: 'Estimated Energy Usage (kWh)',
                                data: [dailyEnergyUsage],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)'
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };
                    // Create chart
                    new Chart(energyUsageChartCanvas, chartConfig);
                } else {
                    // Display error message if unable to fetch data
                    energyUsageChartCanvas.innerphp = '<p>Error fetching energy usage data from Sinric Pro</p>';
                }
            }

            // Call the displayEnergyUsageChart function when the page loads
            window.onload = displayEnergyUsageChart;
        </script>

        <script src="./js/dashboard/dashboard-1.js"></script>

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