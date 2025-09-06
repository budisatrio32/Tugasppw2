@extends('layouts.chooseliga')

@section('title', 'Choose Your League - KickOff')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style_chooseliga.css') }}">
@endsection

@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="Kickoff Logo" style="width: 60px; height: 50px;" class="me-2">
                <span>KickOff</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="main-content">
        <div class="container">
            <!-- Header Section -->
            <div class="page-header">
                <h1 class="page-title">Choose Your League</h1>
                <p class="page-subtitle">
                    Select your favorite football league to view the latest match schedules. 
                    Stay updated with fixtures from top leagues around the world.
                </p>
            </div>

            <!-- Leagues Grid -->
            <div class="leagues-grid">
                <!-- Premier League -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/premier_league.png') }}" alt="Premier League" class="league-logo">
                        <h3 class="league-name">Premier League</h3>
                        <p class="league-country">England</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">20</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">38</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- La Liga -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/la_liga.png') }}" alt="La Liga" class="league-logo">
                        <h3 class="league-name">La Liga</h3>
                        <p class="league-country">Spain</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">20</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">38</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- Serie A -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/serie_a.png') }}" alt="Serie A" class="league-logo">
                        <h3 class="league-name">Serie A</h3>
                        <p class="league-country">Italy</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">20</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">38</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- Bundesliga -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/bundesliga.png') }}" alt="Bundesliga" class="league-logo">
                        <h3 class="league-name">Bundesliga</h3>
                        <p class="league-country">Germany</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">34</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- Champions League -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/ucl.png') }}" alt="Champions League" class="league-logo">
                        <h3 class="league-name">UEFA Champions League</h3>
                        <p class="league-country">Europe</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">32</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">125</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- Ligue 1 -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/ligue_1.png') }}" alt="Ligue 1" class="league-logo">
                        <h3 class="league-name">Ligue 1</h3>
                        <p class="league-country">France</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">20</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">38</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- Eredivisie -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/eredivisie.png') }}" alt="Eredivisie" class="league-logo">
                        <h3 class="league-name">Eredivisie</h3>
                        <p class="league-country">Netherlands</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">34</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>

                <!-- Liga 1 Indonesia -->
                <div class="league-card">
                    <div class="league-header">
                        <img src="{{ asset('assets/leagues/liga_1_indonesia.png') }}" alt="Liga 1 Indonesia" class="league-logo">
                        <h3 class="league-name">Liga 1</h3>
                        <p class="league-country">Indonesia</p>
                    </div>
                    <div class="league-stats">
                        <div class="stat-item">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">34</span>
                            <span class="stat-label">Matches</span>
                        </div>
                    </div>
                    <div class="league-actions">
                        <a href="#" class="btn btn-league">View Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // League card hover effects
        document.querySelectorAll('.league-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Smooth scrolling for navbar links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endsection
</html>