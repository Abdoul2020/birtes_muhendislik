@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - İletişim </title>
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
    /* Enhanced Contact Page Styles */
    
    /* Hero Section Enhancements */
    .contact-hero {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        position: relative;
        overflow: hidden;
    }
    
    .contact-hero::before {
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
    
    /* Contact Form Enhancements */
    .contact-form-section {
        background: #f8f9fa;
        padding: 4rem 0;
    }
    
    .form-container {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }
    
    .form-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
    }
    
    .form-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2a3990;
        margin-bottom: 1rem;
        position: relative;
    }
    
    .form-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
    }
    
    .form-subtitle {
        color: #666;
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    
    .contact_text_input {
        background: #f8f9fa !important;
        border: 2px solid #e9ecef !important;
        border-radius: 10px !important;
        padding: 15px 20px !important;
        font-size: 1rem;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .contact_text_input:focus {
        background: white !important;
        border-color: #2a3990 !important;
        box-shadow: 0 0 0 3px rgba(42, 57, 144, 0.1) !important;
        outline: none !important;
    }
    
    .contact_text_input::placeholder {
        color: #999;
        font-weight: 500;
    }
    
    .form-select {
        background: #f8f9fa !important;
        border: 2px solid #e9ecef !important;
        border-radius: 10px !important;
        padding: 15px 20px !important;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form-select:focus {
        background: white !important;
        border-color: #2a3990 !important;
        box-shadow: 0 0 0 3px rgba(42, 57, 144, 0.1) !important;
        outline: none !important;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border: none;
        border-radius: 50px;
        padding: 15px 40px;
        font-weight: 600;
        font-size: 1.1rem;
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
    
    /* Contact Info Enhancements */
    .contact-info-section {
        background: white;
        padding: 4rem 0;
    }
    
    .contact-info-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border: 2px solid #f8f9fa;
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .contact-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(42, 57, 144, 0.15);
        border-color: #2a3990;
    }
    
    .office-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
        color: #2a3990;
        border-left: 5px solid #2a3990;
        padding-left: 15px;
    }
    
    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .contact-list li {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .contact-list li:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }
    
    .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #2a3990;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }
    
    .contact-list li:hover .icon-circle {
        background: #1e2a6b;
        transform: scale(1.1);
    }
    
    .icon-circle .icon {
        color: white;
        width: 24px;
        height: 24px;
    }
    
    .details .label {
        font-weight: 600;
        color: #333;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .details .text {
        color: #666;
        font-size: 1rem;
        margin-top: 0.25rem;
    }
    
    /* Map Section Enhancements */
    .map-section {
        background: #f8f9fa;
        padding: 4rem 0;
    }
    
    .map-container {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    #map {
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
        
        .form-container {
            padding: 2rem;
        }
        
        .form-title {
            font-size: 2rem;
        }
        
        .contact-info-card {
            margin-bottom: 2rem;
        }
    }
    
    /* Loading Animation */
    .form-container {
        animation: fadeInUp 0.6s ease forwards;
    }
    
    .contact-info-card {
        animation: fadeInUp 0.6s ease forwards;
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
</style>

@endsection



@section('content')


<div class="main-body container-xxl bg-white position-relative rounded-4 p-0 mb-lg-5">

    <section id="hero" class="contact-hero py-5">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hero-content">
                        <h1 class="hero-title mt-5">
                            <i class="fas fa-phone me-3"></i>İletişim
                        </h1>
                        <p class="lead text-white mb-4 opacity-90">
                            Projeleriniz için profesyonel çözümler sunmaya hazırız. Bizimle iletişime geçin.
                        </p>
                        <nav class="breadcrumb justify-content-center">
                            <a class="breadcrumb-item" href="/">
                                <i class="fas fa-home me-1"></i>Ana Sayfa
                            </a>
                            <span class="breadcrumb-item active" aria-current="page">
                                <i class="fas fa-phone me-1"></i>İletişim
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- hizmetler services -->


    <!-- Service Start -->

    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="form-container animate-on-scroll">
                        <h3 class="form-title">İletişim Formu</h3>
                        <p class="form-subtitle">Bizimle iletişime geçin ve projeleriniz için profesyonel çözümler alın.</p>
                    <form class="contact-form row mt-5 mt-lg-0">
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
                            <input type="text" name="name" placeholder="İsim ve Soyisim"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                required="">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
                            <input type="email" name="email" placeholder="E-Posta"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                required="">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
                            <input type="text" name="phone" placeholder="Telefon"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                required="">
                        </div>

                        <div class="col-md-12 col-sm-12 mb-5">
                            <select
                                class="form-select focus-transparent form-control w-100 rounded-0 border-0 ps-3 py-2 text-body contact_text_input"
                                aria-invalid="false" name="choose">
                                <option value="Select Your Service"> Talep ettiğiniz hizmet</option>
                                <option value="1"> Havalandırma Tesisatı</option>
                                <option value="2"> Yangın Sistemleri</option>

                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <input type="text" name="address" placeholder="Adres"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input">
                        </div>

                        <div class="col-md-6 col-sm-12 mb-5">
                            <select
                                class="form-select focus-transparent form-control w-100 rounded-0 border-0 ps-3 py-2 text-body contact_text_input"
                                aria-invalid="false" name="choose">
                                <option value="Select Your Service">Şehir</option>
                                <option value="Service"> Ankara</option>
                                <option value="Service"> İstanbul</option>
                                <option value="Service"> Konya</option>
                                <option value="Service"> İzmir</option>
                                <option value="Service"> Bursa</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <input type="date" name="date"
                                class="form-control w-100 rounded-0 border-0 px-3 py-2 text-body contact_text_input">
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <input type="time" name="city"
                                class="form-control w-100 rounded-0 border-0 px-3 py-2 text-body contact_text_input">
                        </div>
                        <div class="col-md-12 col-sm-12 mb-5">
                            <textarea class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                rows="6" type="text" name="message" placeholder="Mesaj"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-paper-plane me-2"></i>Gönder
                            </button>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="contact-info-card animate-on-scroll">
                    @php
                    $places = $socialcontact->groupBy('placefor');

                    // Define labels & icons per platform
                    $platformMap = [
                    'instagram' => ['label' => 'Instagram', 'icon' => 'instagram'],
                    'youtube' => ['label' => 'YouTube', 'icon' => 'youtube'],
                    'whatsap' => ['label' => 'WhatsApp', 'icon' => 'whatsap'],
                    'facebook' => ['label' => 'Facebook', 'icon' => 'facebook'],
                    'eposta' => ['label' => 'E-posta', 'icon' => 'email'],
                    'ofistelefon' => ['label' => 'Ofis Telefonu', 'icon' => 'phone'],
                    'ceptelefon' => ['label' => 'Cep Telefonu', 'icon' => 'phone'],
                    'ofisadres' => ['label' => 'Ofis Adres', 'icon' => 'location'],
                    'depoadres' => ['label' => 'Depo Adres', 'icon' => 'location'],
                    ];

                    // Define title per placefor
                    $placeTitle = [
                    1 => 'Ofis',
                    2 => 'Depo',
                    // add more if needed
                    ];
                    @endphp

                    @foreach($places as $placeKey => $items)
                    <div class="{{ ($placeKey == 1 || $placeKey == 2) ? '' : 'mt-5' }}">
                            <h3 class="office-title office-title-{{ $placeKey }}">
                                <i class="fas fa-building me-2"></i>{{ $placeTitle[$placeKey] ?? 'Diğer' }}
                        </h3>
                        <ul class="contact-list">
                            @foreach($items as $item)
                            @php
                            $plat = $item->platform;
                            $info = $platformMap[$plat] ?? ['label' => ucfirst($plat), 'icon' => 'phone'];
                            @endphp

                            @if (in_array($item->platform, ['ofisadres', 'ofistelefon', 'eposta', 'depoadres']))
                            <li>
                                    <div class="icon-circle">
                                    <svg class="icon" width="24" height="24">
                                        <use xlink:href="#{{ $info['icon'] }}"></use>
                                    </svg>
                                </div>
                                <div class="details">
                                        <span class="label">{{ $info['label'] }}</span>
                                    <span class="text">{{ $item->username }}</span>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->
    
    <section class="map-section">
  <div class="container">
            <div class="text-center mb-5">
                <div class="section-header animate-on-scroll">
                    <h2 class="display-5 fw-bold mb-3">Konumumuz</h2>
                    <p class="lead text-muted">Ofisimizi haritada bulun ve bizimle iletişime geçin</p>
                    <div class="section-divider mx-auto"></div>
                </div>
            </div>
            <div class="row">
      <div class="col-lg-12">
                    <div class="map-container animate-on-scroll">
        <div id="map" style="width:100%; height:500px;"></div>
                    </div>
      </div>
    </div>
  </div>
</section>


    <!-- end of hizmetler services -->
</div>

<!-- AIzaSyAox1DoQNX0GiwlLFoqpJHJza7b7y_tw0k -->


@endsection

@section('scripts')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAox1DoQNX0GiwlLFoqpJHJza7b7y_tw0k&callback=initMap" async defer></script>

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
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Form validation and enhancement
    const form = document.querySelector('.contact-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add loading state to button
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Gönderiliyor...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual form handling)
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Gönderildi!';
                submitBtn.classList.remove('btn-primary');
                submitBtn.classList.add('btn-success');
                
                // Reset form after 3 seconds
                setTimeout(() => {
                    form.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.classList.remove('btn-success');
                    submitBtn.classList.add('btn-primary');
                    submitBtn.disabled = false;
                }, 3000);
            }, 2000);
        });
    }

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

    // Add ripple effect to contact list items
    document.querySelectorAll('.contact-list li').forEach(item => {
        item.addEventListener('click', function(e) {
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
});

// Google Maps initialization
function initMap() {
  const center = { lat: 39.8875107, lng: 32.6948657 };

  const map = new google.maps.Map(document.getElementById("map"), {
    center: center,
        zoom: 17,
    styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
                        "color": "#f5f5f5"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
                        "color": "#616161"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
                        "color": "#f5f5f5"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
                        "color": "#c9c9c9"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
                        "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
                        "color": "#e5e5e5"
                    }
                ]
          }
    ]
  });

    // Add a custom marker
    const marker = new google.maps.Marker({
    position: center,
    map: map,
        title: "Birtes Mühendislik",
        icon: {
            url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="18" fill="#2a3990" stroke="#fff" stroke-width="2"/>
                    <path d="M20 8c-4.4 0-8 3.6-8 8 0 6 8 16 8 16s8-10 8-16c0-4.4-3.6-8-8-8zm0 11c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z" fill="#fff"/>
                </svg>
            `),
            scaledSize: new google.maps.Size(40, 40),
            anchor: new google.maps.Point(20, 20)
        }
    });

    // Add info window
    const infoWindow = new google.maps.InfoWindow({
        content: `
            <div style="padding: 10px;">
                <h4 style="margin: 0 0 5px 0; color: #2a3990;">Birtes Mühendislik</h4>
                <p style="margin: 0; color: #666;">Profesyonel mühendislik çözümleri</p>
            </div>
        `
    });

    marker.addListener('click', function() {
        infoWindow.open(map, marker);
    });
}

// Add ripple effect CSS
const style = document.createElement('style');
style.textContent = `
    .contact-list li {
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