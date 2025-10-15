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
    /* Enhanced Project Images */
    .project-img {
        width: 100%;
        height: 162px;
        object-fit: cover;
        transition: all 0.3s ease;
    }

    /* Hero Section Enhancements */
    .slider {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .slider-video-slide {
        position: relative;
        overflow: hidden;
    }

    .slider-video-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(42, 57, 144, 0.1), rgba(42, 57, 144, 0.3));
        z-index: 1;
    }

    .fullscreen-bg {
        width: 100%;
        height: 80vh;
        object-fit: cover;
    }

    /* Enhanced Banner Content */
    .banner-topic {
        font-size: 1.1rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 1rem;
        opacity: 0;
        animation: slideInLeft 1s ease 0.5s forwards;
    }

    .banner-title {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        opacity: 0;
        animation: slideInUp 1s ease 0.8s forwards;
    }

    /* Hero Content Enhancements */
    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-buttons {
        opacity: 0;
        animation: slideInUp 1s ease 1.1s forwards;
    }

    .hero-buttons .btn {
        margin-bottom: 0.5rem;
    }

    /* Slider Navigation Buttons */
    .slider-nav-btn {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(42, 57, 144, 0.1);
    }

    .slider-nav-btn:hover {
        background: #2a3990;
        color: white;
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(42, 57, 144, 0.3);
    }

    .slider-nav-btn i {
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

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

    /* Services Section Enhancements */
    .service-post {
        transition: all 0.4s ease;
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .service-post::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(42, 57, 144, 0.1), transparent);
        transition: left 0.6s ease;
    }

    .service-post:hover::before {
        left: 100%;
    }

    .service-post:hover {
        transform: translateY(-15px);
        border-color: #2a3990;
        box-shadow: 0 20px 40px rgba(42, 57, 144, 0.25);
    }

    .service-icon {
        transition: all 0.3s ease;
    }

    .service-post:hover .service-icon svg {
        transform: scale(1.3) rotate(10deg);
        color: #2a3990 !important;
    }

    .service-title {
        transition: all 0.3s ease;
    }

    .service-post:hover .service-title {
        color: #2a3990 !important;
        transform: translateY(-2px);
    }

    .service-arrow {
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }

    .service-post:hover .service-arrow {
        opacity: 1;
        transform: translateX(0);
    }

    /* Section Header Enhancements */
    .section-header {
        position: relative;
    }

    .section-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
        margin-top: 1rem;
    }

    /* About Section Enhancements */
    .about-content {
        position: relative;
        padding: 2rem;
    }

    .about-content::before {
        content: '';
        position: absolute;
        top: -20px;
        left: -20px;
        right: -20px;
        bottom: -20px;
        background: linear-gradient(135deg, rgba(42, 57, 144, 0.05), rgba(42, 57, 144, 0.1));
        border-radius: 20px;
        z-index: -1;
    }

    .section-badge {
        display: inline-block;
    }

    .about-text {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #666;
    }

    .stat-item {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        border-color: #2a3990;
        box-shadow: 0 10px 20px rgba(42, 57, 144, 0.1);
    }

    .stat-number {
        font-size: 2.5rem;
        line-height: 1;
    }

    .stat-label {
        font-size: 0.9rem;
        font-weight: 500;
    }

    .about-gallery {
        position: relative;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .gallery-item img {
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    /* Projects Section Enhancements */
    .project-card {
        transition: all 0.3s ease;
    }

    .project-content {
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.4s ease;
        position: relative;
        height: 250px;
    }

    .project-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.4s ease;
    }

    .project-overlay {
        background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.8) 100%);
        opacity: 0;
        transition: all 0.3s ease;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-card:hover {
        transform: translateY(-10px);
    }

    .project-card:hover .project-img {
        transform: scale(1.1);
    }

    .project-description {
        transform: translateY(20px);
        transition: all 0.3s ease;
    }

    .project-card:hover .project-description {
        transform: translateY(0);
    }

    /* CTA Section Enhancements */
    #cta {
        position: relative;
        overflow: hidden;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .cta-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(42, 57, 144, 0.85), rgba(42, 57, 144, 0.7));
        z-index: 1;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .typing-text {
        display: inline-block;
    }

    .cta-buttons {
        opacity: 0;
        animation: slideInUp 1s ease 1.5s forwards;
    }

    .cta-buttons .btn {
        margin-bottom: 0.5rem;
    }

    /* Typing Animation */
    .cursor {
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }

    /* References Section Enhancements */
    .references-carousel {
        position: relative;
    }

    .testimonial-item {
        padding: 0 15px;
    }

    .reference-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        transition: all 0.4s ease;
        border: 2px solid #e9ecef;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        height: 180px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .reference-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(42, 57, 144, 0.05), transparent);
        transition: left 0.6s ease;
    }

    .reference-card:hover::before {
        left: 100%;
    }

    .reference-card:hover {
        transform: translateY(-8px);
        border-color: #2a3990;
        box-shadow: 0 15px 35px rgba(42, 57, 144, 0.15);
        background: #fafbfc;
    }

    .reference-logo {
        margin-bottom: 1rem;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 2;
    }

    .ref-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: all 0.3s ease;
        filter: grayscale(80%) brightness(0.9);
        opacity: 0.8;
    }

    .reference-card:hover .ref-img {
        transform: scale(1.05);
        filter: grayscale(0%) brightness(1);
        opacity: 1;
    }

    .reference-name {
        font-weight: 600;
        color: #333;
        margin: 0;
        font-size: 0.9rem;
        position: relative;
        z-index: 2;
    }

    /* Contact Section Enhancements */
    .contact-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(42, 57, 144, 0.8), rgba(42, 57, 144, 0.6));
    }

    .contact-cards {
        position: relative;
        z-index: 2;
    }

    .contact-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        transition: all 0.4s ease;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .contact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        background: rgba(255, 255, 255, 1);
        border-color: #2a3990;
    }

    .contact-icon {
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .contact-card:hover .contact-icon svg {
        transform: scale(1.2);
        color: #2a3990 !important;
    }

    .contact-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .contact-detail {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Background Images */
    .cta-bg {
        background-image: url('{{ asset($about_birtes->poster_5) }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .contact-bg {
        background-image: url('{{ asset("assets/site/img/contact_map.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Button Enhancements */
    .btn-primary {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border: none;
        border-radius: 50px;
        padding: 12px 30px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(42, 57, 144, 0.3);
    }

    /* Override Bootstrap button hover effects */
    .btn:hover {
        color: inherit !important;
        background-color: inherit !important;
        border-color: inherit !important;
    }

    .btn-primary:hover {
        color: white !important;
        background: linear-gradient(135deg, #2a3990, #1e2a6b) !important;
        border-color: transparent !important;
    }

    .btn-outline-light:hover {
        color: #000 !important;
        background-color: #f8f9fa !important;
        border-color: #f8f9fa !important;
    }

    /* Section Spacing and Animations */
    section {
        position: relative;
        overflow: hidden;
    }

    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive Enhancements */
    @media (max-width: 768px) {
        .banner-title {
            font-size: 2.5rem;
        }
        
        .service-post {
            margin-bottom: 1rem;
        }
        
        .project-content {
            margin-bottom: 1rem;
        }
    }

    /* Loading Animation */
    @keyframes loader-rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* Scroll Animations */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .animate-on-scroll.animated {
        opacity: 1;
        transform: translateY(0);
    }
</style>



@endsection

@section('content')

<div class="main-body container-xxl bg-white position-relative rounded-4 p-0">

    <section id="slider" class="pt-5 px-3">
        <div class="swiper slider position-relative rounded-3">
            <div class="swiper-wrapper">
                @foreach ($homebanner as $banner)
                @if ($banner->placefor === 'mp4' && !empty($banner->videos_mp4))
                <div class="swiper-slide slider-video-slide">
                    <video class="fullscreen-bg"
                        src="{{ Storage::url($banner->videos_mp4) }}"
                        muted playsinline autoplay loop>
                    </video>
                    <div class="video-tracker"></div>
                    
                </div>
                @elseif ($banner->placefor === 'png' && !empty($banner->photos_img))
                <div class="swiper-slide d-flex"
                    style="background-image: url('{{ Storage::url($banner->photos_img) }}'); 
                        background-size: cover; 
                        background-repeat: no-repeat; 
                        height: 80vh; 
                        background-position: center;">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-xl-6 col-lg-8">
                                <div class="hero-content">
                                    
                                   
                                    <p class="text-white fs-5 mb-4 opacity-90" style="visibility: hidden;">
                                        Profesyonel mühendislik çözümleri ile hayallerinizi gerçeğe dönüştürüyoruz
                                    </p>
                                    <div class="hero-buttons">
                                        <a href="{{ route('home.services') }}" class="btn btn-primary me-3">
                                            <i class="fas fa-cogs me-2"></i>Hizmetlerimiz
                                        </a>
                                        <a href="{{ route('home.about') }}" class="btn btn-outline-light">
                                            <i class="fas fa-info-circle me-2"></i>Hakkımızda
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="swiper-slide d-flex"
                    style="background: linear-gradient(135deg, #2a3990, #1e2a6b); height:80vh;">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col-xl-6 col-lg-8">
                                <div class="hero-content">
                                    <h6 class="banner-topic text-white mb-3">
                                        <span class="text-primary fw-bold">| </span> Birtes Mühendislik
                                    </h6>
                                    <h1 class="banner-title text-white mb-4">
                                        <span class="text-primary">Birtes</span> Mühendislik
                                    </h1>
                                    <p class="text-white fs-5 mb-4 opacity-90">
                                        Profesyonel mühendislik çözümleri ile hayallerinizi gerçeğe dönüştürüyoruz
                                    </p>
                                    <div class="hero-buttons">
                                        <a href="{{ route('home.services') }}" class="btn btn-primary me-3">
                                            <i class="fas fa-cogs me-2"></i>Hizmetlerimiz
                                        </a>
                                        <a href="{{ route('home.about') }}" class="btn btn-outline-light">
                                            <i class="fas fa-info-circle me-2"></i>Hakkımızda
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

            <!-- Navigation Buttons -->
            <div class="position-absolute top-50 end-0 translate-middle-y z-2 d-xl-flex d-none m-auto me-0 me-md-5 main-slider-button-next">
                <div class="slider-nav-btn">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="position-absolute top-50 start-0 translate-middle-y z-2 d-xl-flex d-none m-auto ms-0 ms-md-5 main-slider-button-prev">
                <div class="slider-nav-btn">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>

            <!-- Pagination -->
            <div class="slider-pagination swiper-pagination pb-4 d-block d-xl-none"></div>
        </div>
    </section>


    <section id="services" class="pt-5 pb-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <div class="section-header animate-on-scroll">
                    <h3 class="display-6 fw-bold special-title mb-3">Hizmetlerimiz</h3>
                    <p class="lead text-muted">Profesyonel mühendislik hizmetlerimizle projelerinizi hayata geçiriyoruz</p>
                    <div class="section-divider mx-auto"></div>
                </div>
            </div>

            @php
            $icons = [
            'Sıhhı Tesisat' => 'plumber',
            'Isıtma Tesisatı' => 'water-heater',
            'Soğutma Sistemleri' => 'water',
            'Endüstriyel Tesisat' => 'plumbing',
            'Yangın Tesisatı' => 'gas',
            'Havalandırma Sistemleri' => 'air',
            'Yangından Korunma Sistemleri' => 'fire',
            'İzolasyon Sistemleri' => 'insulation',
            'Doğal Gaz Sistemleri' => 'gas',
            'Merkezi Klima Sistemleri VRF' => 'air',
            'Zayıf Akım Sistemleri' => 'electric',
            'Mekanik Tesisat Sistemleri' => 'mechanical',
            ];
            $defaultIcon = 'plumber';
            $maxDesktop = 8;
            $maxMobile = 4;
            @endphp

            <div class="row justify-content-center d-none d-md-flex">
                @foreach($services->take($maxDesktop) as $index => $product)
                @php
                $icon = $icons[$product->title] ?? $defaultIcon;
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex">
                    <div class="service-post text-center p-4 bg-white rounded-4 shadow-sm w-100 d-flex flex-column justify-content-center align-items-center animate-on-scroll" 
                         style="min-height: 200px;" data-delay="{{ $index * 100 }}">
                        <a href="{{ route('home.services') }}" class="text-decoration-none text-dark w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="service-icon mb-3">
                                <svg class="text-primary" width="60" height="60">
                                    <use xlink:href="#{{ $icon }}"></use>
                                </svg>
                            </div>
                            <h6 class="mb-0 fw-semibold service-title">{{ $product->title }}</h6>
                            <div class="service-arrow mt-2">
                                <i class="fas fa-arrow-right text-primary"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @if($loop->iteration == $maxMobile)
                <div class="w-100 d-md-none"></div>
                @endif
                @endforeach
            </div>

            {{-- Mobile only section to show only 4 products --}}
            <div class="row justify-content-center d-md-none">
                @foreach($services->take($maxMobile) as $index => $product)
                @php
                $icon = $icons[$product->title] ?? $defaultIcon;
                @endphp
                <div class="col-6 mb-4 d-flex">
                    <div class="service-post text-center p-3 bg-white rounded-4 shadow-sm w-100 d-flex flex-column justify-content-center align-items-center animate-on-scroll" 
                         style="min-height: 160px;" data-delay="{{ $index * 100 }}">
                        <a href="{{ route('home.services') }}" class="text-decoration-none text-dark w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="service-icon mb-2">
                                <svg class="text-primary" width="40" height="40">
                                    <use xlink:href="#{{ $icon }}"></use>
                                </svg>
                            </div>
                            <h6 class="mb-0 fw-semibold service-title" style="font-size: 0.9rem;">{{ $product->title }}</h6>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('home.services') }}" class="btn btn-primary px-5 py-3 rounded-pill animate-on-scroll">
                    <i class="fas fa-arrow-right me-2"></i>Tümünü Gör
                </a>
            </div>
        </div>
    </section>




    <section id="about" class="py-5">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content animate-on-scroll">
                            <div class="section-badge mb-3">
                                <span class="badge bg-primary px-3 py-2 rounded-pill">
                                    <i class="fas fa-info-circle me-2"></i>HAKKIMIZDA
                                </span>
                            </div>

                            <div class="h-100">
                                <h1 class="display-5 fw-bold mb-4">
                                    Birtes <span class="text-primary">Mühendislik</span>
                                </h1>

                                <div class="about-text mb-4">
                                    {!! $about_birtes->about_Text !!}
                                </div>

                                <div class="about-stats mb-4">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="stat-item text-center p-3 bg-light rounded-3">
                                                <div class="stat-number text-primary fw-bold fs-3">20+</div>
                                                <div class="stat-label text-muted">Yıllık Deneyim</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="stat-item text-center p-3 bg-light rounded-3">
                                                <div class="stat-number text-primary fw-bold fs-3">200+</div>
                                                <div class="stat-label text-muted">Tamamlanan Proje</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="btn btn-primary px-4 py-3 rounded-pill" href="{{ route('home.about') }}">
                                    <i class="fas fa-arrow-right me-2"></i>Devamını Oku
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="about-gallery animate-on-scroll">
                            <div class="row g-3">
                                @if(!empty($about_birtes->poster_1))
                                <div class="col-6">
                                    <div class="gallery-item">
                                        <img class="img-fluid rounded-4 shadow-sm" 
                                             src="{{ asset($about_birtes->poster_1) }}"
                                             alt="About Us Image 1"
                                             style="margin-top: 25%;">
                                    </div>
                                </div>
                                @endif

                                @if(!empty($about_birtes->poster_2))
                                <div class="col-6">
                                    <div class="gallery-item">
                                        <img class="img-fluid rounded-4 shadow-sm" 
                                             src="{{ asset($about_birtes->poster_2) }}"
                                             alt="About Us Image 2">
                                    </div>
                                </div>
                                @endif

                                @if(!empty($about_birtes->poster_3))
                                <div class="col-6">
                                    <div class="gallery-item">
                                        <img class="img-fluid rounded-4 shadow-sm" 
                                             src="{{ asset($about_birtes->poster_3) }}"
                                             alt="About Us Image 3"
                                             style="width: 60%;">
                                    </div>
                                </div>
                                @endif

                                @if(!empty($about_birtes->poster_4))
                                <div class="col-6">
                                    <div class="gallery-item">
                                        <img class="img-fluid rounded-4 shadow-sm" 
                                             src="{{ asset($about_birtes->poster_4) }}"
                                             alt="About Us Image 4"
                                             style="width: 80%;">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="projects" class="py-5"
        style="background: linear-gradient(135deg, #2a3990, #1e2a6b); border-top-left-radius: 60px; border-top-right-radius: 60px;">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-lg-8">
                    <div class="section-header animate-on-scroll">
                        <div class="section-badge mb-3">
                            <span class="badge bg-white text-primary px-3 py-2 rounded-pill">
                                <i class="fas fa-project-diagram me-2"></i>PROJELERİMİZ
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold text-white mb-3">Ne Yaptık?</h2>
                        <p class="lead text-white-50">Başarıyla tamamladığımız projelerimizi keşfedin</p>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-light px-4 py-3 rounded-pill animate-on-scroll" href="{{ route('home.projects') }}">
                        <i class="fas fa-arrow-right me-2"></i>Tümünü İncele
                    </a>
                </div>
            </div>

            <div class="row g-4">
                @foreach($projects as $index => $project)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="project-card animate-on-scroll" data-delay="{{ $index * 100 }}">
                        <div class="project-content position-relative overflow-hidden rounded-4">
                            <img class="project-img img-fluid w-100"
                                src="{{ $project->poster ? asset($project->poster) : asset('assets/site/img/default-project.jpg') }}"
                                alt="{{ $project->title }}">
                            
                            <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end">
                                <div class="project-description p-4 w-100">
                                    <h5 class="text-white fw-bold mb-2">{{ $project->title }}</h5>
                                    <a href="{{ route('home.projectsdetail', $project->slug) }}"
                                        class="btn btn-outline-light btn-sm rounded-pill">
                                        <i class="fas fa-arrow-right me-1"></i>Detayı Gör
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="cta" class="py-5 position-relative overflow-hidden cta-bg">
        <div class="cta-overlay"></div>
        <div class="container py-5 position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="cta-content animate-on-scroll">
                        <div class="cta-badge mb-4">
                            <span class="badge bg-white text-primary px-4 py-2 rounded-pill">
                                <i class="fas fa-star me-2"></i>VİZYONUMUZ
                            </span>
                        </div>

                        <h2 class="display-4 fw-bold text-white mb-4">
                            <span class="typing-text">
                                <span id="before"></span>
                                <span id="typed-word"></span>
                                <span id="after">Mühendislik</span>
                            </span>
                            <span class="cursor">|</span>
                        </h2>

                        <p class="lead text-white mb-5 opacity-90">
                            {!! $storylinedescription->storyline_description !!}
                        </p>

                        <div class="cta-buttons">
                            <a class="btn btn-primary btn-lg px-5 py-3 rounded-pill me-3" href="{{ route('home.about') }}">
                                <i class="fas fa-building me-2"></i>Firma Profili
                            </a>
                            <a class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill" href="{{ route('home.contactpage') }}">
                                <i class="fas fa-phone me-2"></i>İletişime Geç
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="references" class="py-5 bg-light">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="section-header animate-on-scroll">
                        <div class="section-badge mb-3">
                            <span class="badge bg-primary px-3 py-2 rounded-pill">
                                <i class="fas fa-handshake me-2"></i>ÇÖZÜM ORTAKLARIMIZ
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold mb-3">Güvenilir İş Ortaklarımız</h2>
                        <p class="lead text-muted">Birlikte çalıştığımız değerli iş ortaklarımız</p>
                        <div class="section-divider mx-auto"></div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="references-carousel animate-on-scroll">
                            <div class="owl-carousel testimonial-carousel">
                                @foreach($references as $reference)
                                <div class="testimonial-item">
                                    <div class="reference-card">
                                        <div class="reference-logo">
                                            <img class="ref-img" src="{{ asset($reference->photos_img) }}" alt="{{ $reference->name }}">
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a class="btn btn-primary px-5 py-3 rounded-pill animate-on-scroll" href="{{ route('home.references') }}">
                        <i class="fas fa-arrow-right me-2"></i>Tüm İş Ortaklarımızı Gör
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="py-5 position-relative contact-bg">
        <div class="contact-overlay"></div>
        <div class="container py-5 position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <div class="section-header animate-on-scroll">
                            <div class="section-badge mb-3">
                                <span class="badge bg-white text-primary px-3 py-2 rounded-pill">
                                    <i class="fas fa-phone me-2"></i>İLETİŞİM
                                </span>
                            </div>
                            <h2 class="display-5 fw-bold text-white mb-3">Bizimle İletişime Geçin</h2>
                            <p class="lead text-white-50">Projeleriniz için profesyonel çözümler sunmaya hazırız</p>
                        </div>
                    </div>

                    <div class="contact-cards animate-on-scroll">
                        @php
                        $platformIcons = [
                        'ofisadres' => 'location',
                        'eposta' => 'email',
                        'ofistelefon' => 'phone',
                        ];
                        $defaultIcon = 'contact';

                        $labels = [
                        'ofisadres' => 'Adres',
                        'eposta' => 'E-posta',
                        'ofistelefon' => 'Telefon',
                        ];

                        $allowedPlatforms = ['ofisadres', 'eposta', 'ofistelefon'];
                        @endphp

                        <div class="row g-4">
                            @foreach ($contacts as $index => $contact)
                            @if (in_array($contact->platform, $allowedPlatforms))
                            @php
                            $icon = $platformIcons[$contact->platform] ?? $defaultIcon;
                            $label = $labels[$contact->platform] ?? ucfirst($contact->platform);
                            @endphp
                            <div class="col-md-4">
                                <div class="contact-card" data-delay="{{ $index * 100 }}">
                                    <div class="contact-icon">
                                        <svg class="text-primary" width="40" height="40">
                                            <use xlink:href="#{{ $icon }}"></use>
                                        </svg>
                                    </div>
                                    <div class="contact-info">
                                        <h6 class="contact-label">{{ $label }}</h6>
                                        <p class="contact-detail">{{ $contact->username }}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <a class="btn btn-primary btn-lg px-5 py-3 rounded-pill animate-on-scroll" href="{{ route('home.contactpage') }}">
                            <i class="fas fa-envelope me-2"></i>İletişim Formu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                
                // Add staggered animation for elements with data-delay
                const delay = entry.target.getAttribute('data-delay');
                if (delay) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, parseInt(delay));
                }
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Typing animation for CTA section
    const typedWord = document.getElementById('typed-word');
    if (typedWord) {
        const words = ['Güvenilir', 'Kaliteli', 'Modern'];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeWriter() {
            const currentWord = words[wordIndex];
            
            if (isDeleting) {
                typedWord.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typedWord.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && charIndex === currentWord.length) {
                typeSpeed = 2000; // Pause at end
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500; // Pause before next word
            }

            setTimeout(typeWriter, typeSpeed);
        }

        // Start typing animation after a delay
        setTimeout(typeWriter, 2000);
    }

    // Enhanced Owl Carousel for references
    if (document.querySelector('.testimonial-carousel')) {
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            },
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ]
        });
    }

    // Smooth scrolling for anchor links
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

    

    // Add loading animation completion
    const pageLoader = document.getElementById('page-loader');
    if (pageLoader) {
        setTimeout(() => {
            pageLoader.style.opacity = '0';
            setTimeout(() => {
                pageLoader.style.display = 'none';
            }, 500);
        }, 1500);
    }

    // Counter animation for stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
            const target = parseInt(counter.textContent.replace(/\D/g, ''));
            const increment = target / 100;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current) + '+';
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + '+';
                }
            };
            
            updateCounter();
        });
    }

    // Trigger counter animation when stats section is visible
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('.about-stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
});
</script>

@endsection