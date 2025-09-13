@extends('layouts.schedule')

@section('title', 'Premier League Schedule - KickOff')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style_schedule.css') }}">
@endsection

@section('content')
    <!-- League Header -->
    <header class="league-header" role="banner">
        <div class="container">
            <div class="league-header-content">
                <figure class="league-logo-header" aria-label="Premier League Logo">
                    <img src="{{ asset('assets/leagues/premier_league.png') }}" 
                        alt="Premier League Official Logo" 
                        onerror="this.src='https://via.placeholder.com/70x70/FF6B6B/FFFFFF?text=PL'">
                </figure>
                <h1 class="league-title">PREMIER LEAGUE</h1>
                <p class="league-subtitle">Professional Football League</p>
                <nav class="breadcrumb-custom" role="navigation" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}" aria-label="Home">
                        <i class="fas fa-home" aria-hidden="true"></i>
                    </a>
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    <a href="{{ route('pilihliga') }}">Choose League</a>
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    <span aria-current="page">Premier League Schedule</span>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Filter Section -->
            <section class="filter-section" aria-label="Match Filters">
                <h2 class="visually-hidden">Filter Matches</h2>
                <div class="filter-tabs" role="tablist" aria-label="Match filter tabs">
                    <button class="filter-tab active" role="tab" aria-selected="true" aria-controls="all-matches" onclick="filterMatches('all')">All Matches</button>
                    <button class="filter-tab" role="tab" aria-selected="false" aria-controls="today-matches" onclick="filterMatches('today')">Today</button>
                    <button class="filter-tab" role="tab" aria-selected="false" aria-controls="upcoming-matches" onclick="filterMatches('upcoming')">Upcoming</button>
                    <button class="filter-tab" role="tab" aria-selected="false" aria-controls="finished-matches" onclick="filterMatches('finished')">Finished</button>
                </div>
            </section>

            <!-- Today's Matches -->
            <section class="matches-section" aria-labelledby="today-heading">
                <h2 class="section-date" id="today-heading">Today</h2>
                <div class="matches-grid" role="list" aria-label="Today's matches">
                    <!-- Match 1 -->
                    <article class="match-card" 
                            data-status="today" 
                            role="listitem" 
                            tabindex="0" 
                            aria-labelledby="match1-teams" 
                            aria-describedby="match1-info">
                        <div class="match-teams" id="match1-teams">
                            <!-- Away Team -->
                            <div class="team">
                                <figure class="team-logo" aria-label="Arsenal logo">
                                    <img src="{{ asset('assets/teams/arsenal.png') }}" 
                                        alt="Arsenal team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/FF6B6B/FFFFFF?text=ARS'">
                                </figure>
                                <h3 class="team-name">Arsenal</h3>
                            </div>
                            
                            <!-- VS Section -->
                            <div class="vs-section" aria-label="Versus">
                                <div class="vs-text">VS</div>
                            </div>
                            
                            <!-- Home Team -->
                            <div class="team">
                                <figure class="team-logo" aria-label="Chelsea logo">
                                    <img src="{{ asset('assets/teams/chelsea.png') }}" 
                                        alt="Chelsea team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/4ECDC4/FFFFFF?text=CHE'">
                                </figure>
                                <h3 class="team-name">Chelsea</h3>
                            </div>
                        </div>
                        
                        <div class="match-info" id="match1-info">
                            <time class="match-time" datetime="19:30">19:30</time>
                            <time class="match-date" datetime="2023-11-15">Wed, Nov 15</time>
                            <span class="match-status" aria-label="Match status">Today</span>
                            <span class="match-stadium" aria-label="Stadium">
                                <i class="bi bi-geo-alt"></i> Emirates Stadium
                            </span>
                        </div>
                    </article>
                    
                    <!-- Match 2 -->
                    <article class="match-card" 
                            data-status="today" 
                            role="listitem" 
                            tabindex="0" 
                            aria-labelledby="match2-teams" 
                            aria-describedby="match2-info">
                        <div class="match-teams" id="match2-teams">
                            <div class="team">
                                <figure class="team-logo" aria-label="Manchester City logo">
                                    <img src="{{ asset('assets/teams/manchester_city.png') }}" 
                                        alt="Manchester City team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/45B7D1/FFFFFF?text=MCI'">
                                </figure>
                                <h3 class="team-name">Manchester City</h3>
                            </div>
                            
                            <div class="vs-section" aria-label="Versus">
                                <div class="vs-text">VS</div>
                            </div>
                            
                            <div class="team">
                                <figure class="team-logo" aria-label="Liverpool logo">
                                    <img src="{{ asset('assets/teams/liverpool.png') }}" 
                                        alt="Liverpool team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/FF6B6B/FFFFFF?text=LIV'">
                                </figure>
                                <h3 class="team-name">Liverpool</h3>
                            </div>
                        </div>
                        
                        <div class="match-info" id="match2-info">
                            <time class="match-time" datetime="21:45">21:45</time>
                            <time class="match-date" datetime="2023-11-15">Wed, Nov 15</time>
                            <span class="match-status" aria-label="Match status">Today</span>
                            <span class="match-stadium" aria-label="Stadium">
                                <i class="bi bi-geo-alt"></i> Etihad Stadium
                            </span>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Tomorrow's Matches -->
            <section class="matches-section" aria-labelledby="tomorrow-heading">
                <h2 class="section-date" id="tomorrow-heading">Tomorrow</h2>
                <div class="matches-grid" role="list" aria-label="Tomorrow's matches">
                    <!-- Match 3 -->
                    <article class="match-card" 
                            data-status="upcoming" 
                            role="listitem" 
                            tabindex="0" 
                            aria-labelledby="match3-teams" 
                            aria-describedby="match3-info">
                        <div class="match-teams" id="match3-teams">
                            <div class="team">
                                <figure class="team-logo" aria-label="Tottenham Hotspur logo">
                                    <img src="{{ asset('assets/teams/tottenham_hotspur.png') }}" 
                                        alt="Tottenham Hotspur team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/FFFFFF/000000?text=TOT'">
                                </figure>
                                <h3 class="team-name">Tottenham Hotspur</h3>
                            </div>
                            
                            <div class="vs-section" aria-label="Versus">
                                <div class="vs-text">VS</div>
                            </div>
                            
                            <div class="team">
                                <figure class="team-logo" aria-label="Manchester United logo">
                                    <img src="{{ asset('assets/teams/manchester_united.png') }}" 
                                        alt="Manchester United team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/FF6B6B/FFFFFF?text=MUN'">
                                </figure>
                                <h3 class="team-name">Manchester United</h3>
                            </div>
                        </div>
                        
                        <div class="match-info" id="match3-info">
                            <time class="match-time" datetime="20:00">20:00</time>
                            <time class="match-date" datetime="2023-11-16">Thu, Nov 16</time>
                            <span class="match-status" aria-label="Match status">Upcoming</span>
                            <span class="match-stadium" aria-label="Stadium">
                                <i class="bi bi-geo-alt"></i> Tottenham Hotspur Stadium
                            </span>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Saturday's Matches -->
            <section class="matches-section" aria-labelledby="saturday-heading">
                <h2 class="section-date" id="saturday-heading">Saturday, Nov 18 2023</h2>
                <div class="matches-grid" role="list" aria-label="Saturday's matches">
                    <!-- Match 4 -->
                    <article class="match-card" 
                            data-status="upcoming" 
                            role="listitem" 
                            tabindex="0" 
                            aria-labelledby="match4-teams" 
                            aria-describedby="match4-info">
                        <div class="match-teams" id="match4-teams">
                            <div class="team">
                                <figure class="team-logo" aria-label="Aston Villa logo">
                                    <img src="{{ asset('assets/teams/aston_villa.png') }}" 
                                        alt="Aston Villa team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/95A5A6/FFFFFF?text=AVL'">
                                </figure>
                                <h3 class="team-name">Aston Villa</h3>
                            </div>
                            
                            <div class="vs-section" aria-label="Versus">
                                <div class="vs-text">VS</div>
                            </div>
                            
                            <div class="team">
                                <figure class="team-logo" aria-label="Everton logo">
                                    <img src="{{ asset('assets/teams/everton.png') }}" 
                                        alt="Everton team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/3498DB/FFFFFF?text=EVE'">
                                </figure>
                                <h3 class="team-name">Everton</h3>
                            </div>
                        </div>
                        
                        <div class="match-info" id="match4-info">
                            <time class="match-time" datetime="15:00">15:00</time>
                            <time class="match-date" datetime="2023-11-18">Sat, Nov 18</time>
                            <span class="match-status" aria-label="Match status">Upcoming</span>
                            <span class="match-stadium" aria-label="Stadium">
                                <i class="bi bi-geo-alt"></i> Villa Park
                            </span>
                        </div>
                    </article>

                    <!-- Match 5 -->
                    <article class="match-card" 
                            data-status="upcoming" 
                            role="listitem" 
                            tabindex="0" 
                            aria-labelledby="match5-teams" 
                            aria-describedby="match5-info">
                        <div class="match-teams" id="match5-teams">
                            <div class="team">
                                <figure class="team-logo" aria-label="Newcastle United logo">
                                    <img src="{{ asset('assets/teams/newcastle_united.png') }}" 
                                        alt="Newcastle United team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/000000/FFFFFF?text=NEW'">
                                </figure>
                                <h3 class="team-name">Newcastle United</h3>
                            </div>
                            
                            <div class="vs-section" aria-label="Versus">
                                <div class="vs-text">VS</div>
                            </div>
                            
                            <div class="team">
                                <figure class="team-logo" aria-label="West Ham United logo">
                                    <img src="{{ asset('assets/teams/west_ham_united.png') }}" 
                                        alt="West Ham United team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/7D3C98/FFFFFF?text=WHU'">
                                </figure>
                                <h3 class="team-name">West Ham United</h3>
                            </div>
                        </div>
                        
                        <div class="match-info" id="match5-info">
                            <time class="match-time" datetime="17:30">17:30</time>
                            <time class="match-date" datetime="2023-11-18">Sat, Nov 18</time>
                            <span class="match-status" aria-label="Match status">Upcoming</span>
                            <span class="match-stadium" aria-label="Stadium">
                                <i class="bi bi-geo-alt"></i> St. James' Park
                            </span>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Previous Matches -->
            <section class="matches-section" aria-labelledby="previous-heading">
                <h2 class="section-date" id="previous-heading">Sunday, Nov 12 2023</h2>
                <div class="matches-grid" role="list" aria-label="Previous matches">
                    <!-- Match 6 -->
                    <article class="match-card" 
                            data-status="finished" 
                            role="listitem" 
                            tabindex="0" 
                            aria-labelledby="match6-teams" 
                            aria-describedby="match6-info">
                        <div class="match-teams" id="match6-teams">
                            <div class="team">
                                <figure class="team-logo" aria-label="Brighton logo">
                                    <img src="{{ asset('assets/teams/brighton.png') }}" 
                                        alt="Brighton team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/0E6655/FFFFFF?text=BRI'">
                                </figure>
                                <h3 class="team-name">Brighton</h3>
                            </div>
                            
                            <div class="vs-section" aria-label="Versus">
                                <div class="vs-text">VS</div>
                            </div>
                            
                            <div class="team">
                                <figure class="team-logo" aria-label="Crystal Palace logo">
                                    <img src="{{ asset('assets/teams/crystal_palace.png') }}" 
                                        alt="Crystal Palace team logo" 
                                        onerror="this.src='https://via.placeholder.com/45x45/C0392B/FFFFFF?text=CRY'">
                                </figure>
                                <h3 class="team-name">Crystal Palace</h3>
                            </div>
                        </div>
                        
                        <div class="match-info" id="match6-info">
                            <time class="match-time" datetime="14:00">14:00</time>
                            <time class="match-date" datetime="2023-11-12">Sun, Nov 12</time>
                            <span class="match-status" aria-label="Match status">Finished</span>
                            <span class="match-stadium" aria-label="Stadium">
                                <i class="bi bi-geo-alt"></i> American Express Stadium
                            </span>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function filterMatches(type) {
            // Update filter tab states
            document.querySelectorAll('.filter-tab').forEach(tab => {
                tab.classList.remove('active');
                tab.setAttribute('aria-selected', 'false');
            });
            
            event.target.classList.add('active');
            event.target.setAttribute('aria-selected', 'true');
            
            const matchCards = document.querySelectorAll('.match-card');
            const sections = document.querySelectorAll('.matches-section');
            
            if (type === 'all') {
                // Show all sections and cards
                sections.forEach(section => {
                    section.style.display = 'block';
                });
                matchCards.forEach(card => {
                    card.style.display = 'block';
                    card.setAttribute('aria-hidden', 'false');
                });
            } else {
                // Hide all sections initially
                sections.forEach(section => {
                    section.style.display = 'none';
                });
                
                // Filter and show relevant cards
                matchCards.forEach(card => {
                    const status = card.getAttribute('data-status');
                    const section = card.closest('.matches-section');
                    
                    if ((type === 'today' && (status === 'today' || status === 'upcoming')) ||
                        (type === status)) {
                        card.style.display = 'block';
                        card.setAttribute('aria-hidden', 'false');
                        section.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                        card.setAttribute('aria-hidden', 'true');
                    }
                });
                
                // Special handling for "today" filter
                if (type === 'today') {
                    const todaySection = document.querySelector('.matches-section h2[id*="today-heading"]');
                    if (todaySection) {
                        todaySection.closest('.matches-section').style.display = 'block';
                    }
                }
            }
            
            // Add smooth transition
            matchCards.forEach(card => {
                card.style.transition = 'all 0.3s ease';
            });

            // Screen reader announcement
            const visibleCards = document.querySelectorAll('.match-card[aria-hidden="false"]').length;
            const announcement = `Showing ${visibleCards} ${type === 'all' ? '' : type} matches`;
            announceToScreenReader(announcement);
        }

        function announceToScreenReader(message) {
            const announcement = document.createElement('div');
            announcement.setAttribute('aria-live', 'polite');
            announcement.setAttribute('aria-atomic', 'true');
            announcement.className = 'visually-hidden';
            announcement.textContent = message;
            document.body.appendChild(announcement);
            
            setTimeout(() => {
                document.body.removeChild(announcement);
            }, 1000);
        }

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(0, 0, 0, 0.95)';
                } else {
                    navbar.style.background = 'rgba(0, 0, 0, 0.9)';
                }
            }
        });

        // Card interaction effects
        document.querySelectorAll('.match-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });

            card.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // Filter tab keyboard navigation
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // Page load animations
        document.addEventListener('DOMContentLoaded', function() {
            const matchCards = document.querySelectorAll('.match-card');
            matchCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });

            // Initialize aria-hidden attributes
            document.querySelectorAll('.match-card').forEach(card => {
                card.setAttribute('aria-hidden', 'false');
            });
        });
    </script>
@endsection