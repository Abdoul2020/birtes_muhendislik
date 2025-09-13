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
                    <div class="container m-auto">
                        <div class="text-start col-xl-6">
                            {{-- Example content, adapt as needed --}}
                            <h6 class="banner-topic text-white">
                                <span class="text-primary">| </span> {{ $banner->name }}
                            </h6>
                            <h2 class="banner-title display-2 fw-bolder fst-italic text-white" style="visibility: hidden;">
                                <span class="text-primary">Birtes</span> Mühendislik.
                            </h2>
                        </div>
                    </div>
                </div>
                @else
                {{-- Optionally, fallback if placefor is something else or files missing --}}
                <div class="swiper-slide d-flex"
                    style="background-color: #000; height:80vh;">
                    <div class="container m-auto">
                        <div class="text-center text-white">
                            <p>Banner unavailable</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                <div class="slider-pagination swiper-pagination pb-4 d-block d-xl-none"></div>
            </div>


            <div
                class="position-absolute top-50 end-0 translate-middle-y z-2 d-xl-flex d-none m-auto me-0 me-md-5 main-slider-button-next">
                <img src="{{asset('assets/site/img/next_svg.svg') }}" alt="" style="width: 30px; height: 30px; background: rgba(0, 0, 0, 0.5);
    padding: 10px;">
            </div>
            <div
                class="position-absolute top-50 start-0 translate-middle-y z-2 d-xl-flex d-none m-auto ms-0 ms-md-5 main-slider-button-prev">
                <img src="{{asset('assets/site/img/previous_svg.svg') }}" alt="" style="width: 30px; height: 30px; background: rgba(0, 0, 0, 0.5);
    padding: 10px;">
            </div>
        </div>
    </section>

    <section id="services" class=" pt-5 pb-5">
        <div class="container">
            <div style="text-align: center;">
                <h3 class="display-6 fw-bold mb-5 pb-4 special-title">
                    Hizmetlerimiz
                </h3>

            </div>

            @php
            $icons = [
            'Sıhhı Tesisat' => 'plumber',
            'Endüstriyel Tesisat' => 'plumbing',
            'Isıtma Tesisatı' => 'water-heater',
            'Yangın Tesisatı' => 'gas',
            'Doğal Gaz' => 'gas',
            'Soğutma Tesisatı' => 'water',
            'Havalandırma' => 'install-option',
            'Müşterek' => 'tee-pipe',
            ];

            $defaultIcon = 'plumber';
            @endphp

            <div class="row">
                @foreach($services as $product)
                @php
                $icon = $icons[$product->title] ?? $defaultIcon;
                @endphp
                <div class="col-md-6 col-sm-12 col-lg-3 mb-4">
                    <div class="service-post text-center p-5 bg-gray rounded-3">
                        <a href="{{ route('home.services') }}">
                            <svg class="text-primary mb-3" width="50" height="50">
                                <use xlink:href="#{{ $icon }}"></use>
                            </svg>
                            <h6 class="mb-0">{{ $product->title }}</h6>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </section>


    <section id="subscribe" class=" bg-gray   pt-0 ">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h5 style="color: #2a3990;"> <span class="pb-1" style="border-bottom: 4px solid;"> HAKKIMIZDA </span></h5>


                        <div class="h-100">
                            <h1 class="display-6 fw-bold mb-2">Birtes <span style="color: #2a3990;">Mühendislik</span></h1>

                            {!! $about_birtes->about_Text !!}

                            <a class="btn btn-primary mt-4" href="{{ route('home.about') }}"> Devamını oku</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="row g-4 mb-4">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img class="flex-shrink-0 me-3 colored-icon" src="{{asset('assets/site/img/icon/icon-07-primary.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img class="flex-shrink-0 me-3 colored-icon" src="{{asset('assets/site/img/icon/icon-09-primary.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            @if(!empty($about_birtes->poster_1))
                            <div class="col-6 text-end">
                                <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset($about_birtes->poster_1) }}"
                                    style="margin-top: 25%;" alt="Poster 1">
                            </div>
                            @endif

                            @if(!empty($about_birtes->poster_2))
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset($about_birtes->poster_2) }}"
                                    alt="Poster 2">
                            </div>
                            @endif

                            @if(!empty($about_birtes->poster_3))
                            <div class="col-6 text-end">
                                <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset($about_birtes->poster_3) }}"
                                    alt="Poster 3">
                            </div>
                            @endif

                            @if(!empty($about_birtes->poster_4))
                            <div class="col-6 text-start">
                                <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset($about_birtes->poster_4) }}"
                                    alt="Poster 4">
                            </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="work" class="padding-small"
        style="background: #2a3990; border-top-left-radius: 60px; border-top-right-radius: 60px;">
        <div class="container">

            <div style="
        display: flex;
        justify-content: space-between;
          " class="pb-5">

                <div style="border-left: 5px solid white;
          padding-left: 10px;">
                    <h3 class="display-6 fw-bold mb-0" style="color:#f8f9fa;">Projelerimiz </h3>
                    <h6 class="mb-5" style="color: #323232;">
                        Ne Yaptık?
                    </h6>
                </div>

                <div>
                    <a class="btn btn-primary mt-4 project_btn" href="{{ route('home.projects') }}" style="background: #f8f9fa; color: #2a3990;"> Tümü
                        İncele</a>

                </div>
            </div>




            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-3 mb-4">
                    <div class="project-content position-relative bg-black">
                        <img
                            class="project-img img-fluid"
                            src="{{ $project->poster ? asset($project->poster) : asset('assets/site/img/default-project.jpg') }}"
                            alt="{{ $project->title }}">
                        <div class="project-description p-5 p-md-4 position-absolute bottom-0 start-0">
                            <h4 class="text-white">{{ $project->title }}</h4>
                            <a
                                href="{{ route('home.projectsdetail', $project->slug) }}"
                                class="text-white text-decoration-underline">
                                Detayı gör
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>




        </div>
    </section>


    <section id="cta"
        style="background-image: url({{ asset($about_birtes->poster_5) }}); background-size: cover; background-repeat: no-repeat;  background-position: center">
        <div class="container pt-5 pb-5" style="max-width: 800px;">
            <div class="row g-lg-5 align-items-center">

                <div class="col-lg-12 mb-5 mb-lg-0" style="text-align: center;">

                    <h2 class="display-4 fw-bold text-white">
                        <span id="before"> </span>
                        <span id="typed-word"></span>
                        <span id="after"> </span>
                        <span class="cursor">|</span>
                        <span>
                            Mühendislik
                        </span>
                    </h2>


                    <p class="text-white"> {!! $storylinedescription->storyline_description !!}
                    </p>

                    <a class="btn btn-primary mt-4" href="{{ route('home.about') }}"> Firma Profili</a>
                </div>
            </div>
        </div>
    </section>


    <section id="quote" class="bg-gray ">

        <div class="container-xxl py-5">
            <div class="container">
                <div class=" wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-5 fw-bold"> Referanslarımız</h1>
                </div>
                <div class="row g-5">


                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            @foreach($references as $reference)
                            <div class="testimonial-item text-center">
                                <img class="ref-img" src="{{ asset($reference->photos_img) }}" alt="{{ $reference->name }}">
                            </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="text-center" style="">
                <a class="btn btn-primary mt-4 mx-auto" href="{{ route('home.references') }}" style="background: #2a3990; width: 100%;"> Referanslarımız</a>
            </div>

        </div>

    </section>


    <section id="faqs" class="padding-medium" style="
    background-image: url('{{asset('assets/site/img/contact_map.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">
        <div class="container">
            <div class="row gy-4 justify-content-center">


                <div class="col-md-8">
                    @php
                    $platformIcons = [
                    'ofisadres' => 'location',
                    'eposta' => 'email',
                    'ofistelefon' => 'phone',
                    ];
                    $defaultIcon = 'contact';

                    $labels = [
                    'ofisadres' => 'Adres:',
                    'eposta' => 'E-posta:',
                    'ofistelefon' => 'Telefon:',
                    ];

                    // Define which platforms you want to show
                    $allowedPlatforms = ['ofisadres', 'eposta', 'ofistelefon'];
                    @endphp

                    <div class="contact-list">
                        @foreach ($contacts as $contact)
                        @if (in_array($contact->platform, $allowedPlatforms))
                        @php
                        $icon = $platformIcons[$contact->platform] ?? $defaultIcon;
                        $label = $labels[$contact->platform] ?? ucfirst($contact->platform) . ':';
                        @endphp
                        <div class="contact-item">
                            <div class="icon-box">
                                <svg class="text-primary me-2" width="25" height="25">
                                    <use xlink:href="#{{ $icon }}"></use>
                                </svg>
                            </div>
                            <div class="text-box">
                                <div class="label">{{ $label }}</div>
                                <div class="detail">{{ $contact->username }}</div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>



            </div>
        </div>
    </section>

</div>

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection