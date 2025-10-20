@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Ana Sayfa </title>
<meta name="title" content="Birtes Mühendislik - Ana Sayfa">
<meta name="description" content="Birtes Mühendislik - Ana Sayfa">
<meta name="keywords" content=" Birtes Mühendislik - Ana Sayfa ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://birtesmuhendislik.com/">
<meta property="og:title" content="Birtes Mühendislik - Ana Sayfa">
<meta property="og:description" content="Birtes Mühendislik - Ana Sayfa">
<meta property="og:image" content="{{ asset('assets/site/img/logo_favicon.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="Birtes Mühendislik - Ana Sayfa">
<meta property="twitter:description" content="Birtes Mühendislik - Ana Sayfa">
<meta property="twitter:image" content="{{ asset('assets/site/img/logo_favicon.png') }}">


@endsection


@section('styles')

<style>
/* Custom Styles for Enhanced About Us Page */

/* Hero Section Styles */
.hero-section {
    min-height: 400px;
    display: flex;
    align-items: center;
}

.hero-background {
    background: linear-gradient(135deg, #2a3990 0%, #1e2a6b 50%, #0f1419 100%);
}

.hero-pattern {
    background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0);
    background-size: 20px 20px;
}

.text-gradient {
    background: #2a3990;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.text-gradient-light {
    background: linear-gradient(135deg, #ffffff 0%, #f0f8ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Animation Classes */
.animate-fade-in {
    animation: fadeInUp 0.8s ease-out;
}

.animate-fade-in-delay {
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.animate-fade-in-delay-2 {
    animation: fadeInUp 0.8s ease-out 0.4s both;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* About Section Styles */
.about-image-wrapper:hover .image-overlay {
    opacity: 1 !important;
}

.image-overlay {
    background: rgba(42, 57, 144, 0.8);
    transition: all 0.3s ease;
}

.play-button {
    width: 60px;
    height: 60px;
    transition: all 0.3s ease;
}

.play-button:hover {
    transform: scale(1.1);
}

.floating-card {
    transform: translateY(-20px);
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(-20px); }
    50% { transform: translateY(-30px); }
}

.feature-item {
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.feature-item:hover {
    transform: translateY(-5px);
    border-color: #2a3990;
    box-shadow: 0 10px 25px rgba(42, 57, 144, 0.1);
}

/* Cities Section Styles */
.city-card {
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.city-card:hover {
    transform: translateY(-10px);
    border-color: #2a3990;
    box-shadow: 0 15px 35px rgba(42, 57, 144, 0.15);
}

.city-icon {
    width: 60px;
    height: 60px;
    transition: all 0.3s ease;
}

.city-card:hover .city-icon {
    background: #2a3990 !important;
    color: white !important;
    transform: scale(1.1);
}

/* Statistics Section Styles */
.stats-background {
    background: linear-gradient(135deg, #2a3990 0%, #1e2a6b 50%, #0f1419 100%);
}

.stats-pattern {
    background-image: 
        linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px),
        linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
}

.stat-card {
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-10px);
}

.stat-icon {
    width: 80px;
    height: 80px;
    transition: all 0.3s ease;
}

.stat-card:hover .stat-icon {
    background: rgba(255, 255, 255, 0.2) !important;
    transform: scale(1.1);
}

/* Counter Animation */
.counter {
    font-weight: 700;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

/* General Styles */
.transition-all {
    transition: all 0.3s ease;
}

.shadow-lg {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .hero-section {
        min-height: 300px;
    }
    
    .display-4 {
        font-size: 2.5rem !important;
    }
    
    .display-5 {
        font-size: 2rem !important;
    }
    
    .floating-card {
        position: relative !important;
        transform: none !important;
        margin-top: 1rem;
    }
}

.feature-icon i{
    color: #f8f9fa !important;
 }

 .city-icon i{
    color: #f8f9fa !important;
 }

/* Section Badge Styles */
.section-badge .badge {
    font-size: 0.875rem;
    letter-spacing: 0.5px;
    color: #f8f9fa !important;
}

/* Icon Wrapper Styles */
.icon-wrapper {
    width: 40px;
    height: 40px;
}

.feature-icon {
    width: 35px;
    height: 35px;
}

/* Text Colors */
.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

/* Hover Effects */
.about-image-wrapper:hover .image-frame {
    transform: scale(1.02);
}

.image-frame {
    transition: all 0.3s ease;
}

/* Pattern Dots */
.pattern-dots {
    background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0);
    background-size: 30px 30px;
}

/* Pattern Grid */
.pattern-grid {
    background-image: 
        linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px),
        linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 40px 40px;
}
</style>

@endsection



@section('content')

<div class="main-body container-xxl bg-white position-relative rounded-4 p-0 mb-lg-5 shadow-lg">

    <!-- Enhanced Hero Section -->
    <section id="hero" class="hero-section position-relative overflow-hidden">
        <div class="hero-background position-absolute w-100 h-100" style="background: linear-gradient(135deg, #2a3990 0%, #1e2a6b 50%, #0f1419 100%);"></div>
        <div class="hero-pattern position-absolute w-100 h-100 opacity-10">
            <div class="pattern-dots"></div>
        </div>
        <div class="container position-relative py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="hero-content text-white py-5">
                        <h1 class="display-4 fw-bold mb-4 animate-fade-in">
                            <span class="text-gradient" style="color: #f8f9fa !important; -webkit-text-fill-color:#f8f9fa !important;">Firma Profili</span>
                        </h1>
                        
                        <nav class="breadcrumb justify-content-center animate-fade-in-delay-2">
                            <a class="breadcrumb-item text-white-50" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active text-white" aria-current="page">Hakkımızda</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
       
    </section>


    <!-- Enhanced About Section -->
    <section id="about-us" class="py-5 position-relative">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-image-wrapper position-relative">
                        <div class="image-frame position-relative overflow-hidden rounded-4 shadow-lg">
                            <img src="{{asset('assets/site/img/about_birtes.webp') }}" alt="about-us" class="img-fluid w-100 h-auto">
                            <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 transition-all">
                                <div class="play-button bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg">
                                    <i class="fas fa-play text-primary fs-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="floating-card position-absolute top-0 end-0 bg-white rounded-3 shadow-lg p-3 transform-translate">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper bg-primary rounded-circle p-2 me-3">
                                    <i class="fas fa-award text-white"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold text-dark"> 20+ Yıl</h6>
                                    <small class="text-muted">Deneyim</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-badge mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold">
                                <i class="fas fa-info-circle me-2"></i>HAKKIMIZDA
                            </span>
                        </div>
                        
                        <h2 class="display-5 fw-bold mb-4" style="color:#2a3990">
                            <span class="text-gradient">Birtes</span> Mühendislik
                        </h2>
                        
                        <div class="about-text mb-4">
                            {!! $about_text->about_Text !!}
                        </div>
                        
                        <div class="features-grid row g-3">
                            <div class="col-6">
                                <div class="feature-item d-flex align-items-center p-3 bg-light rounded-3">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-check text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Kaliteli Hizmet</h6>
                                        <small class="text-muted">%100 Müşteri Memnuniyeti</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-item d-flex align-items-center p-3 bg-light rounded-3">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-users text-primary"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Uzman Ekip</h6>
                                        <small class="text-muted">Deneyimli Mühendisler</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Cities Section -->
    <section id="cities" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <div class="section-badge mb-3">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold">
                        <i class="fas fa-map-marker-alt me-2"></i>HİZMET ALANLARIMIZ
                    </span>
                </div>
                <h2 class="display-5 fw-bold mb-3">
                    <span class="text-gradient">Bu Şehirlerde</span> Hizmet Verdik
                </h2>
                <p class="lead text-muted">Türkiye'nin dört bir yanında kaliteli mühendislik hizmetleri sunuyoruz</p>
            </div>
            
            <div class="cities-grid">
                <div class="row g-4">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-building text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Ankara</h6>
                            <small class="text-muted">Başkent</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-city text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">İstanbul</h6>
                            <small class="text-muted">Mega Şehir</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-water text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">İzmir</h6>
                            <small class="text-muted">Ege'nin İncisi</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-tree text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Muğla</h6>
                            <small class="text-muted">Doğa Harikası</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-industry text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Kocaeli</h6>
                            <small class="text-muted">Sanayi Merkezi</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-mosque text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Konya</h6>
                            <small class="text-muted">Tarihi Şehir</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-mountain text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Kırşehir</h6>
                            <small class="text-muted">İç Anadolu</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-home text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Kırıkkale</h6>
                            <small class="text-muted">Merkez Şehir</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-snowflake text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Bolu</h6>
                            <small class="text-muted">Kar Şehri</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-graduation-cap text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Eskişehir</h6>
                            <small class="text-muted">Öğrenci Şehri</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-fire text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Gaziantep</h6>
                            <small class="text-muted">Gastronomi</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="city-card bg-white rounded-4 p-4 shadow-sm h-100 text-center transition-all">
                            <div class="city-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-sun text-primary fs-4"></i>
                            </div>
                            <h6 class="fw-bold mb-0">Adana</h6>
                            <small class="text-muted">Güneş Şehri</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Statistics Section -->
    <section class="py-5 position-relative overflow-hidden">
        <div class="stats-background position-absolute w-100 h-100" style="background: linear-gradient(135deg, #2a3990 0%, #1e2a6b 50%, #0f1419 100%);"></div>
        <div class="stats-pattern position-absolute w-100 h-100 opacity-5">
            <div class="pattern-grid"></div>
        </div>
        <div class="container position-relative py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-white mb-3">
                    <span class="text-gradient-light">Rakamlarla</span> Birtes Mühendislik
                </h2>
                <p class="lead text-white-50">Başarılarımızı sayılarla gösteriyoruz</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-lg-4">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon-wrapper mb-3">
                            <div class="stat-icon bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-map-marker-alt text-white fs-3"></i>
                            </div>
                        </div>
                        <h1 class="display-3 fw-bold text-white counter mb-2" data-target="12">0</h1>
                        <h5 class="text-white-50 mb-0">Farklı Şehir</h5>
                        <p class="text-white-50 small mt-2">Türkiye genelinde hizmet</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon-wrapper mb-3">
                            <div class="stat-icon bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-project-diagram text-white fs-3"></i>
                            </div>
                        </div>
                        <h1 class="display-3 fw-bold text-white counter mb-2" data-target="200">0</h1>
                        <h5 class="text-white-50 mb-0">Farklı Proje</h5>
                        <p class="text-white-50 small mt-2">Başarıyla tamamlanan</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon-wrapper mb-3">
                            <div class="stat-icon bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <i class="fas fa-heart text-white fs-3"></i>
                            </div>
                        </div>
                        <h1 class="display-3 fw-bold text-white counter mb-2" data-target="100">0</h1>
                        <h5 class="text-white-50 mb-0">Müşteri Memnuniyeti</h5>
                        <p class="text-white-50 small mt-2">%100 memnuniyet oranı</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Enhanced Counter Animation
        const counters = document.querySelectorAll('.counter');
        
        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const duration = 2000; // 2 seconds
            const start = performance.now();
            
            const updateCounter = (currentTime) => {
                const elapsed = currentTime - start;
                const progress = Math.min(elapsed / duration, 1);
                
                // Easing function for smooth animation
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                const current = Math.floor(easeOutQuart * target);
                
                counter.innerText = current;
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target;
                }
            };
            
            requestAnimationFrame(updateCounter);
        };
        
        // Intersection Observer for scroll-triggered animations
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    if (!counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateCounter(counter);
                    }
                }
            });
        }, observerOptions);
        
        // Observe all counters
        counters.forEach(counter => {
            observer.observe(counter);
        });
        
        // Add smooth scroll behavior for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                const rate = scrolled * -0.5;
                heroSection.style.transform = `translateY(${rate}px)`;
            }
        });
        
        // Add hover effects for city cards
        const cityCards = document.querySelectorAll('.city-card');
        cityCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Add loading animation
        const loadingElements = document.querySelectorAll('.animate-fade-in, .animate-fade-in-delay, .animate-fade-in-delay-2');
        const loadingObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        loadingElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            loadingObserver.observe(element);
        });
    });
</script>

@endsection