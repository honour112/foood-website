
@extends("dashboard-deliver")

@section("content")
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
@extends('frontdesk-dashboard')

@section('content')
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
@endsection