<footer id="footer" style="background-color: #323232;" class="footer_birtes">
    <div class="container pb-5 pt-5">
        <div class="row flex-wrap justify-content-between">
            <div class="col-lg-4 col-md-6 pb-3">
                <div class="footer-menu">
                    <img src=" {{ asset('assets/site/img/logo_beyaz_bitest.png') }}" class="pb-5" alt="logo" style="max-width: 236px;">

                    <ul class="social-links d-flex flex-wrap list-unstyled">
                        @foreach ($contacts as $contact)
                        @if (in_array(strtolower($contact->platform), ['facebook', 'instagram', 'youtube']) && !empty($contact->username))
                        <li class="social me-3">
                            <a href="{{ $contact->username }}" target="_blank" rel="noopener noreferrer">
                                <svg class="me-1" width="24" height="24">
                                    <use xlink:href="#{{ strtolower($contact->platform) }}"></use>
                                </svg>
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>



                </div>
            </div>

            <div class=" col-lg-4 col-md-6 pb-3">
                <div class="footer-menu">
                    <h5 class="widget-title pb-2 fw-semibold" style="color: #f8f9fa; border-bottom: 1px solid #2a3990;">
                        Kurumsal</h5>
                    <ul class="menu-list d-flex flex-column list-unstyled pt-3">
                        <li class="pb-2">
                            <a href="{{route('home.about')}}"> Hakkımızda</a>
                        </li>
                        <li class="pb-2">
                            <a href="{{ route('home.mission') }}">Misyon & Vizyon</a>
                        </li>
                        <li class="pb-2">
                            <a href="{{ route('home.mission') }}">Ne yapıyoruz</a>
                        </li>
                        <li class="pb-2">
                            <a href="{{ route('home.kvkk') }}"> KVKK</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-3">
                <div class="footer-menu">
                    <h5 class="widget-title pb-2 fw-semibold" style="color: #f8f9fa; border-bottom: 1px solid #2a3990;">
                        Hizmetler
                    </h5>

                    <div class="row pt-3">
                        @php
                        $chunks = $services->chunk(4);

                        @endphp

                        @foreach ($chunks as $chunk)
                        <div class="col-6">
                            <ul class="menu-list d-flex flex-column list-unstyled">
                                @foreach ($chunk as $service)
                                <li class="pb-2">
                                    <a href="{{ route('home.services') }}">{{ $service->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="border-top">
        <div class="container footer-bottom d-md-flex text-center justify-content-between py-4">
            <p class="mb-0" style="color: #f8f9fa;">© 2025 Tüm Hakları Saklıdır. Birtes mühendislik</p>

        </div>
    </div>
</footer>