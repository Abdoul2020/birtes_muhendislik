<style>
/* Enhanced Footer Styles */
.footer_birtes {
    background: linear-gradient(135deg, #2a3990, #1e2a6b) !important;
    position: relative;
    overflow: hidden;
}

.footer_birtes::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.03)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.03)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.footer-content {
    position: relative;
    z-index: 2;
}

.footer-logo {
    transition: all 0.3s ease;
    filter: brightness(1.1);
}

.footer-logo:hover {
    transform: scale(1.05);
    filter: brightness(1.3);
}

.widget-title {
    color: #ffffff !important;
    font-weight: 700 !important;
    font-size: 1.2rem;
    margin-bottom: 1.5rem !important;
    position: relative;
    padding-bottom: 0.75rem !important;
}

.widget-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(135deg, #ffffff, #e0e0e0);
    border-radius: 2px;
}

.menu-list li {
    margin-bottom: 0.75rem !important;
    transition: all 0.3s ease;
}

.menu-list li a {
    color: rgba(255, 255, 255, 0.8) !important;
    text-decoration: none !important;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    position: relative;
    padding-left: 0;
}

.menu-list li a::before {
    content: '';
    position: absolute;
    left: -15px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 2px;
    background: #ffffff;
    transition: all 0.3s ease;
    border-radius: 1px;
}

.menu-list li:hover a {
    color: #ffffff !important;
    padding-left: 15px;
}

.menu-list li:hover a::before {
    width: 10px;
}

.social-links li {
    margin-right: 1rem !important;
    margin-bottom: 1rem;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.social-links a:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    border-color: rgba(255, 255, 255, 0.4);
}

.social-links svg {
    color: #ffffff !important;
    transition: all 0.3s ease;
}

.social-links a:hover svg {
    transform: scale(1.2);
    color: #ffffff !important;
}

.footer-bottom {
    background: rgba(0, 0, 0, 0.2);
    border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.footer-bottom p {
    color: rgba(255, 255, 255, 0.8) !important;
    margin-bottom: 0 !important;
}

.whatsapp-contact {
    display: inline-flex;
    align-items: center;
    background: #25d366;
    color: white !important;
    padding: 8px 16px;
    border-radius: 25px;
    text-decoration: none !important;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    margin-left: 15px;
}

.whatsapp-contact:hover {
    background: #128c7e;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
    color: white !important;
}

.whatsapp-contact i {
    margin-right: 8px;
    font-size: 1rem;
}

.controlza-credit {
    color: rgba(255, 255, 255, 0.7) !important;
    font-size: 0.85rem;
    margin-top: 10px;
}

.controlza-credit a {
    color: #ffffff !important;
    text-decoration: none !important;
    font-weight: 600;
    transition: all 0.3s ease;
}

.controlza-credit a:hover {
    color: #25d366 !important;
    text-shadow: 0 0 10px rgba(37, 211, 102, 0.5);
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-content {
        text-align: center;
    }
    
    .social-links {
        justify-content: center !important;
    }
    
    .widget-title::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .menu-list li:hover a {
        padding-left: 0;
    }
    
    .menu-list li a::before {
        display: none;
    }
    
    .whatsapp-contact {
        margin-left: 0;
        margin-top: 10px;
        display: inline-flex;
    }
}

/* Animation for footer elements */
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

.footer-menu {
    animation: fadeInUp 0.6s ease forwards;
}

.footer-menu:nth-child(1) { animation-delay: 0.1s; }
.footer-menu:nth-child(2) { animation-delay: 0.2s; }
.footer-menu:nth-child(3) { animation-delay: 0.3s; }
</style>

<footer id="footer" class="footer_birtes">
    <div class="container pb-5 pt-5 footer-content">
        <div class="row flex-wrap justify-content-between">
            <div class="col-lg-4 col-md-6 pb-3">
                <div class="footer-menu">
                    <img src="{{ asset('assets/site/img/logo_beyaz_bitest.png') }}" class="footer-logo pb-4" alt="Birtes Mühendislik Logo" style="max-width: 236px;">

                    <div class="social-section">
                        <h6 class="text-white mb-3 fw-semibold">Sosyal Medya</h6>
                        <ul class="social-links d-flex flex-wrap list-unstyled">
                            @foreach ($contacts as $contact)
                            @if (in_array(strtolower($contact->platform), ['facebook', 'instagram', 'youtube']) && !empty($contact->username))
                            <li class="social">
                                <a href="{{ $contact->username }}" target="_blank" rel="noopener noreferrer" title="{{ ucfirst($contact->platform) }}">
                                    <svg width="20" height="20">
                                        <use xlink:href="#{{ strtolower($contact->platform) }}"></use>
                                    </svg>
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        
                
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-3">
                <div class="footer-menu">
                    <h5 class="widget-title">Kurumsal</h5>
                    <ul class="menu-list d-flex flex-column list-unstyled">
                        <li>
                            <a href="{{ route('home.about') }}">Hakkımızda</a>
                        </li>
                        <li>
                            <a href="{{ route('home.mission') }}">Misyon & Vizyon</a>
                        </li>
                        <li>
                            <a href="{{ route('home.mission') }}">Ne Yapıyoruz</a>
                        </li>
                        <li>
                            <a href="{{ route('home.contactpage') }}">İletişim</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-3">
                <div class="footer-menu">
                    <h5 class="widget-title">Hizmetlerimiz</h5>

                    <div class="row">
                        @php
                        $servicesArray = $services->toArray();
                        $totalServices = count($servicesArray);
                        $halfCount = ceil($totalServices / 2);
                        $firstColumn = array_slice($servicesArray, 0, $halfCount);
                        $secondColumn = array_slice($servicesArray, $halfCount);
                        @endphp

                        <div class="col-6">
                            <ul class="menu-list d-flex flex-column list-unstyled">
                                @foreach ($firstColumn as $service)
                                <li>
                                    <a href="{{ route('home.services') }}">{{ $service['title'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="menu-list d-flex flex-column list-unstyled">
                                @foreach ($secondColumn as $service)
                                <li>
                                    <a href="{{ route('home.services') }}">{{ $service['title'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container d-md-flex text-center justify-content-between align-items-center py-4">
            <div>
                <p>© 2025 Tüm Hakları Saklıdır. Birtes Mühendislik</p>
            </div>
            <div>
                <div class="controlza-credit">
                    Made with ❤️ by <a href="https://wa.me/905351035340?text=Merhaba, web tasarım hizmetiniz hakkında bilgi almak istiyorum." target="_blank" rel="noopener noreferrer">Controlza</a>
                </div>
            </div>
        </div>
    </div>
</footer>