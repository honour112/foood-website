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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection