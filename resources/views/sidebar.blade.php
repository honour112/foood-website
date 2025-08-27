
<div class="toggle-bars">
    <input type="checkbox" name="test" id="menu_mobile" checked>
    <a href="" id="atest">
        <label for="menu_mobile" id="labeltest">
            <i class="fa fa-bars"></i>
        </label>
    </a>
    <div class="aside" id="listemobile">
        <div class="logo">
            <img src="/assets/images/japanese-food (1).png" alt="logo">
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
                <a href="{{ route('dashboard') }}" class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}"><span class="bi bi-menu-up"></span>Dashboard</a>
                <a href="{{ route('deli-details') }}" class="nav-item {{ Route::is('deli-details') ? 'active' : '' }}"><span class="bi bi-car-front-fill"></span>Deliveries Details</a>
                <a href="{{ route('deli-map') }}" class="nav-item {{ Route::is('deli-map') ? 'active' : '' }}"><span class="bi bi-geo-alt-fill"></span>City Map</a>
                <a href="{{ route('deli-report') }}" class="nav-item {{ Route::is('deli-report') ? 'active' : '' }}"><span class="bi bi-folder-fill"></span>Report</a>
            </div>
            <div class="secondaries-links">
                <span class="title">Quick Actions</span>
                <a href="{{ route('notification') }}" class="nav-item {{ Route::is('notification') ? 'active' : '' }}"><span class="bi bi-bell-fill"></span>Notifications</a>
                <a href="{{ route('deli-dark') }}" class="nav-item {{ Route::is('deli-dark') ? 'active' : '' }}"><span class="bi bi-moon-fill"></span>Dark Mode</a>
                <a href="{{ route('deli-help') }}" class="nav-item {{ Route::is('deli-help') ? 'active' : '' }}"><span class="bi bi-question-circle-fill"></span>Help / Services</a>
            </div>
            <div class="others">
                <span class="title">Sign In Web-Site</span>
                <a href="{{ route('deli-web') }}" class="nav-item {{ Route::is('deli-web') ? 'active' : '' }}"><span class="bi bi-globe"></span>Bistro-Bliss-Site</a>
                <a href="{{ route('deli-logout') }}" class="nav-item {{ Route::is('deli-logout') ? 'active' : '' }}"><span class="bi bi-box-arrow-right"></span>Log Out</a>
            </div>
        </div>
    </div>
</div>


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
                    <a href="{{ route('dashboard') }}"class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                     Dashboard
                    </a>


                    <a href="{{ route('manage-orders') }}" class="nav-item {{ Route::is('manage-orders') ? 'active' : '' }}">
                        <i class="fas fa-cogs"></i>
                        Manage Orders
                    </a>

                    <a href="{{ route('assign-delivery') }}" class="nav-item {{ Route::is('assign-delivery') ? 'active' : '' }}">
                        <i class="fas fa-map-marker-alt"></i>
                        Assign Delivery Agents
                    </a>

                    <a href="{{ route('manage-bookings') }}" class="nav-item {{ Route::is('manage-bookings') ? 'active' : '' }}">
                        <i class="fas fa-table stat-icon"></i>
                        Manage Bookings
                    </a>

                    <a href="{{ route('reviews') }}" class="nav-item {{ Route::is('reviews') ? 'active' : '' }}">
                        <i class="far fa-file-alt"></i>
                        Reviews & Complaints
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
                <a href="{{ route('signout') }}" class="sign-out">
                    <i class="fas fa-sign-out-alt"></i>
                    Sign Out
                </a>
            </div>
    
        </aside>
   

