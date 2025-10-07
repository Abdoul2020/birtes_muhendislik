@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Proje detayı </title>
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
    /* Enhanced Project Details Page Styles */
    
    /* Hero Section Enhancements */
    .project-hero {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        position: relative;
        overflow: hidden;
    }
    
    .project-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    .hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
        opacity: 0;
        animation: slideInUp 1s ease 0.5s forwards;
    }
    
    .breadcrumb {
        opacity: 0;
        animation: slideInUp 1s ease 0.8s forwards;
    }
    
    .breadcrumb-item {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .breadcrumb-item:hover {
        color: white;
    }
    
    .breadcrumb-item.active {
        color: white;
        font-weight: 600;
    }
    
    /* Project Gallery Enhancements */
    .project-gallery {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
.product-large-slider {
        height: 500px;
        border-radius: 15px;
    overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        position: relative;
    }
    
    .product-large-slider::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(42, 57, 144, 0.05), rgba(42, 57, 144, 0.1));
        z-index: 1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .product-large-slider:hover::before {
        opacity: 1;
}

.product-large-slider .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa;
        position: relative;
}

.product-large-slider .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
        transition: transform 0.4s ease;
    }
    
    .product-large-slider:hover .swiper-slide img {
        transform: scale(1.05);
    }
    
    /* Thumbnail Slider Enhancements */
.product-thumbnail-slider {
        height: 100px;
        margin-top: 1rem;
}

.product-thumbnail-slider .swiper-slide {
    cursor: pointer;
        border-radius: 10px;
    overflow: hidden;
        border: 3px solid transparent;
    transition: all 0.3s ease;
    background-color: #f8f9fa;
        position: relative;
    }
    
    .product-thumbnail-slider .swiper-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(42, 57, 144, 0.1), rgba(42, 57, 144, 0.2));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }
    
    .product-thumbnail-slider .swiper-slide:hover::before {
        opacity: 1;
}

.product-thumbnail-slider .swiper-slide:hover {
        border-color: #2a3990;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(42, 57, 144, 0.2);
}

.product-thumbnail-slider .swiper-slide.swiper-slide-thumb-active {
        border-color: #2a3990;
        box-shadow: 0 5px 15px rgba(42, 57, 144, 0.3);
        transform: scale(1.05);
}

.product-thumbnail-slider .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.3s ease;
}

.product-thumbnail-slider .swiper-slide:hover img {
    transform: scale(1.1);
}

    /* Project Content Enhancements */
    .project-content {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .project-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2a3990;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 1rem;
    }
    
    .project-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
    }
    
    .project-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #666;
        opacity: 1;
        visibility: visible;
        transition: none;
    }
    
    .project-description p {
        margin-bottom: 1.5rem;
    }
    
    /* Project Sidebar Enhancements */
    .project-sidebar {
        position: sticky;
        top: 2rem;
    }
    
    .sidebar-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border: 2px solid #f8f9fa;
        transition: all 0.3s ease;
        margin-bottom: 2rem;
    }
    
    .sidebar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(42, 57, 144, 0.15);
        border-color: #2a3990;
    }
    
    .sidebar-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2a3990;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.75rem;
    }
    
    .sidebar-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
    }
    
    .project-details-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .project-details-table tr {
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }
    
    .project-details-table tr:hover {
        background: rgba(42, 57, 144, 0.05);
    }
    
    .project-details-table th {
        font-weight: 600;
        color: #333;
        padding: 1rem 0;
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .project-details-table td {
        color: #666;
        padding: 1rem 0;
        font-size: 1rem;
        text-align: right;
    }
    
    .progress-custom {
        height: 8px;
        background-color: #f0f0f0;
        border-radius: 4px;
        overflow: hidden;
    }
    
    .progress-custom .progress-bar {
        border-radius: 4px;
        transition: width 1.5s ease-in-out;
    }
    
    /* Section Animations */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }
    
    .animate-on-scroll.animated {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Keyframe Animations */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Responsive Design */
@media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
    .product-large-slider {
        height: 300px;
    }
    
    .product-thumbnail-slider {
            height: 80px;
        }
        
        .project-content,
        .project-gallery,
        .sidebar-card {
            padding: 1.5rem;
        }
        
        .project-title {
            font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .product-large-slider {
        height: 250px;
    }
    
    .product-thumbnail-slider {
            height: 60px;
        }
    }
    
    /* Loading Animation */
    .project-gallery,
    .project-content,
    .sidebar-card {
        animation: fadeInUp 0.6s ease forwards;
    }
    
    .project-gallery { animation-delay: 0.1s; }
    .project-content { animation-delay: 0.2s; }
    .sidebar-card { animation-delay: 0.3s; }
    
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
</style>

@endsection



@section('content')


<div class="main-body container-xxl bg-white position-relative rounded-4 p-0 mb-lg-5">

    <section id="hero" class="project-hero py-5">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hero-content">
                        
                        <p class="lead text-white mb-4 opacity-90 mt-5">
                            {{ $projectsdetails->proje_kapsami ?? 'Proje detaylarını inceleyin' }}
                        </p>
                        <nav class="breadcrumb justify-content-center">
                            <a class="breadcrumb-item" href="/">
                                <i class="fas fa-home me-1"></i>Ana Sayfa
                            </a>
                            <a class="breadcrumb-item" href="{{ route('home.projects') }}">
                                <i class="fas fa-project-diagram me-1"></i>Projeler
                            </a>
                            <span class="breadcrumb-item active" aria-current="page">
                                {{ $projectsdetails->title ?? 'Proje Detayı' }}
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Start -->

    <section id="project-details" class="py-5">
        <div class="container">
            <div class="row g-4">
                <main class="col-lg-8">
                    <!-- Project Gallery Section -->
                    <div class="project-gallery animate-on-scroll">
                        <div class="row">
                            <div class="col-12">
                                        <div class="swiper product-large-slider">
                                            <div class="swiper-wrapper">
                                                @if (!empty($projectsdetails->poster))
                                                <div class="swiper-slide">
                                                    <img src="{{ asset($projectsdetails->poster) }}?v={{ time() }}"
                                                        alt="{{ $projectsdetails->title }} poster"
                                                        class="img-fluid">
                                                </div>
                                                @endif
                                        @if(!empty($resimgalleri))
                                        @foreach($resimgalleri as $gallery_image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($gallery_image->poster) }}?v={{ time() }}"
                                                alt="{{ $projectsdetails->title }} - Resim {{ $loop->iteration }}"
                                                class="img-fluid">
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            @if(!empty($resimgalleri))
                            <div class="col-12 mt-3">
                                        <div thumbsSlider="" class="swiper product-thumbnail-slider">
                                            <div class="swiper-wrapper">
                                        @if (!empty($projectsdetails->poster))
                                                <div class="swiper-slide">  
                                            <img src="{{ asset($projectsdetails->poster) }}?v={{ time() }}"
                                                alt="{{ $projectsdetails->title }} poster"
                                                        class="thumb-image img-fluid">
                                                </div>
                                        @endif
                                        @foreach($resimgalleri as $gallery_image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($gallery_image->poster) }}?v={{ time() }}"
                                                alt="{{ $projectsdetails->title }} - Resim {{ $loop->iteration }}"
                                                class="thumb-image img-fluid">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Project Content Section -->
                    <div class="project-content animate-on-scroll">
                        <h2 class="project-title">
                            <i class="fas fa-info-circle me-3"></i>{{ $projectsdetails->title ?? 'Proje Detayı' }}
                        </h2>
                        <div class="project-description">
                            {!! $projectsdetails->description ?? '<p>Proje açıklaması mevcut değil.</p>' !!}
                        </div>
                    </div>
                </main>
                <aside class="col-lg-4">
                    <div class="project-sidebar">
                        <!-- Project Details Card -->
                        <div class="sidebar-card animate-on-scroll">
                            <h3 class="sidebar-title">
                                <i class="fas fa-clipboard-list me-2"></i>Proje Detayları
                            </h3>
                            <table class="project-details-table">
                                <tr>
                                    <th scope="row">
                                        <i class="fas fa-calendar-alt me-2"></i>Başlangıç Tarihi:
                                    </th>
                                    <td>{{ \Carbon\Carbon::parse($projectsdetails->baslangic_tarihi)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <i class="fas fa-calendar-check me-2"></i>Bitiş Tarihi:
                                    </th>
                                    <td>{{ \Carbon\Carbon::parse($projectsdetails->bitis_tarihi)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <i class="fas fa-building me-2"></i>İlgili Kurum:
                                    </th>
                                    <td>{{ $projectsdetails->ilgili_kurum ?? 'Belirtilmemiş' }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <i class="fas fa-tasks me-2"></i>Proje Kapsamı:
                                    </th>
                                    <td>{{ $projectsdetails->proje_kapsami ?? 'Belirtilmemiş' }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <i class="fas fa-map-marker-alt me-2"></i>Konum:
                                    </th>
                                    <td>{{ $projectsdetails->yer ?? 'Belirtilmemiş' }}</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Quick Actions Card -->
                        <div class="sidebar-card animate-on-scroll">
                            <h3 class="sidebar-title">
                                <i class="fas fa-rocket me-2"></i>Hızlı İşlemler
                            </h3>
                            <div class="d-grid gap-2">
                                <a href="{{ route('home.projects') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Tüm Projeler
                                </a>
                                <a href="{{ route('home.contactpage') }}" class="btn btn-primary">
                                    <i class="fas fa-envelope me-2"></i>İletişime Geç
                                </a>
                                <a href="{{ route('home.services') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-cogs me-2"></i>Hizmetlerimiz
                                </a>
                            </div>
                        </div>

                        <!-- Project Status Card -->
                        <div class="sidebar-card animate-on-scroll">
                            <h3 class="sidebar-title">
                                <i class="fas fa-chart-line me-2"></i>Proje Durumu
                            </h3>
                            <div class="project-status">
                                @php
                                $startDate = \Carbon\Carbon::parse($projectsdetails->baslangic_tarihi);
                                $endDate = \Carbon\Carbon::parse($projectsdetails->bitis_tarihi);
                                $now = \Carbon\Carbon::now();
                                $totalDays = $startDate->diffInDays($endDate);
                                $elapsedDays = $startDate->diffInDays($now);
                                $progress = $totalDays > 0 ? min(100, max(0, ($elapsedDays / $totalDays) * 100)) : 0;
                                
                                if ($now < $startDate) {
                                    $status = 'Başlamadı';
                                    $statusClass = 'warning';
                                    $statusIcon = 'fas fa-clock';
                                } elseif ($now > $endDate) {
                                    $status = 'Tamamlandı';
                                    $statusClass = 'success';
                                    $statusIcon = 'fas fa-check-circle';
                                } else {
                                    $status = 'Devam Ediyor';
                                    $statusClass = 'info';
                                    $statusIcon = 'fas fa-play-circle';
                                }
                                @endphp
                                
                                <div class="status-info mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="{{ $statusIcon }} me-2 text-{{ $statusClass }}"></i>
                                        <span class="fw-semibold text-{{ $statusClass }}">{{ $status }}</span>
                                    </div>
                                    <div class="progress progress-custom">
                                        <div class="progress-bar bg-{{ $statusClass }} progress-animated" 
                                             role="progressbar" 
                                             data-progress="{{ $progress }}"
                                             aria-valuenow="{{ $progress }}" 
                                             aria-valuemin="0" 
                                             aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small class="text-muted mt-2 d-block">
                                        İlerleme: {{ number_format($progress, 1) }}%
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- Projects End -->
    <!-- end of hizmetler services -->

</div>


@endsection

@section('scripts')

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper for main gallery
    const mainSwiper = new Swiper('.product-large-slider', {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        thumbs: {
            swiper: thumbSwiper,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });

    // Initialize Swiper for thumbnail gallery
    const thumbSwiper = new Swiper('.product-thumbnail-slider', {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            640: {
                slidesPerView: 5,
            },
            768: {
                slidesPerView: 6,
            },
            1024: {
                slidesPerView: 8,
            },
        }
    });

    // Connect the two swipers
    mainSwiper.thumbs.swiper = thumbSwiper;
    thumbSwiper.controller.control = mainSwiper;

    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Image zoom effect
    const galleryImages = document.querySelectorAll('.product-large-slider img');
    galleryImages.forEach(img => {
        img.addEventListener('click', function() {
            // Create modal for full-size image viewing
            const modal = document.createElement('div');
            modal.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.9);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 10000;
                cursor: pointer;
            `;
            
            const modalImg = document.createElement('img');
            modalImg.src = this.src;
            modalImg.style.cssText = `
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
                border-radius: 10px;
            `;
            
            modal.appendChild(modalImg);
            document.body.appendChild(modal);
            
            modal.addEventListener('click', function() {
                document.body.removeChild(modal);
            });
        });
    });

    // Progress bar animation
    const progressBars = document.querySelectorAll('.progress-bar.progress-animated');
    progressBars.forEach(bar => {
        const progress = bar.getAttribute('data-progress');
        bar.style.width = '0%';
        setTimeout(() => {
            bar.style.transition = 'width 1.5s ease-in-out';
            bar.style.width = progress + '%';
        }, 500);
    });

    // Button hover effects
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });

    // Table row hover effects
    const tableRows = document.querySelectorAll('.project-details-table tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });
        
        row.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });

    // Add loading animation for images
    const allImages = document.querySelectorAll('img');
    allImages.forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.5s ease';
    });

    // Smooth scroll for anchor links
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
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.project-hero');
        if (hero) {
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        }
    });

    // Add typing effect to hero title
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                heroTitle.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 50);
            }
        };
        setTimeout(typeWriter, 1000);
    }

    // Add ripple effect to clickable elements
    function createRipple(event) {
        const button = event.currentTarget;
        const circle = document.createElement('span');
        const diameter = Math.max(button.clientWidth, button.clientHeight);
        const radius = diameter / 2;

        circle.style.width = circle.style.height = `${diameter}px`;
        circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
        circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
        circle.classList.add('ripple');

        const ripple = button.getElementsByClassName('ripple')[0];
        if (ripple) {
            ripple.remove();
        }

        button.appendChild(circle);
    }

    const rippleElements = document.querySelectorAll('.btn, .sidebar-card, .swiper-slide');
    rippleElements.forEach(element => {
        element.addEventListener('click', createRipple);
    });
});

// Add CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .btn, .sidebar-card, .swiper-slide {
        position: relative;
        overflow: hidden;
    }
`;
document.head.appendChild(style);
</script>

@endsection