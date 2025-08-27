<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/delivery.css">
    <link rel="stylesheet" href="/assets/css/dashmedia.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- <link rel="stylesheet" href="/assets/fa-icons/css/all.css">
    <script src="/assets/fa-icons/js/all.js"></script>
    <link rel="stylesheet" href="/assets/booticons/font/bootstrap-icons.css">
    <script src="/assets/bootstrap-5.3.5-dist/js/bootstrap.js"></script>
    <script src="/assets/bootstrap-5.3.5-dist/js/jquery-3.7.1.js"></script> -->
    <!-- <script src="dashboard.js"></script> -->
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="toggle-bars">
            <input type="checkbox" name="test" id="menu_mobile" checked>
            <a href="" id="atest">
                <label for="menu_mobile" id="labeltest">
                    <i class="fa fa-bars"></i>
                </label>
            </a>
            <div class="aside" id="listemobile">
                <div class="logo">
                    <img src="assets/images/icons/japanese-food (1).png" alt="logo">
                    Bistro Bliss
                </div>
                <div class="user">
                    <div class="mid">
                        <div class="initiales"><span>KO</span></div>
                        <div class="infos">
                            <span class="big">Kalihl O'NIEL</span>
                            <span class="small">Food Deliver</span>
                        </div>
                    </div>
                </div>
                <div class="links">
                    <div class="main-links">
                        <span class="title">Main Commands</span>
                        <a href="#dashboard" class="active"><span class="bi bi-menu-up"></span>Dashboard</a>
                        <a href="#delidetails"><span class="bi bi-car-front-fill"></span>Deliveries Details</a>
                        <a href="#"><span class="bi bi-geo-alt-fill"></span>City Map</a>
                        <a href="#"><span class="bi bi-folder-fill"></span>Report</a>
                    </div>
                    <div class="secondaries-links">
                        <span class="title">Quick Actions</span>
                        <a href="#"><span class="bi bi-bell-fill"></span>Notification</a>
                        <a href="#"><span class="bi bi-moon-fill"></span>Dark Mode</a>
                        <a href="#"><span class="bi bi-question-circle-fill"></span>Help / Services</a>
                    </div>
                    <div class="others">
                        <span class="title">Sign In Web-Site</span>
                        <a href="https://"><span class="bi bi-globe"></span>Bistro-Bliss-Site</a>
                        <a href="#"><span class="bi bi-box-arrow-right"></span>Log Out</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main">
            <div class="header">
                <div class="description">
                    <span class="span1">Deliver Dashboard</span>
                    <span class="span2">Here you can consulte your deliveries <br> and check customers locations.</span>
                </div>
                <div class="options">
                    <a href="#"><span class="bi bi-arrow-repeat"></span>Refresh</a>
                    <a href="#"><span class="bi bi-download"></span>Import</a>
                    <a href="#"><span class="bi bi-folder-fill"></span>Generate Report</a>
                </div>
            </div>
            <div id="dashboard">
                <div class="cards">
                    <div class="trio">
                        <div class="min-box">
                            <div class="title">
                                <span class="text">Monthly Deliveries</span>
                                <span class="icon"><i class="bi bi-bicycle"></i></span>
                            </div>
                            <div class="counter">
                                <span class="number">204</span>
                                <span class="unite">Del</span>
                            </div>
                        </div>
                        <div class="min-box">
                            <div class="title">
                                <span class="text">Daily Deliveries</span>
                                <span class="icon"><i class="bi bi-handbag-fill"></i></span>
                            </div>
                            <div class="counter">
                                <span class="number">12</span>
                                <span class="unite">Del</span>
                            </div>
                        </div>
                        <div class="min-box">
                            <div class="title">
                                <span class="text">Deliveries Rest</span>
                                <span class="icon"><i class="bi bi-boxes"></i></span>
                            </div>
                            <div class="counter">
                                <span class="number">9</span>
                                <span class="unite">Del</span>
                            </div>
                        </div>
                    </div>
                    <div class="trio">
                        <div class="min-box">
                            <div class="title">
                                <span class="text">Timer Tracker</span>
                                <span class="icon"><i class="bi bi-clock-fill"></i></span>
                            </div>
                            <div class="counter">
                                <span class="timer">00:00:00</span>
                            </div>
                        </div>
                        <div class="min-box">
                            <div class="title">
                                <span class="text">Delivered</span>
                                <span class="icon"><i class="bi bi-check-square-fill"></i></span>
                            </div>
                            <div class="counter">
                                <span class="number">3</span>
                                <span class="unite">Del</span>
                            </div>
                        </div>
                        <div class="min-box">
                            <div class="title">
                                <span class="text">Deliveries Speed</span>
                                <span class="icon"><i class="bi bi-speedometer"></i></span>
                            </div>
                            <div class="counter">
                                <span class="number">0.097</span>
                                <span class="unite">Del/min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
</body>
</html>