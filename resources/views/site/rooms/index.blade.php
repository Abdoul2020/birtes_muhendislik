{{-- @extends('site.abudhabi.master')
@extends('site.duabi.master') --}}


@php
    $layout = request()->is('*dubai*') ? 'site.dubai.master' : 'site.abudhabi.master';
    $location = request()->is('*dubai*') ? 'Dubai' : 'Abu Dhabi'
@endphp
@extends($layout)


@section('title','Blackout Rooms')

@section('meta_tags')
    <!-- Primary Meta Tags -->
    <title>Scariest Escape Rooms in {{ $location }} | Black Out - Ultimate Horror Adventure</title>
    <meta name="title" content="Black Out - Scariest Escape Rooms in {{ $location }}">
    <meta name="description" content="Experience the scariest escape rooms in {{ $location }} with Black Out. Gather your team, solve challenging puzzles, and immerse yourself in thrilling horror adventures with live actors. Perfect for thrill-seekers and team-building activities.">
    <meta name="keywords" content="escape rooms {{ $location }}, Black Out escape rooms, horror escape rooms, escape rooms UAE, live actor escape games, team building activities {{ $location }}, haunted house {{ $location }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://black-out.ae/">
    <meta property="og:title" content="Black Out - Scariest Escape Rooms in {{ $location }}">
    <meta property="og:description" content="Discover the scariest escape rooms in {{ $location }}. Black Out offers thrilling horror adventures, live actors, and immersive puzzles for the ultimate escape experience.">
    <meta property="og:image" content="{{ asset('img/logo/haunted-meta-logo.png') }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://black-out.ae/">
    <meta property="twitter:title" content="Black Out - Scariest Escape Rooms in {{ $location }}">
    <meta property="twitter:description" content="Challenge yourself in the scariest escape rooms in {{ $location }}. Black Out offers horror-themed escape games with live actors and thrilling adventures.">
    <meta property="twitter:image" content="{{ asset('img/logo/haunted-meta-logo.png') }}">
    

@endsection


@section('styles')
    <style>

    </style>
@endsection

@section('content')
    <section class="page-banner" style="position: static; overflow: hidden;">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"
            style="position: absolute;  left: 50%; transform: translate(-50%, -50%); width: 100vw; height: 100vh; object-fit: cover; z-index: -1;">
            <source src="{{ asset('assets/site/images/thumbnail/5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Image on top of the video -->
        <img src="{{ asset('assets/site/images/ImagesThumb/Horror_Background.webp') }}" class="top___image__slide"
            alt="Descriptive Text" />
        <div class="banner-inner">
            <div class="auto-container">
                <!-- Content here -->
            </div>
        </div>
    </section>



    <section class="faq-section" style=" padding-bottom: 100px; padding-top:240px;">

        <div class="top-pattern-layer"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div>

        <!-- bottom for pattern -->

        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-bottom.webp') }}); bottom: -73px;">
        </div>

        <div class="featured-game-bg">

            <video autoplay loop muted playsinline style="height: 100%;">
                <source src="{{ asset('assets/site/images/newVideo/escape/4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>

        <div class="container allcontainer">
            <div class="sec-title centered">

                @if (str_contains(Request::url(), 'abudhabi'))
                    <h1 style="color: #910613; font-weight: 700; font-size: 3.5rem;" class="glitch">
                        ESCAPE ROOMS IN ABUDHABI
                    </h1>
                @else
                    <h1 style="color: #910613; font-weight: 700; font-size: 3.5rem;" class="glitch">
                        ESCAPE ROOMS IN DUBAI
                    </h1>
                @endif


                <p style="color: #ffff; font-size: 20px; font-weight: 0;">
                    Choose your game to unravel
                    the story.
                </p>

                <span class="bottom-curve"></span>
            </div>

            <div class="row featured-active">

                @if (str_contains(Request::url(), 'abudhabi'))
                    <div class="col-12">

                        <div class="row">
                            @foreach ($rooms as $room)
                                {{-- Skip rooms not matching place_id 2 or with titles "Chaos" or "Torture" --}}
                                @if ($room->place_id != 2 || strtolower($room->title) === 'chaos' || strtolower($room->title) === 'torture')
                                    @continue
                                @endif

                                <div class="col-lg-3 col-sm-6 custom-five-col grid-item">
                                    <div class="featured-game-item mb-30">

                                        @if (strtolower($room->title) !== 'dungeon')
                                            <div class="link-box"
                                                style="position: absolute; margin-top: 15px; border-radius: 5px; left: 0px;">
                                                <a style="text-transform: none;" href="#"
                                                    class="theme-btn btn-style-one">
                                                    <span class="btn-title"
                                                        style="padding: 0px 10px; font-size: 12px; border-radius: 5px;">With
                                                        Live
                                                        Actor</span>
                                                </a>
                                            </div>
                                        @endif

                                        <div class="featured-game-thumb">
                                            <img src="{{ asset($room->poster) }}?{{ time() }}" alt="{{ $room->title }}">
                                        </div>

                                        <div class="featured-game-content">
                                            <h4><a href="#">{{ $room->title }}</a></h4>
                                            <div class="featured-game-meta">
                                                <span style="font-weight: 300;">
                                                    <i class="fas fa-clock"></i>{{ $room->duration }}
                                                </span>
                                                <span style="font-weight: 300;">
                                                    <i class="fas fa-hammer"></i>{{ $room->level }}
                                                </span>
                                                <span style="font-weight: 300;">
                                                    <i class="fas fa-running"></i>{{ $room->person }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="featured-game-content featured-game-overlay-content">
                                            <div class="featured-game-icon"><img src="{{ asset($room->text_picture) }}?{{ time() }}"
                                                    alt="{{ $room->title }} Title"></div>
                                            <div class="featured-game-meta">
                                                <i class="fas fa-clock"></i><span>{{ $room->duration }}
                                                    </span>
                                                <i class="fas fa-hammer"></i><span>{{ $room->level }}</span>
                                                <i class="fas fa-running"></i><span>{{ $room->person }}</span>
                                            </div>
                                            <div class="link-box">
                                                <a href="{{ route('rooms.detail', $room->slug) }}"
                                                    class="theme-btn btn-style-one">
                                                    <span class="btn-title btn-poster-book-now" >Book Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                @else
                    @foreach ($rooms as $room)
                        @if (
                            $room->place_id != 1 ||
                                strtolower($room->title) === 'Hotel 666' ||
                                strtolower($room->title) === 'The Circus' ||
                                strtolower($room->title) === 'Dungeon')
                            @continue
                        @endif

                        <div class="col-lg-3 col-6 grid-item">
                            <div class="featured-game-item mb-30">

                                <div class="link-box"
                                    style="position: absolute; margin-top: 15px; border-radius: 5px; left: 0px;">
                                    <a style="text-transform: none;" href="#" class="theme-btn btn-style-one">
                                        <span class="btn-title"
                                            style="padding: 0px 10px; font-size: 12px; border-radius: 5px;">With Live
                                            Actor</span>
                                    </a>
                                </div>


                                <div class="featured-game-thumb">

                                    <img src="{{ asset($room->poster) }}?{{ time() }}" alt="{{ $room->title }}">

                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">{{ $room->title }}</a></h4>
                                    <div class="featured-game-meta">
                                        <span style="font-weight: 400;">
                                            <i class="fas fa-clock"></i>{{ $room->duration }}
                                        </span>
                                        <span style="font-weight: 400;">
                                            <i class="fas fa-hammer"></i>{{ $room->level }}
                                        </span>
                                        <span style="font-weight: 400;">
                                            <i class="fas fa-running"></i>{{ $room->person }}
                                        </span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="{{ asset($room->text_picture) }}?{{ time() }}"
                                            alt="{{ $room->title }} Title"></div>
                                    <div class="featured-game-meta">
                                        <span>
                                            <i class="fas fa-clock"></i>{{ $room->duration }}
                                        </span>
                                        <span>
                                            <i class="fas fa-hammer"></i>{{ $room->level }}
                                        </span>
                                        <span>
                                            <i class="fas fa-running"></i>{{ $room->person }}
                                        </span>
                                    </div>

                                    <div class="link-box">
                                        <a href="{{ route('rooms.dubai_detail', $room->slug) }}"
                                            class="theme-btn btn-style-one">
                                            <span class="btn-title btn-poster-book-now" >Book Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
        </div>

        <div class="auto-container" style="margin-bottom: 50px; margin-top: 100px;">

            <div class="row">

                <div class="col-12">
                    <div class="section-title title-style-three white-title" style="text-align: center; width:100%;">
                        <h2 style="color: #910611;" class="glitch">FAQ
                            <span></span>
                        </h2>
                        <p style="color: #cccccc; font-size: 20px;">
                            Your Comments are
                            important to us </p>
                    </div>

                </div>

            </div>



            @if (str_contains(Request::url(), 'abudhabi'))
                @php
                    // Filter FAQs for "Abu Dhabi", shuffle, and take the first five
                    $filteredFaqs = $allfaq
                        ->filter(function ($faq) {
                            return strtolower($faq->placefor) == 'abu dhabi';
                        })
                        ->shuffle()
                        ->take(5);
                @endphp

                <div class="faq-container">
                    <div class="accordion-box">
                        @foreach ($filteredFaqs as $faq)
                            <div class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn">{{ $faq->question }}
                                    <div class="icon flaticon-cross"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text" style="color: #ffff;">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                @php
                    // Filter FAQs for "Abu Dhabi", shuffle, and take the first five
                    $filteredFaqs = $allfaq
                        ->filter(function ($faq) {
                            return strtolower($faq->placefor) == 'dubai';
                        })
                        ->shuffle()
                        ->take(5);
                @endphp

                <div class="faq-container">
                    <div class="accordion-box">
                        @foreach ($filteredFaqs as $faq)
                            <div class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn">{{ $faq->question }}
                                    <div class="icon flaticon-cross"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text" style="color: #ffff;">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif



        </div>
    </section>

    <section class="reviews-section"
        style="background: url({{ asset('assets/site/images/newImages/blackIcon/white_bg_crack-04.webp') }})">

        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div>


        <div class="auto-container">

            <div class="row">
                <div class="col-12">
                    <div class="slide-item">
                        <div class="inner">
                            <div class="text">
                                <p style="text-align: center; font-size: 20px; color: #910613;">

                                    <strong style="color: #cbcbcb;">
                                        Black
                                        Out escape rooms are a
                                        unique and fun way to
                                        engage</strong> with your
                                    colleagues and test how well
                                    your team works together.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script></script>
@endsection
