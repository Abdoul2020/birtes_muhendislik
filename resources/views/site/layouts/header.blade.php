<header id="header-top" class="d-none d-lg-flex">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-3">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/site/img/logo_beyaz_bitest.png') }}" class="logo img-fluid" style="max-width: 236px;">
            </a>
            @foreach ($contacts as $contact)
            @if ($contact->platform === 'ofistelefon' && !empty($contact->username))
            <p class="phone m-0 fs-5 text-white fw-medium text-capitalize d-flex align-items-center" style="cursor: pointer;">
                <a href="tel:{{ preg_replace('/\s+/', '', $contact->username) }}"
                    class="phone-link d-flex align-items-center text-white text-decoration-none">
                    <svg class="me-2" width="25" height="25">
                        <use xlink:href="#phone"></use>
                    </svg>
                    {{ $contact->username }}
                </a>
            </p>
            @endif
            @endforeach


        </div>
    </div>
</header>

<header id="header">
    <div class="container-lg px-0 px-lg-2">
        <nav id="primary-header" class="navbar navbar-expand-lg bg-light rounded-3 shadow-sm z-2 py-2 py-lg-3">
            <div class="container justify-content-between">
                <div class="d-flex d-lg-none">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/site/img/logo_beyaz_bitest.png') }}" class="logo img-fluid" style="max-width: 236px;">
                    </a>
                </div>

                <button class="navbar-toggler d-flex d-lg-none justify-content-end border-0 shadow-none p-0" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false">
                    <svg class="navbar-icon" width="60" height="60">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="header-bottom offcanvas offcanvas-end" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 mt-3 mb-1">
                        <button type="button" class="btn-close btn-close-black shadow-none" data-bs-dismiss="offcanvas"
                            aria-label="Close" data-bs-target="#bdNavbar"></button>
                    </div>

                    <div class="offcanvas-body d-flex justify-content-lg-end align-items-lg-center">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item border-end py-1 py-lg-0">
                                <a class="nav-link {{ Route::is('home.index') ? 'active' : '' }} p-0" aria-current="page" href="/">Ana Sayfa</a>
                            </li>

                            <li class="nav-item border-end py-1 py-lg-0 dropdown">
                                <a class="nav-link {{ Route::is('home.about') || Route::is('home.mission') ? 'active' : '' }} p-0 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Kurumsal</a>
                                <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                                    <li><a href="{{ route('home.about') }}" class="dropdown-item {{ Route::is('home.about') ? 'active' : '' }}">Hakkımızda </a>
                                    </li>
                                    <li><a href="{{ route('home.mission') }}" class="dropdown-item {{ Route::is('home.mission') ? 'active' : '' }}">Misyon & Vizyon </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item border-end py-1 py-lg-0">
                                <a class="nav-link {{ Route::is('home.services') ? 'active' : '' }} p-0" href="{{ route('home.services') }}">HİZMETLER</a>
                            </li>

                            <li class="nav-item border-end py-1 py-lg-0 dropdown">
                                <a class="nav-link {{ Route::is('home.references') ? 'active' : '' }} p-0 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Perakende Projeleri</a>
                                <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                                    <li><a href="{{ route('home.references') }}" class="dropdown-item {{ Route::is('home.references') ? 'active' : '' }}"> Referanslarımız </a>
                                    </li>
                                    <li><a href="{{ route('home.perakende') }}" class="dropdown-item {{ Route::is('home.perakende') ? 'active' : '' }}"> Perakende </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item border-end py-1 py-lg-0 dropdown">
                                <a class="nav-link {{ Route::is('home.projects') || Route::is('home.projectsdetail') ? 'active' : '' }} p-0 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Taahhüt Projeleri</a>
                                <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                                    <li><a href="{{ route('home.projects', ['filter' => 'devameden']) }}" class="dropdown-item {{ Route::is('home.projects') ? 'active' : '' }}"> Devam Eden Projeler</a>
                                    </li>
                                    <li><a href="{{ route('home.projects', ['filter' => 'tamamlanan']) }}" class="dropdown-item {{ Route::is('home.projects') ? 'active' : '' }}"> Tamamlanan Projeler </a>
                                    </li>
                                </ul>
                            </li>

                            
                            <li class="nav-item  py-1 py-lg-0">
                                <a class="nav-link {{ Route::is('home.contactpage') ? 'active' : '' }} p-0" href="{{ route('home.contactpage') }}">İLETİŞİM</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </nav>
    </div>
</header>