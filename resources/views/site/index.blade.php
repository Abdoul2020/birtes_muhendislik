@extends('site.master')

@section('title','Baba Vinç - Kule Vinç Hizmetleri')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title>Baba Vinç - Kule Vinç Hizmetleri</title>
<meta name="title" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta name="description" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta name="keywords" content=" Baba Vinç - Kule Vinç Hizmetleri ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://babavinc.com/">
<meta property="og:title" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="og:description" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="og:image" content="{{ asset('assets/site/img/vinc.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="ttps://babavinc.com/">
<meta property="twitter:title" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="twitter:description" content="Baba Vinç - Kule Vinç Hizmetleri">
<meta property="twitter:image" content="{{ asset('assets/site/img/vinc.png') }}">


@endsection


@section('styles')

<style>
    .container-fluid .carousel-item {
        height: 60vh;
        overflow: hidden;
        position: relative;
    }

    #hero-video {
        object-fit: cover;
        height: 100%;
    }

    .png-container {
        filter: drop-shadow(0px 100px 0 #D81324);
        transform: translateY(-100px);
        width: 48px;
        height: 48px;
        width: 48px;
        height: 48px;
    }


    .img-tint-container {
        position: relative;
        width: 48px;
        height: 48px;
        overflow: hidden;
    }

    .img-tint {
        display: block;
        width: 100%;
        height: 100%;
        /* Drop a red copy directly underneath */
        filter: drop-shadow(0 48px 0 #D81324);
        /* Shift the original image up so only the colored shadow remains */
        transform: translateY(-48px);
    }
</style>



@endsection



@section('content')


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">

            <!-- Slide 1: Video -->
            <div class="carousel-item active position-relative">
                <video id="hero-video" class="w-100 d-block" muted loop playsinline>
                    <source src="{{ asset('assets/site/img/hero.mp4') }}" type="video/mp4">
                </video>
                <div id="video-progress" class="position-absolute bottom-0 start-0 bg-danger" style="height:4px; width:0;"></div>
                <div class="carousel-caption d-flex align-items-center carousel-caption_video">
                    <!-- your caption content -->
                </div>
            </div>

            <!-- Slide 2: Image -->
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/site/img/hero_slide2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown"> Projelerizi <br> <span>
                                        Güçlendirin
                                    </span> </h1>
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown"> Esnek kiralamalarımızla projelerinizi destekliyoruz. </h6>

                                <a href="{{ route('home.products') }}" class="btn btn-primary py-3 px-5 animated slideInDown"> KİRALAMA<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="img-fluid" src="{{ asset('assets/site/img/transparent_carousel.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->




<!-- Service Start -->
<div class="container-xxl py-5" style="background-color: #B6262C;">
    <div class="container">


        <div class="row g-4">
            <div class="col-lg-4 col-md-12 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex bg-light py-5 px-4">

                    <!-- <img src="{{ asset('assets/site/img/kule_1.png') }}" alt="Tower crane" class="png-container"/> -->

                    <div class="img-tint-container">
                        <img src="{{ asset('assets/site/img/kule_1.png') }}" alt="Tower crane" class="img-tint" />
                    </div>

                    <div class="ps-4">
                        <h5 class="mb-3"> Kule Vinç Hizmetleri</h5>
                        <p> Kaliteli Vinç Kiralamak.
                            <span style="visibility: hidden;">hidden data Lorem ipsum dolor.</span>
                        </p>
                        <a
                            class="btn btn-outline-primary incele-btn"
                            href="{{ route('home.products') }}"> İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">

                    <div class="img-tint-container">
                        <img src="{{ asset('assets/site/img/mobile_crane_1.png') }}" alt="Tower crane" class="img-tint" />
                    </div>

                    <!-- <img src="{{ asset('assets/site/img/mobile_crane_1.png') }}" alt="Tower crane" class="png-container" /> -->

                    <div class="ps-4">
                        <h5 class="mb-3"> Mobil Vinç Hizmetleri</h5>
                        <p> Projelerinizin ihtiyacına yönelik her türlü mobil vinç hizmeti</p>
                        <a
                            class="btn btn-outline-primary incele-btn"
                            href="{{ route('home.mobilvincpage') }}"> İncele</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <!-- <i class="fa-solid fa-gem fa-3x text-primary" aria-hidden="true"></i> -->
                    <!-- <img src="{{ asset('assets/site/img/jewelry_1.png') }}" alt="Tower crane" class="png-container" /> -->
                    <div class="img-tint-container">
                        <img src="{{ asset('assets/site/img/jewelry_1.png') }}" alt="Tower crane" class="img-tint" />
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-3"> Kuyum Hizmetleri</h5>
                        <p> Altın, Gümüş ve Mücevherat
                            <span style="visibility: hidden;">hidden data Lorem ipsum dolor.</span>
                        </p>
                        <a
                            class="btn btn-outline-primary incele-btn"
                            href="{{ route('home.kuyumcu') }}"> İncele</a>

                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5 mt-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/site/img/about_2.jpg') }}" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: #0B2154;">
                        <h1 class="display-4 text-white mb-0"> 45 <span class="fs-4">Yıllık</span></h1>
                        <h4 class="text-white">Tecrübe</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">Kurumsal</h6>
                <h1 class="mb-4"><span class="text-primary">BabaVinç</span> Hakkında</h1>
                <p class="mb-4">

                    Firmamız 1980 yılında Antalya da BABA KURTARMA olarak faaliyete girmiştir. 1980 yılında kara düzen dediğimiz vinçlerle temelini attığımız işletmeyi geliştirerek sektör haline getirip Türkiye'nin tüm illerine ulaşmayı başardık. Müşteri hizmetlerinde daha yakın ilgilenelim diye İstanbul Hadımköy de şubemiz bulunmaktadır. 2001 yılından itibaren ağımızı genişleterek Rusya/Almanya/Türkmenistan/Özbekistan şubelerimizi açmış bulunmaktayız.

                </p>

                <a href="{{ route('home.about') }}" class="btn btn-primary py-3 px-5">BİZİ Tanıyın
                    <!-- <i class="fa fa-arrow-right ms-3"></i> -->
                </a>

                <div class="row g-4 mb-3 pb-3 mt-5">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex justify-content-center">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary me-2">
                                    <img src="{{asset('assets/site/img/iso_logo3.png') }} " alt="" style="max-width: 80px;">
                                </span>
                                <span>
                                    <img src="{{asset('assets/site/img/iso_logo2.png') }}" alt="" style="max-width: 80px;">
                                </span>
                            </div>

                            <!-- <div class="ps-3">
                                    <h6> Güven</h6>
                                    
                                </div> -->
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- PRODUCT will listed here -->
<!-- Team Start -->
<div class=" product_section py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"> Ürünler </h6>
            <h1 class="mb-5"> Kule Vinçler</h1>
        </div>


        <!-- carousell scroll -->





        <!-- end of carousell scroll -->

        <div class="row g-4" id="productList">
            @foreach($rooms as $index => $room)
            @php
            $mediaItems = $attachments->get($room->id, collect());
            $carouselImages = collect();

            if (!empty($room->poster)) {
            $carouselImages->push($room->poster);
            }
            foreach ($mediaItems as $media) {
            if (!empty($media->photos_img)) {
            $carouselImages->push($media->photos_img);
            }
            }
            @endphp

            <div class="col-lg-4 col-md-12 product-item" style="display: none;">
                <div class="card position-relative shadow-sm">
                    <div id="productCarousel{{ $room->id }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            @foreach($carouselImages as $i => $image)
                            <div class="carousel-item @if($i === 0) active @endif">
                                <a href="{{ route('home.productsdetail', $room->slug) }}" class="stretched-link">
                                    <img src="{{ asset($image) }}?v={{ now()->format('His') }}" class="d-block w-100" alt="{{ $room->title }} image {{ $i + 1 }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @if($carouselImages->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel{{ $room->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel{{ $room->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                        @endif
                    </div>

                    <div class="bg-white p-4">
                        <h5 class="fw-bold mb-0">{{ $room->title }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <button id="loadMoreBtn" class="btn btn-primary"> Daha Fazla</button>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Service Start -->
<div class="container-xxl service py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"> Araçlar</h6>
            <h1 class="mb-5"> Farklı Ülke Araç Parkımız</h1>
        </div>


        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    @foreach($places as $id => $name)
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 @if($loop->first) active @endif"
                        data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $id }}" type="button">
                        <h4 class="m-0 text-capitalize">{{ $name }}</h4>
                    </button>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content w-100">


                    @foreach($places as $id => $name)
                    <div class="tab-pane fade @if($loop->first) show active @endif" id="tab-pane-{{ $id }}">
                        <div class="row g-4">
                            @php
                            $rooms = $groupedRooms[$id] ?? collect();
                            $firstRoom = $rooms->first();
                            $allImages = collect();

                            foreach ($rooms as $room) {
                            $allImages->push($room->poster);
                            }
                            @endphp

                            {{-- Carousel Column --}}
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <div id="carouselPlace{{ $id }}" class="carousel slide h-100" data-bs-ride="carousel">
                                        <div class="carousel-inner h-100">
                                            @foreach($allImages as $index => $img)
                                            <div class="carousel-item @if($index === 0) active @endif h-100">
                                                <img src="{{ asset($img) }}?v={{ now()->format('His') }}"
                                                    class="d-block w-100 h-100"
                                                    style="object-fit: cover;"
                                                    alt="{{ $firstRoom->title }} image {{ $index + 1 }}">
                                            </div>
                                            @endforeach
                                        </div>

                                        @if($allImages->count() > 1)
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlace{{ $id }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPlace{{ $id }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Description Column (only for the first room) --}}
                            <div class="col-md-6">
                                <h3 class="mb-3">{{ $firstRoom->title }}</h3>
                                <div class="mb-4">
                                    {!! Str::limit(strip_tags($firstRoom->description), 180) !!}
                                </div>

                                @php
                                // Map display names to URL slugs
                                $slugMap = [
                                'Türkiye' => 'turkiye',
                                'Türkmenistan' => 'turkmenistan',
                                'Almanya' => 'germany',
                                'Rusya' => 'russia',
                                ];

                                // $name is the display name, e.g. 'Türkiye'
                                $slug = $slugMap[$name] ?? Str::slug($name);
                                @endphp

                                <a href="{{ route('home.makineparkudetails', $slug) }}" class="btn btn-primary py-3 px-5 mt-3">
                                    İncele <i class="fa fa-arrow-right ms-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>


        </div>



    </div>
</div>
<!-- Service End -->

<!-- Call To Action Start -->
<div class=" py-5 wow fadeInUp call_to_action_top mt-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-12">
                <h6 class="text-primary text-uppercase" style="color: #ffff !important;"> Hemen Ara </h6>

                <h1 class="mb-4">Ön Rezervasyon Sorunuz mu Var?</h1>
                <p class="mb-0" style="color: #ffff;">Herhangi bir sorunuz varsa, lütfen bizimle iletişime geçin. Size yardımcı olmaktan memnuniyet duyarız.</p>

            </div>
            <div class="col-lg-4 col-md-12">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>
                        +90 530 200 52 20
                    </h3>
                    <a href="{{ route('home.contactpage') }}" class="btn btn-secondary py-3 px-5"> BİZİ Ara<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const video = document.getElementById('hero-video');
        const bar = document.getElementById('video-progress');
        const carousel = document.getElementById('header-carousel');
        const bsCarousel = new bootstrap.Carousel(carousel, {
            interval: false
        });

        video.play();

        // Progress bar animation
        video.addEventListener('timeupdate', () => {
            const pct = (video.currentTime / video.duration) * 100;
            bar.style.width = pct + '%';
        });

        // When video ends, automatically slide to next
        video.addEventListener('ended', () => {
            bsCarousel.next();
        });

        // Play video again if reactivated
        carousel.addEventListener('slide.bs.carousel', (e) => {
            if (e.to === 0) {
                video.currentTime = 0;
                video.play();
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const items = document.querySelectorAll('.product-item');
        let shown = 0;

        function showMore() {
            const increment = (window.innerWidth >= 992) ? 6 : 3;
            for (let i = 0; i < increment; i++) {
                if (shown < items.length) {
                    items[shown].style.display = '';
                    shown++;
                }
            }
            if (shown >= items.length) {
                document.getElementById('loadMoreBtn').remove();
            }
        }

        document.getElementById('loadMoreBtn').addEventListener('click', showMore);
        showMore(); // initial display
    });
</script>



@endsection