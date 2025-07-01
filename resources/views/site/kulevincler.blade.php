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
</style>


@endsection




@section('content')

<!-- Page Header Start -->

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
        </div>
    </div>
</div>
<!-- Carousel End -->







<!-- Page Header End -->


<!-- PRODUCT will listed here -->
<!-- Team Start -->
<div class="py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h6 class="text-primary text-uppercase"> Ürünler </h6> -->
            <h1 class="mb-5"> Kule Vinçler</h1>
        </div>


        <div class="row g-4">
            @foreach($rooms as $room)
            @php
            $mediaItems = $attachments->get($room->id, collect());
            $carouselImages = collect();

            // Add room poster first
            if (!empty($room->poster)) {
            $carouselImages->push($room->poster);
            }

            // Add all linked photoVideo images
            foreach ($mediaItems as $media) {
            if (!empty($media->photos_img)) {
            $carouselImages->push($media->photos_img);
            }
            }
            @endphp

            <div class="col-lg-4 col-md-12">
                <div class="card position-relative shadow-sm">
                    <div id="productCarousel{{ $room->id }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            @foreach($carouselImages as $index => $image)
                            <div class="carousel-item @if($index === 0) active @endif">
                                <a href="{{ route('home.productsdetail', $room->slug) }}" class="stretched-link">
                                    <img src="{{ asset($image) }}" class="d-block w-100" alt="{{ $room->title }} image {{ $index + 1 }}">
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


    </div>
</div>
<!-- Team End -->



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
                    <a href="contact.html" class="btn btn-secondary py-3 px-5"> BİZİ Ara<i class="fa fa-arrow-right ms-3"></i></a>
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




@endsection