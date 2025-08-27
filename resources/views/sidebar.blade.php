
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
   