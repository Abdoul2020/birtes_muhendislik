@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Hizmetler </title>
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
    /* Enhanced Services Page Styles */
    
    /* Hero Section Enhancements */
    .services-hero {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        position: relative;
        overflow: hidden;
    }
    
    .services-hero::before {
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
        z-index: 0;
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
    
    /* Service Cards Enhancements */
    .service-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 2px solid transparent;
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(42, 57, 144, 0.1), transparent);
        transition: left 0.6s ease;
        z-index: 1;
    }
    
    .service-card:hover::before {
        left: 100%;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(42, 57, 144, 0.2);
        border-color: #2a3990;
    }
    
    .service-image {
        position: relative;
        overflow: hidden;
        height: 220px;
    }
    
    .service-image img {
        transition: transform 0.4s ease;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .service-card:hover .service-image img {
        transform: scale(1.1);
    }
    
    .service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(42, 57, 144, 0.8) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .service-card:hover .service-overlay {
        opacity: 1;
    }
    
    .service-overlay-content {
        color: white;
        text-align: center;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }
    
    .service-card:hover .service-overlay-content {
        transform: translateY(0);
    }
    
    .service-content {
        padding: 1.5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        position: relative;
        z-index: 2;
    }
    
    .service-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #2a3990;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .service-card:hover .service-title {
        transform: translateX(5px);
    }
    
    .service-title svg {
        transition: all 0.3s ease;
        margin-right: 0.5rem;
    }
    
    .service-card:hover .service-title svg {
        transform: scale(1.2) rotate(5deg);
    }
    
    .service-description {
        color: #666;
        line-height: 1.6;
        flex-grow: 1;
    }
    
    .service-description p {
        margin-bottom: 0.5rem;
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
    
    /* Contact Section Enhancements */
    .contact-section {
        background: linear-gradient(135deg, rgba(42, 57, 144, 0.9), rgba(42, 57, 144, 0.7));
        position: relative;
    }
    
    .contact-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ asset("assets/site/img/contact_map.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.3;
        z-index: 1;
    }
    
    .contact-content {
        position: relative;
        z-index: 2;
    }
    
    .contact-item {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
    }
    
    .contact-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        background: rgba(255, 255, 255, 1);
        border-color: #2a3990;
    }
    
    .contact-item svg {
        transition: all 0.3s ease;
        margin-right: 1rem;
    }
    
    .contact-item:hover svg {
        transform: scale(1.2);
        color: #2a3990 !important;
    }
    
    .contact-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 0.25rem;
    }
    
    .contact-detail {
        color: #666;
        margin: 0;
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
        
        .service-card {
            margin-bottom: 1.5rem;
        }
        
        .service-content {
            padding: 1rem;
        }
    }
    
    /* Loading Animation */
    .service-card {
        animation: fadeInUp 0.6s ease forwards;
    }
    
    .service-card:nth-child(1) { animation-delay: 0.1s; }
    .service-card:nth-child(2) { animation-delay: 0.2s; }
    .service-card:nth-child(3) { animation-delay: 0.3s; }
    .service-card:nth-child(4) { animation-delay: 0.4s; }
    .service-card:nth-child(5) { animation-delay: 0.5s; }
    .service-card:nth-child(6) { animation-delay: 0.6s; }
    
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

  <section id="hero" class="services-hero py-5">
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="hero-content">
            <h1 class="hero-title mt-5">
              <i class="fas fa-cogs me-3"></i>Hizmetlerimiz
            </h1>
            
            <nav class="breadcrumb justify-content-center">
              <a class="breadcrumb-item" href="/">
                <i class="fas fa-home me-1"></i>Ana Sayfa
              </a>
              <span class="breadcrumb-item active" aria-current="page">
                <i class="fas fa-cogs me-1"></i>Hizmetler
              </span>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Services Section -->
  <section id="services" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <div class="section-header animate-on-scroll">
          <h2 class="display-5 fw-bold mb-3">Mühendislik Hizmetlerimiz</h2>
          <p class="lead text-muted">Profesyonel ekibimizle sunduğumuz kapsamlı mühendislik çözümleri</p>
          <div class="section-divider mx-auto"></div>
        </div>
      </div>

      @php
        $iconMap = [
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
        $defaultIcon = 'install-option';
      @endphp

      <div class="row g-4">
        @forelse($services as $index => $service)
          @php
            $icon = $iconMap[$service->title] ?? $defaultIcon;
          @endphp
          <div class="col-md-6 col-lg-4">
            <div class="service-card animate-on-scroll" data-delay="{{ $index * 100 }}">
              <div class="service-image">
                <img
                  src="{{ asset($service->poster) }}"
                  alt="{{ $service->title }}"
                  class="img-fluid"
                >
                <div class="service-overlay">
                  <div class="service-overlay-content">
                    <h5 class="text-white fw-bold mb-2">{{ $service->title }}</h5>
                  </div>
                </div>
              </div>

              <div class="service-content">
                <h6 class="service-title">
                  <svg width="24" height="24">
                    <use xlink:href="#{{ $icon }}"></use>
                  </svg>
                  {{ $service->title }}
                </h6>
                <div class="service-description">
                  {!! $service->description ?? '<p class="text-muted">Bu hizmet hakkında detaylı bilgi için bizimle iletişime geçin.</p>' !!}
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <div class="text-center py-5">
              <div class="empty-state">
                <i class="fas fa-tools text-muted mb-3" style="font-size: 3rem;"></i>
                <h4 class="text-muted">Henüz hizmet eklenmemiş</h4>
                <p class="text-muted">Yakında hizmetlerimiz burada görünecek.</p>
              </div>
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </section>



  <!-- Contact Section -->
  <section id="contact" class="py-5 contact-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center mb-5">
            <div class="section-header animate-on-scroll">
              <h2 class="display-5 fw-bold text-white mb-3">Bizimle İletişime Geçin</h2>
              <p class="lead text-white-50">Projeleriniz için profesyonel çözümler sunmaya hazırız</p>
            </div>
          </div>

          <div class="contact-content animate-on-scroll">
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
                <div class="contact-item" data-delay="{{ $index * 100 }}">
                  <div class="icon-box">
                    <svg class="text-primary" width="30" height="30">
                      <use xlink:href="#{{ $icon }}"></use>
                    </svg>
                  </div>
                  <div class="text-box">
                    <div class="contact-label">{{ $label }}</div>
                    <div class="contact-detail">{{ $contact->username }}</div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
            </div>

            <div class="text-center mt-5">
              <a class="btn btn-primary btn-lg px-5 py-3 rounded-pill animate-on-scroll" href="{{ route('home.contactpage') }}">
                <i class="fas fa-envelope me-2"></i>İletişim Formu
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Service End -->
  <!-- end of hizmetler services -->
</div>
@endsection

@section('scripts')

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

    // Service card interactions
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

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
        }, 1000);
    }

   

    // Add click animation to service cards
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
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
                setTimeout(typeWriter, 100);
            }
        };
        
        setTimeout(typeWriter, 1000);
    }
});

// Add ripple effect CSS
const style = document.createElement('style');
style.textContent = `
    .service-card {
        position: relative;
        overflow: hidden;
    }
    
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(42, 57, 144, 0.3);
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
    
    .section-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
        margin-top: 1rem;
    }
`;
document.head.appendChild(style);
</script>

@endsection