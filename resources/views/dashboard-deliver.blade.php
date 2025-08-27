<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/dashmedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- <script src="/assets/js/active-class.js"></script> -->
    <!-- <script src="dashboard.js"></script> -->
    <title>Bistro Bliss dashboard-deliver</title>
</head>
<body>
    <div class="container">
        @include("sidebar")
        
        <div class="main">
            <div class="header">
                <div class="description">
                    <span class="span1">Deliver Dashboard</span>
                    <span class="span2">Here you can consulte your deliveries and check customers locations. <br> You ca feed we back for any suggestions you have.</span>
                </div>
                <div class="options">
                    <a href="#"><span class="bi bi-arrow-repeat"></span>Refresh</a>
                    <a href="#"><span class="bi bi-download"></span>Import</a>
                    <a href="#"><span class="bi bi-folder-fill"></span>Generate Report</a>
                </div>
            </div>
            @yield("content")
            <!-- <div id="delidetails">
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="6">DELIVERIES DETAILS</th>
                            </tr>
                        </thead>
                        <tr>
                            <th>id deliveries</th>
                            <th>customer name</th>
                            <th>food name</th>
                            <th>address</th>
                            <th>delivery time</th>
                            <th>Statut</th>
                        </tr>
                        <tr>
                            <td>240825001</td>
                            <td>Bryanne <i>Simo</i></td>
                            <td>Aschù</td>
                            <td>Bonamoussadi</td>
                            <td>14:45</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>240825002</td>
                            <td>Daniella <i>Kamguem</i></td>
                            <td>Ndollè</td>
                            <td>Akwa</td>
                            <td>15:00</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>240825003</td>
                            <td>Honour <i>Behionne</i></td>
                            <td>Erù</td>
                            <td>Bonaberi</td>
                            <td>15:25</td>
                            <td>On going</td>
                        </tr>
                        <tr>
                            <td>240825004</td>
                            <td>Raissa <i>Sahanne</i></td>
                            <td>Ockock</td>
                            <td>Makeppe</td>
                            <td>15:50</td>
                            <td>Unstarted</td>
                        </tr>
                        <tr>
                            <td>240825005</td>
                            <td>Ahmed <i>Amadou</i></td>
                            <td>Fried rice and chicken</td>
                            <td>Deido</td>
                            <td>16:20</td>
                            <td>Unstarted</td>
                        </tr>
                    </table>
                </div>
            </div> -->
        </div>
    </div>
</body>
</html>