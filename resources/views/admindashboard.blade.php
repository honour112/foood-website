<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Bliss - Front Desk Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800&family=Rufina:wght@400;700&family=Racing+Sans+One:wght@400&family=Radio+Canada:wght@300;400;500;600;700&family=Sansation:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Remixicon CDN for icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>



    <div class="dashboard-layout">
        <!-- Hamburger icon for mobile sidebar toggle -->
        <div class="sideicon" id="sidebarToggle" tabindex="0" aria-label="Open sidebar" role="button">
            <i class="fas fa-angle-right"></i>
        </div>
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <!-- Logo Section -->
            <div class="logo-section">

                <div class="logo-img">
                    <img src="assets/images/icons/japanese-food (1).png" alt="">
                </div>
                <div class="logo-text">Bistro Bliss</div>

            </div>

            <!-- User Profile -->
            <div class="user-profile">
                <div class="user-avatar">SR</div>
                <div class="user-info">
                    <h4>Sahane Raissa</h4>
                    <p>admin agent</p>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <a href="{{ route('') }}" class="nav-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="{{ route('analytics') }}" class="nav-item">
                    <i class="fas fa-chart-line"></i>
                    Analytics
                </a>
                <a href="{{ route('update') }}" class="nav-item">
                    <i class="fas fa-map-marker-alt"></i>
                    Update menu
                </a>
                <a href="{{ route('usermanagement') }}" class="nav-item">
                    <i class="fas fa-users"></i>
                    User Management
                </a>
                <a href="#" class="nav-item">
                    <i class="far fa-file-alt"></i>
                    Reports
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-cogs"></i>
                    System Settings
                </a>

                <!-- Quick Actions Section -->
                <div class="nav-section">
                    <div class="nav-section-title">Quick Actions</div>
                    <a href="#" class="nav-item">
                        <i class="far fa-bell"></i>
                        Notifications
                        <span class="notification-badge">8</span>
                    </a>
                    <a href="#" class="nav-item">
                        <i class="far fa-question-circle"></i>
                        Help & Support
                    </a>
                </div>
            </nav>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer">
                <p>Signed in as</p>
                <p class="user-name">Sahane Raissa</p>
                <a href="#" class="sign-out">
                    <i class="fas fa-sign-out-alt"></i>
                    Sign Out
                </a>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <h1>Admin dash board</h1>
                    <p>Bistro bliss restaurant</p>
                </div>
                <div class="header-actions">
                    <button class="btn btn-outline">
                        <i class="fas fa-sync-alt"></i>
                        Refresh
                    </button>
                    <button class="btn btn-outline">
                        <i class="fas fa-download"></i>
                        Export
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-file-alt"></i>
                        Generate Report
                    </button>
                </div>
            </header>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">delivered food</span>
                        <i class="fas fa-motorcycle stat-icon"></i>
                    </div>
                    <div class="stat-value">2,847</div>
                    <div class="stat-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +12.5% from last month
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Active Staff</span>
                        <i class="fas fa-users stat-icon"></i>
                    </div>
                    <div class="stat-value">34</div>
                    <div class="stat-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +20 clients added this month
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">ordered dish</span>
                        <i class="fas fa-table stat-icon"></i>
                    </div>
                    <div class="stat-value">
                        100<span class="unit">dish</span>
                    </div>
                    <div class="stat-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +15.3% this month
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Customers Served</span>
                        <i class="fas fa-user-check stat-icon"></i>
                    </div>
                    <div class="stat-value">188,231</div>
                    <div class="stat-change positive">
                        <i class="fas fa-arrow-up"></i>
                        +3.2% this month
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart-box sales-chart">
                    <h3>Sales Statistics (This Year)</h3>
                    <div id="salesChart"></div>
                </div>
                <div class="chart-box dishes-chart">
                    <h3>Top Selling Dishes</h3>
                    <div id="dishesChart"></div>
                </div>
            </div>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var sidebarToggle = document.getElementById('sidebarToggle');
                var sidebar = document.getElementById('sidebar');
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('open');
                });
                // Optional: allow keyboard access
                sidebarToggle.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        sidebar.classList.toggle('open');
                    }
                });
            });

            // Sales Chart
            var salesOptions = {
                chart: {
                    type: 'line',
                    height: 200
                },
                series: [{
                    name: 'Sales (FCFA)',
                    data: [0, 0, 0, 0, 500, 1200, 2800, 3500, 0, 0, 0, 0]
                }],
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            };
            var salesChart = new ApexCharts(document.querySelector("#salesChart"), salesOptions);
            salesChart.render();

            // Dishes Chart
            var dishesOptions = {
                chart: {
                    type: 'donut',
                    height: 350
                },
                series: [35, 25, 20, 20],
                labels: ['Grilled Chicken', 'Pasta', 'Pizza', 'Drinks'],
                colors: ['#f44336', '#2196f3', '#ffeb3b', '#4caf50']
            };
            var dishesChart = new ApexCharts(document.querySelector("#dishesChart"), dishesOptions);
            dishesChart.render();
        </script>
    </div>    
</body>

</html>