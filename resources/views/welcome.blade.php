@extends('layouts.app')

@section('title', 'KickOff - All Matches, All Times, Always Accurate')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style_index.css') }}">
@endsection

@section('navigation')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="Kickoff Logo" style="width: 80px; height: 65px;" class="me-2">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chooseliga') }}">Match Schedule</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">All Matches, All Times, Always Accurate.</h1>
                <p class="hero-subtitle">
                    Your trusted source for precise football match schedules.
                    No distractions — just the when and where.
                </p>
                <a href="{{ route('chooseliga') }}" class="btn btn-primary-custom">Choose Liga</a>
            </div>
        </div>
    </section>

    <section class="leagues-section">
        <div class="container">
            <div class="marquee-container">
                <div class="marquee-track">
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/bundesliga.png') }}" alt="Bundesliga" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/ucl.png') }}" alt="Champions League" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/la_liga.png') }}" alt="La Liga" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/serie_a.png') }}" alt="Serie A" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/eredivisie.png') }}" alt="Eredivisie" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/liga_1_indonesia.png') }}" alt="Liga 1 Indonesia" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/ligue_1.png') }}" alt="Ligue 1" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/bundesliga.png') }}" alt="Bundesliga" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/ucl.png') }}" alt="Champions League" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/la_liga.png') }}" alt="La Liga" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/serie_a.png') }}" alt="Serie A" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/eredivisie.png') }}" alt="Eredivisie" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/liga_1_indonesia.png') }}" alt="Liga 1 Indonesia" style="height:40px; width:auto;">
                        </div>
                    </div>
                    
                    <div class="league-item">
                        <div class="league-logo">
                            <img src="{{ asset('assets/leagues/ligue_1.png') }}" alt="Ligue 1" style="height:40px; width:auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center pt-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title">
                        Ready to Accompany<br>
                        Every Match!
                    </h2>
                    <p class="about-text">
                        We're here to make sure you never miss a moment on the field. With real-time match schedules and complete information from various leagues, KickOff is ready to bring you every goal, every attack, and every victory.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="video-container">
                        <div class="ratio ratio-16x9">
                            <video class="rounded-3 shadow-lg" controls autoplay muted>
                                <source src="{{ asset('assets/videos/videoprofile.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-overlay">
                            <div class="play-button">
                                <i class="bi bi-play-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="section-title text-center">What Our Fans Say?</h2>
            
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "KickOff has transformed how I follow football. The schedules are always accurate, and I love that there are no scores or spoilers. It's just what I need to plan my match days!"
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">:></div>
                            <div class="author-info">
                                <h6>NAMA USER</h6>
                                <small>STATUS</small>
                                <div class="testimonial-time">
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center">Get in Touch with Us Anytime!</h2>
            <p class="text-center mb-5" style="max-width: 600px; margin: 0 auto 50px;">
                Have questions or feedback? We'd love to hear from you! 
                You can reach us through social media below or send a message 
                directly by filling out the form on the right.
            </p>
            
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <h4 class="mb-4">Send us a message</h4>
                        <form id="feedbackForm" action="process_feedback.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama_user" placeholder="Your Name :" 
                                        required maxlength="50">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="status" placeholder="Status/Profesi :" 
                                        required maxlength="50">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="E-mail :" 
                                        required maxlength="70">
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="6" name="pesan" placeholder="Message :" 
                                        required maxlength="1000"></textarea>
                                <small class="text-muted">Maksimal 1000 karakter</small>
                            </div>
                            <button type="submit" class="btn btn-primary-custom w-100" id="submitBtn">
                                <i class="fas fa-paper-plane me-2"></i>
                                <span id="btnText">Send Message</span>
                                <span id="btnSpinner" class="spinner-border spinner-border-sm ms-2" style="display: none;"></span>
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-info">
                        <h4>Contact Information</h4>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <strong>KickOff HQ</strong><br>
                                <span>Jl. Sudirman No. 45, Senayan, Yogyakarta, Indonesia</span>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <strong>+62 812-3456-7890</strong>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>info@KickOff.com</strong>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER DIHAPUS KARENA SUDAH MENGGUNAKAN TEMPLATE MASTER -->
@endsection

@section('scripts')
    <script>
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

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(30, 22, 22, 0.95)';
            } else {
                navbar.style.background = 'rgba(30, 22, 22, 0.3)';
            }
        });
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnSpinner = document.getElementById('btnSpinner');
            
            submitBtn.disabled = true;
            btnText.textContent = 'Sending...';
            btnSpinner.style.display = 'inline-block';
        });
        document.querySelector('textarea[name="pesan"]').addEventListener('input', function() {
            const remaining = 1000 - this.value.length;
            const counter = this.parentNode.querySelector('small');
            counter.textContent = `${remaining} karakter tersisa`;
            
            if (remaining < 100) {
                counter.style.color = '#dc3545';
            } else {
                counter.style.color = '#6c757d';
            }
        });
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                if (alert.classList.contains('show')) {
                    alert.classList.remove('show');
                }
            });
        }, 5000);
    </script>
@endsection