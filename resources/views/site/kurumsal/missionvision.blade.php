@extends('site.master')

@section('title','Birtes Mühendislik - Mision & vizyon')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Mision & vizyon </title>
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
    .hero-gradient {
        background: linear-gradient(135deg, #2a3990 0%, #1e2a6b 100%);
        color: white;
    }
    
    .mission-vision-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(42, 57, 144, 0.1);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        height: 100%;
    }
    
    .mission-vision-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(42, 57, 144, 0.15);
    }
    
    .mission-vision-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 2rem;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    
    .value-item {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border-left: 4px solid #2a3990;
    }
    
    .value-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(42, 57, 144, 0.15);
    }
    
    .value-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-bottom: 15px;
    }
    
    .section-title {
        position: relative;
        display: inline-block;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
    }
    
    .quality-policy-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 20px;
        padding: 40px;
        border: 1px solid #dee2e6;
        position: relative;
        overflow: hidden;
    }
    
    .quality-policy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
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
    
    .breadcrumb {
        background: rgba(255,255,255,0.1);
        border-radius: 25px;
        padding: 10px 20px;
        backdrop-filter: blur(10px);
    }
    
    .breadcrumb-item {
        color: rgba(255,255,255,0.8);
    }
    
    .breadcrumb-item.active {
        color: white;
        font-weight: 600;
    }
    
    .breadcrumb-item:not(.active):hover {
        color: white;
    }
</style>
@endsection



@section('content')

<div class="main-body container-xxl bg-white position-relative rounded-4 p-0 mb-lg-5">

    <section id="hero" class="pt-5 px-3">
        <div class="hero-gradient rounded-4 position-relative overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="pt-5 pb-5 text-center">
                        <div class="fade-in">
                            
                            <p class="lead mb-4" style="font-size: 1.2rem; opacity: 0.9;">
                                Misyonumuz, vizyonumuz ve değerlerimizle geleceği şekillendiriyoruz
                            </p>
                            <nav class="breadcrumb justify-content-center">
                                <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                                <span class="breadcrumb-item active" aria-current="page">Hakkımızda</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decorative elements -->
            <div class="position-absolute top-0 end-0" style="opacity: 0.1;">
                <svg width="200" height="200" viewBox="0 0 200 200" fill="none">
                    <circle cx="100" cy="100" r="80" stroke="white" stroke-width="2"/>
                    <circle cx="100" cy="100" r="60" stroke="white" stroke-width="2"/>
                    <circle cx="100" cy="100" r="40" stroke="white" stroke-width="2"/>
                </svg>
            </div>
            <div class="position-absolute bottom-0 start-0" style="opacity: 0.1;">
                <svg width="150" height="150" viewBox="0 0 150 150" fill="none">
                    <polygon points="75,10 140,140 10,140" stroke="white" stroke-width="2" fill="none"/>
                </svg>
            </div>
        </div>
    </section>


    <section id="about-us" class="pt-5 pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="mission-vision-card p-4 fade-in">
                        <div class="mission-vision-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h2 class="section-title text-center mb-4" style="color: #2a3990;">
                            Misyon
                        </h2>
                        <div class="text-center">
                            {!! $about_text->mision !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mission-vision-card p-4 fade-in">
                        <div class="mission-vision-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h2 class="section-title text-center mb-4" style="color: #2a3990;">
                            Vizyon
                        </h2>
                        <div class="text-center">
                            {!! $about_text->vision !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="values" class="pt-5 pb-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold" style="color: #2a3990;">
                    Firma Değerlerimiz
                </h2>
                <p class="lead text-muted">İş yapış şeklimizi belirleyen temel değerlerimiz</p>
            </div>
            
            <div class="values-grid">
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Güvenilirlik</h5>
                    <p class="text-muted mb-0">Müşterilerimize karşı her zaman güvenilir ve şeffaf olmak</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Yenilikçilik</h5>
                    <p class="text-muted mb-0">Sürekli gelişim ve yenilikçi çözümler üretmek</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Dürüstlük</h5>
                    <p class="text-muted mb-0">Tüm iş ilişkilerimizde dürüstlük ve etik değerler</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Verimlilik</h5>
                    <p class="text-muted mb-0">Kaynakları en verimli şekilde kullanarak sonuç almak</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Liderlik</h5>
                    <p class="text-muted mb-0">Sektörde öncü olmak ve liderlik etmek</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Duyarlılık</h5>
                    <p class="text-muted mb-0">Çevreye ve topluma karşı duyarlı olmak</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Dinamik Ekip Ruhu</h5>
                    <p class="text-muted mb-0">Güçlü takım çalışması ve işbirliği</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Sadakat</h5>
                    <p class="text-muted mb-0">Müşterilerimize ve değerlerimize sadık kalmak</p>
                </div>
                
                <div class="value-item fade-in">
                    <div class="value-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h5 class="fw-bold mb-2" style="color: #2a3990;">Müşteri Odaklılık</h5>
                    <p class="text-muted mb-0">Müşteri memnuniyetini her şeyin üstünde tutmak</p>
                </div>
            </div>
        </div>
    </section>

    <section id="quality-policy" class="pt-5 pb-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold" style="color: #2a3990;">
                    Neler Yapıyoruz
                </h2>
                <p class="lead text-muted">Kalite politikamız ve hizmet yaklaşımımız</p>
            </div>

            <div class="quality-policy-card fade-in">
                <div class="row align-items-center">
                    <div class="col-lg-2 text-center mb-4 mb-lg-0">
                        <div class="mission-vision-icon" style="width: 100px; height: 100px; font-size: 2.5rem;">
                            <i class="fas fa-cogs"></i>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="quality-content">
                            {!! $about_text->kalite_polic !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

</div>



@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fade in animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });

    // Add stagger effect to value items
    const valueItems = document.querySelectorAll('.value-item');
    valueItems.forEach((item, index) => {
        item.style.transitionDelay = `${index * 0.1}s`;
    });
});
</script>
@endsection