<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Bliss - Front Desk Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800&family=Rufina:wght@400;700&family=Racing+Sans+One:wght@400&family=Radio+Canada:wght@300;400;500;600;700&family=Sansation:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
                <div class="user-avatar">NK</div>
                <div class="user-info">
                    <h4>Nkwambi Honour</h4>
                    <p>front desk agent</p>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <a href="#" class="nav-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-chart-line"></i>
                    Analytics
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-map-marker-alt"></i>
                    City Map
                </a>
                <a href="#" class="nav-item">
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
                <p class="user-name">Nkwambi honour</p>
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
                    <h1>front desk dash board</h1>
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
                        <span class="stat-title">Assigned delivery agents</span>
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
                        <span class="stat-title">Active Clients</span>
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
                        <span class="stat-title">tables booked</span>
                        <i class="fas fa-table stat-icon"></i>
                    </div>
                    <div class="stat-value">
                        100<span class="unit">tables</span>
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

            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Incoming Orders -->
                <div class="section-card">
                    <h2 class="section-title">Incoming Orders</h2>
                    <div class="orders-section">
                        <div class="order-item">
                            <div class="order-details">
                                <h4>Order Details</h4>
                                <p>customer's order</p>
                            </div>
                            <div class="order-actions">
                                <button class="btn-accept">accept</button>
                                <button class="btn-decline">Decline</button>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-details">
                                <h4>Order Details</h4>
                                <p>customer's order</p>
                            </div>
                            <div class="order-actions">
                                <button class="btn-accept">accept</button>
                                <button class="btn-decline">Decline</button>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-details">
                                <h4>Order Details</h4>
                                <p>customer's order</p>
                            </div>
                            <div class="order-actions">
                                <button class="btn-accept">accept</button>
                                <button class="btn-decline">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assign Delivery Agents -->
                <div class="section-card">
                    <h2 class="section-title">Assign delivery agents</h2>
                    <div class="agents-section">
                        <div class="agent-item">
                            <div class="agent-info">
                                <div class="agent-avatar">J</div>
                                <span class="agent-name">jackson</span>
                            </div>
                            <div class="status-online">
                                <div class="status-dot"></div>
                                online
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="agent-info">
                                <div class="agent-avatar">J</div>
                                <span class="agent-name">jackson</span>
                            </div>
                            <div class="status-online">
                                <div class="status-dot"></div>
                                online
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="agent-info">
                                <div class="agent-avatar">J</div>
                                <span class="agent-name">jackson</span>
                            </div>
                            <div class="status-online">
                                <div class="status-dot"></div>
                                online
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews and Complaints -->
            <div class="reviews-section">
                <h2 class="reviews-header">Reviews and complaints</h2>
                <div class="review-content">
                    <div class="review-item">
                        <div class="review-avatar">E</div>
                        <div class="review-text">
                            <h4>Emily</h4>
                            <p>We thank God for go ahead to lead thé way</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="view-all-btn">view all</a>
            </div>

            <!-- Booked Tables (Side Section) -->
            <div class="booked-tables-section">
                <h2 class="booked-tables-title"><i class="fas fa-calendar-alt"></i> Booked Tables</h2>
                <div class="static-calendar">
                    <div class="calendar-header">
                        <span>August 2025</span>
                    </div>
                    <div class="calendar-grid">
                        <div class="calendar-day">
                            <div class="day-label">23</div>
                            <div class="reservation">
                                <i class="fa-solid fa-chair"></i>
                                <span class="table">Table 5</span>
                                <span class="time">7:00 PM</span>
                                <span class="name">Nkwambi samson</span>
                            </div>
                        </div>
                        <div class="calendar-day">
                            <div class="day-label">24</div>
                            <div class="reservation">
                                <i class="fa-solid fa-chair"></i>
                                <span class="table">Table 2</span>
                                <span class="time">8:30 PM</span>
                                <span class="name">sahane Raissa</span>
                            </div>
                        </div>
                        <div class="calendar-day">
                            <div class="day-label">25</div>
                            <div class="reservation">
                                <i class="fa-solid fa-chair"></i>
                                <span class="table">Table 8</span>
                                <span class="time">6:00 PM</span>
                                <span class="name">Nkwambi Honour</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
<!-- Sidebar toggle script for mobile view -->
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
</script>
</div>
