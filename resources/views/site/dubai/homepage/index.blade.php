@extends('site.dubai.master')
@section('title', 'Escape Rooms in Dubai homepage home | Largest & Scariest Horror Games - Black Out')
@section('meta_tags')
    <!-- Primary Meta Tags -->
    <title>Escape Rooms in Dubai homepage home | Largest & Scariest Horror Games - Black Out</title>
    <meta name="title" content="Black Out Escape Rooms Dubai | Scariest Horror Games with Live Actors">
    <meta name="description"
        content="Immerse yourself in the largest and most thrilling escape rooms in Dubai at Black Out. Featuring realistic horror games, live actors, and spine-chilling adventures for an unforgettable experience.">
    <meta name="keywords"
        content="escape rooms in Dubai, horror escape games Dubai, haunted house UAE, live actor escape rooms, scariest activity in Dubai, Black Out Dubai, thrilling escape room adventures, realistic horror escape house">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Black Out Escape Rooms Dubai | Scariest Horror Games with Live Actors">
    <meta property="og:description"
        content="Step into Dubai's scariest escape rooms at Black Out. Featuring live actors, immersive themes, and challenging puzzles, it's the ultimate horror adventure in the UAE.">
    <meta property="og:image" content="{{ asset('assets/site/images/meta/escape-rooms-in-dubai.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Black Out Escape Rooms Dubai | Scariest Horror Games with Live Actors">
    <meta property="twitter:description"
        content="Step into the largest escape rooms in Dubai at Black Out. Live actors, thrilling puzzles, and unforgettable horror experiences await.">
    <meta property="twitter:image" content="{{ asset('assets/site/images/meta/escape-rooms-in-dubai.png') }}">



@endsection

@section('content')
    <div class="trip-advisor-logo-anim trip-advisor-logo-landing">
        <a target="_blank"
            href="https://www.tripadvisor.com/Attraction_Review-g294013-d24859666-Reviews-BlackOut_Realistic_Horror_Escape_Games-Abu_Dhabi_Emirate_of_Abu_Dhabi.html">
            <img src="https://static.tacdn.com/img2/travelers_choice/widgets/tchotel_2024_L.png"
                alt="Blackout tripadvisor 2024 travellers choice award">
        </a>
    </div>

    <section class="banner-section banner-style-two" style="padding-left: 0px !important ; padding-right: 0px !important;">
        <div class="banner-carousel owl-theme owl-carousel">


            <div class="slide-item">
                <div class="image-layer" id="image-layer-1"
                    style="background: url('{{ asset('assets/site/images/sliderhero/bg_1.webp') }}')"></div>
                <div class="link-box"
                    style="position: absolute; top: 84%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">
                    <a href="#rooms" class="theme-btn btn-style-one"
                        style="font-size: 50px; cursor: pointer; z-index:99999">
                        <span style="display: inline-block; cursor: pointer;">&#x2193;</span>
                    </a>
                </div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">

                            {{-- <h2 class="hero_slide_title" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0);" > BIGGEST & <span  class=""> SCARIEST </span> </h2> --}}
                            <h2 class="hero_slide_title">
                                Experience the haunted thrill of a lifetime
                                <!-- BIGGEST <span class="at_home_font">&</span> <span class=""> SCARIEST </span>  -->
                            </h2>



                            <h3 class="mobil_width_hero">
                                IN THE MIDDLE EAST
                            </h3>

                            <h3 class="justify-full-width">
                                IN THE MIDDLE EAST
                            </h3>


                            <div class="link-box book_now_button" style="text-align: center">

                                <a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one">
                                    <span class="btn_font_mobile cta-banner-book-now">
                                        Book Now
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" id="image-layer-2"
                    style="background: url('{{ asset('assets/site/images/sliderhero/bg_2.webp') }}')"></div>
                <div class="link-box"
                    style="position: absolute; top: 84%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">
                    <a href="#rooms" class="theme-btn btn-style-one" style="font-size: 50px; cursor: pointer;">
                        <span style="display: inline-block; cursor: pointer;">&#x2193;</span>
                    </a>
                </div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">

                            <h2 class="hero_slide_title">
                                Join the Scariest Haunted Escape Room Game Adventure in
                                <!-- BIGGEST <span class="at_home_font">&</span> <span class=""> SCARIEST </span>  -->
                            </h2>



                            <h3 class="mobil_width_hero">
                                DUBAI & ABU DHABI
                            </h3>

                            <h3 class="justify-full-width">
                                DUBAI & ABU DHABI
                            </h3>


                            <div class="link-box book_now_button" style="text-align: center">

                                <a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one ">
                                    <span class="btn_font_mobile cta-banner-book-now">
                                        Book Now
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" id="image-layer-3"
                    style="background: url('{{ asset('assets/site/images/sliderhero/bg_3.webp') }}')"></div>
                <div class="link-box"
                    style="position: absolute; top: 84%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">
                    <a href="#rooms" class="theme-btn btn-style-one" style="font-size: 50px; cursor: pointer;">
                        <span style="display: inline-block; cursor: pointer;">&#x2193;</span>
                    </a>
                </div>

                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">

                            <h2 class="hero_slide_title">
                                The Perfect Supernatural Haunted Attraction
                                <!-- BIGGEST <span class="at_home_font">&</span> <span class=""> SCARIEST </span>  -->
                            </h2>

                            <h3 class="mobil_width_hero">
                                AT WAFI CITY NOW!
                            </h3>

                            <h3 class="justify-full-width">
                                AT WAFI CITY NOW!
                            </h3>


                            <div class="link-box book_now_button" style="text-align: center">

                                <a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one">
                                    <span class="btn_font_mobile cta-banner-book-now">
                                        Book Now
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- rooms for here  -->
    <section id="rooms" class="featured-game-area position-relative pt-115 pb-90">

        <div class="top-pattern-layer"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div>
        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-bottom.webp') }}); bottom: -70px;">
        </div>

        <div class="featured-game-bg">

            <video autoplay loop muted playsinline style="height: 100vh;">
                <source src="{{ asset('assets/site/images/newVideo/escape/4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>


        </div>
        <div class="container allcontainer">


            <div class="sec-title centered">
                <h1 style="color: #910613; font-weight: 700; font-size: 3.5rem;">

                    <span class="glitch"> ESCAPE ROOMS IN
                        DUBAI </span>
                </h1>
                <p style="color: #ffff; font-size: 20px; font-weight: 0;">

                    Choose your game to unravel
                    the story. </p>
                <span class="bottom-curve"></span>
            </div>

            <div class="row featured-active">

                @foreach ($rooms as $room)
                    {{-- Skip if room title is "Chaos" or "Torture" --}}
                    @if (
                        $room->place_id != 1 ||
                            strtolower($room->title) === 'Hotel 666' ||
                            strtolower($room->title) === 'The Circus' ||
                            strtolower($room->title) === 'Dungeon')
                        @continue
                    @endif

                    <div class="col-lg-3 col-6 grid-item">
                        <div class="featured-game-item mb-30">
                            {{-- <div class="link-box"
                                style="position: absolute; margin-top: 15px; border-radius: 5px; left: 20px;">
                                <a style="text-transform: none;" href="#" class="theme-btn btn-style-one">
                                    <span class="btn-title"
                                        style="padding: 0px 10px; font-size: 12px; border-radius: 5px;">With Live
                                        Actor</span>
                                </a>
                            </div> --}}
                            <div class="featured-game-thumb">
                                <img src="{{ asset($room->poster) }}" alt="{{ $room->title }}">
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
                                <div class="featured-game-icon"><img src="{{ asset($room->text_picture) }}"
                                        alt="{{ $room->title }} Title"></div>
                                <div class="featured-game-meta">
                                    <span><i class="fas fa-clock"></i>{{ $room->duration }}</span>
                                    <span><i class="fas fa-hammer"></i>{{ $room->level }}</span>
                                    <span><i class="fas fa-running"></i>{{ $room->person }}</span>
                                </div>
                                <div class="link-box">
                                    <a href="{{ route('rooms.dubai_detail', ['slug' => $room->slug]) }}"
                                        class="theme-btn btn-style-one">

                                        <span class="btn-title btn-poster-book-now">Book Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>



    <section class="games-section games-section-bg pt-0 pb-0"
        style="background: url({{ asset('assets/site/images/newImages/blackIcon/white_bg_crack-04.webp') }})">


        <div class="just-gamers-area just-gamers-bg pt-115 pb-120" style="padding: 0px;">

            <div class="container-full-padding">
                <div class="row">

                    <div class="col-xl-6 col-lg-12 col-md-10 pt-100"
                        style="display: block; align-items: center; padding-bottom: 50px;">

                        <div class="section-title title-style-three white-title first__push"
                            style="padding: 0px; width:100%;">
                            <h2 class="mb-3">
                                <span style="color: #07070f;" class="mb-4">REALISTIC HORROR &
                                    ESCAPE ROOM </span>
                            </h2>
                            <h2><span>GAMES WITH LIVE ACTORS</span></h2>
                            <p style="font-size: 20px;">Welcome to the
                                biggest escape room in
                                Abudhabi </p>
                        </div>

                        <div class="just-gamers-list second__push" style="margin-top: 39px;">

                            <ul>
                                <li>
                                    <div class="just-gamers-list-icon">
                                        <img src="{{ asset('assets/site/images/newImages/blackIcon/book.webp') }}"
                                            alt="Black Out Escape Room in Dubai" style="max-width: 75px;">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5 style="color: #07070f;">BOOK
                                            YOUR GAME</h5>
                                        <p style="font-size: 18px; color: #7a7a7e;">
                                            Make your
                                            reservation and
                                            arrive on time </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon">
                                        <img src="{{ asset('assets/site/images/newImages/blackIcon/book.webp') }}"
                                            alt="Black Out Escape Room in Dubai" style="max-width: 75px;">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5 style="color: #07070f;">GET
                                            LOCKED
                                            IN FOR 60
                                            MINUTES</h5>
                                        <p style="font-size: 18px; color: #7a7a7e;">You
                                            will unravel the
                                            story behind each
                                            door </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="just-gamers-list-icon">
                                        <img src="{{ asset('assets/site/images/newImages/blackIcon/puzzle.webp') }}"
                                            alt="Black Out Escape Room in Dubai" style="max-width: 75px;">
                                    </div>
                                    <div class="just-gamers-list-content fix">
                                        <h5 style="color: #07070f;">FIND
                                            CLUES &
                                            SOLVE OUR
                                            PUZZLES</h5>
                                        <p style="font-size: 18px; color: #7a7a7e;">An
                                            authentic
                                            experience with
                                            realistic
                                            atmospheres </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 d-none d-lg-block mt-2" style="display: flex; align-items: center;">
                        <div class="just-gamers-img">

                            <img src="{{ asset('assets/site/images/newImages/blackIcon/fearface2.webp') }}"
                                alt="Black Out Escape Room in Dubai" class="just-gamers-character " id="scalingImage">

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="about-section about_us_section" style="background: #910613; padding-left: 20px; padding-right: 20px;">

        <div class="top-pattern-layer-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern.png') }}); top: -72px;"></div>

        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/beyaz_parca.webp') }});"></div>

        <div class="about-content">
            <div class="auto-container">
                <div class="row clearfix" style="margin-top: -30px;">

                    <div class="text-column col-lg-6 col-md-12 col-sm-12" style="display: flex; align-items: center;">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="sec-title">
                                <h2 style="font-weight: 900;"> Our
                                    escape rooms
                                    are one of the best corporate team
                                    building activities! </h2><span class="bottom-curve"></span>
                            </div>

                            <div class="text">
                                <p style="color: #ffff;">Black Out
                                    escape rooms are a unique
                                    and fun way to engage with your
                                    colleagues and test how well your
                                    team works together. Each escape
                                    room provides an immersive puzzle
                                    set in a thematic environment and
                                    requires coordination, communication
                                    and problem solving to complete the
                                    challenge.</p>

                                <p style="color: #ffff;">With our escape
                                    rooms, you can rest
                                    assured that everyone from senior
                                    management to entry-level employees
                                    will find stimulating activities
                                    that will foster strong and open
                                    relationships between coworkers.</p>
                            </div>
                            <div class="link-box"><a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one"
                                    style="padding-left: 0px;"><span class="btn-title"> Book
                                        Now</span></a></div>
                        </div>
                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12" style="display: flex; align-items: center;">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="width: 100%;">
                            <div class="image-box">

                                <img src="{{ asset('assets/site/images/newImages/aboutUs/test.gif') }}"
                                    alt="Black-out Rooms in Dubai | Black-Out" title
                                    style="border-top-left-radius: 50%;
                        border-top-right-radius: 50%; margin-top: -450px; margin-left: 50px;">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="reviews-section"
        style="background: url({{ asset('assets/site/images/newImages/blackIcon/white_bg_crack-04.webp') }}); padding: 50px 0px 0px 0px !important">


        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-style-three white-title">
                        <h2>
                            <span>TESTIMONIALS</span>
                        </h2>
                        <p style="font-size: 20px;"> Your Comments are
                            important to us</p>
                    </div>
                </div>

            </div>

            <div class="testimonial-slider carousel-outer clearfix" style="margin-bottom: 75px;">
                <div class="thumb-carousel-box">
                    <ul class="thumb-carousel owl-carousel owl-theme">
                        @foreach ($allComment as $comment)
                            @if (strtolower($comment->placefor) == 'abu dhabi')
                                <li class="thumb">
                                    <img src="{{ asset($comment->person_image) }}" alt="{{ $comment->person_name }}">
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div class="text-carousel owl-carousel owl-theme">
                    @foreach ($allComment as $comment)
                        @if (strtolower($comment->placefor) == 'abu dhabi')
                            <div class="slide-item">
                                <div class="inner">
                                    <div class="text">{{ $comment->person_comment }}</div>
                                    <div class="info clearfix">
                                        <span class="name">{{ $comment->person_name }}</span>&ensp;-&ensp;
                                        <span
                                            class="date">{{ date('d M, Y', strtotime($comment->comment_date)) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>


        </div>

    </section>

    <section class="video-section">

        <div class="top-pattern-layer-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/beyaz_parca2.webp') }}); top:-3px; ">
        </div>

        <div class="image-layer"
            style="background-image: url({{ asset('assets/site/images/newImages/dubaImages/video-bg.webp') }});"></div>

        <div class="auto-container">

            <div class="row clearfix">

                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">

                        <div class="services-two__icon">
                            <img src="{{ asset('assets/site/images/newImages/black_out_icons/friends-families.svg') }}"
                                alt="Black Out Escape Room in Dubai" style="max-width: 115px;">
                        </div>
                        &nbsp;
                        <h4>FRIENDS & FAMILIES</h4>
                        <div class="feature-text">Experience the
                            exciting adventure with your family and
                            friends!</div>
                    </div>
                </div>

                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="services-two__icon">
                            <img src="{{ asset('assets/site/images/newImages/black_out_icons/tourist.svg') }}"
                                alt="Black Out Escape Room in Dubai" style="max-width: 115px;">
                        </div>
                        &nbsp;
                        <h4>TOURISTS</h4>
                        <div class="feature-text">Let your trip turn
                            into an unforgettable experience.</div>
                    </div>
                </div>

                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="services-two__icon">
                            <img src="{{ asset('assets/site/images/newImages/black_out_icons/gamers.svg') }}"
                                alt="Black Out Escape Room in Dubai" style="max-width: 115px; ">
                        </div>
                        &nbsp;
                        <h4>GAMERS </h4>
                        <div class="feature-text">Are you bored and
                            looking for new challenges?</div>
                    </div>
                </div>

                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="services-two__icon">
                            <img src="{{ asset('assets/site/images/newImages/black_out_icons/corporate.svg') }}"
                                alt="Black Out | Escape Rooms in Dubai" style="max-width: 115px;">
                        </div>
                        &nbsp;
                        <h4>CORPORATE</h4>
                        <div class="feature-text">Corporate event to
                            build the team spirit in your company.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="faq-section" style="background: #07070f; padding-bottom: 100px;">

        <div class="top-pattern-layer"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div>

        <div class="auto-container" style="margin-bottom: 50px;">



            <div class="row">

                <div class="col-12">
                    <div class="section-title title-style-three white-title" style="text-align: center; width:100%">
                        <h2 style="color: #910611;" class="glitch">FAQ
                            <span></span>
                        </h2>
                        <p style="color: #cccccc; font-size: 20px;">
                            Answers to Common Question Below...</p>

                    </div>

                </div>

            </div>


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
        </div>

    </section>




    {{-- tripadvisor testimonials here --}}

    <section class="reviews-section"
        style="background: url({{ asset('assets/site/images/newImages/blackIcon/white_bg_crack-04.webp') }}); padding: 170px 0px 50px 0px !important">

        <div class="top-pattern-layer-allblack" style="top:-3px; ">
        </div>


        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-style-three white-title">
                        <h2>
                            <span>LATEST REVIEWS</span>
                        </h2>
                        {{-- <p style="font-size: 20px;"> Your Comments are
                        important to us</p> --}}
                    </div>
                </div>

            </div>

            <div class="testimonial-slider carousel-outer clearfix" style="margin-bottom: 75px; padding-left:0px">


                <div class="text-carousel owl-carousel owl-theme">
                    @foreach ($tripreviews->chunk(3) as $reviewChunk)
                        <div class="row">
                            @foreach ($reviewChunk as $review)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <div class="review__block"
                                        style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 15px; border-radius: 12px; background-color: #f8f9fa;">
                                        <picture>
                                            <source srcset="{{ asset($review->images) }}" type="image/webp">
                                            <img loading="lazy" src="{{ asset($review->images) }}"
                                                alt="{{ $review->name }}'s Profile Picture" class="review__block-bg"
                                                style="border-radius: 50%; max-width: 80px; height: auto; margin-bottom: 15px; display: block; margin-left: auto; margin-right: auto;">
                                        </picture>
                                        <div class="review__block-info">
                                            <div class="review__block-stars"
                                                style="text-align: center; margin-bottom: 10px;">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M13.8361 6.16399L12.0001 2L9.5001 7.66987L3.33984 7L7.0001 12L4.07189 16H4.5001L5.00026 16.5H6.50026C6.45082 16.5494 6.37791 16.6135 6.28937 16.6793L9.5001 16.3301L12.0001 22L14.5001 16.3301L20.6604 17L18.0543 13.44C18.0199 13.5316 18.0001 13.6371 18.0001 13.7581C18.0001 14.4614 17.3334 13.4651 17.0001 12.8791V12L20.6604 7L14.5001 7.66987L14.2047 7H14.0001V6.5359L13.9843 6.5H13.5001L13.8361 6.16399Z"
                                                            fill="#E5B300"></path>
                                                    </svg>
                                                @endfor
                                            </div>
                                            <div class="text" style="text-align: center;">"{{ $review->comments }}"
                                            </div>
                                            <div class="info clearfix" style="text-align: center; margin-top: 10px;">
                                                <span class="name"
                                                    style="font-weight: bold; color: #333;">{{ $review->name }}</span>&ensp;-&ensp;
                                                <span class="date"
                                                    style="color: #777;">{{ \Carbon\Carbon::parse($review->comment_date)->format('d M, Y') }}</span>&ensp;-&ensp;&ensp;-&ensp;
                                                <span>
                                                    <a href="https://www.tripadvisor.com/Attraction_Review-g294013-d24859666-Reviews-BlackOut_Realistic_Horror_Escape_Games-Abu_Dhabi_Emirate_of_Abu_Dhabi.html"
                                                        target="_blank" rel="noopener noreferrer">
                                                        <img src="https://cdn-icons-png.flaticon.com/512/732/732153.png"
                                                            alt="TripAdvisor Logo"
                                                            style="max-width: 30px; height: auto; display: inline-block;">
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>




            </div>


        </div>

    </section>


    {{-- end of testimaonials --}}





    <section class="news-section no-top-curve" style="background: #910613;">

        <div class="top-pattern-layer-allred"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern.png') }}); top: -73px;"></div>

        {{-- <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div> --}}

        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/beyaz_parca.webp') }});"></div>

        <div class="auto-container" id="blog-posts-container">

            <div class="row">

                <div class="col-12">
                    <div class="section-title title-style-three white-title" style="text-align: center; width:100%">
                        <h2 style="color: #ffff;" class="glitch">LATEST
                            BLOG
                            <span></span>
                        </h2>
                        <p style="color: #cccccc; font-size: 20px;">
                            Follow us </p>
                    </div>

                </div>

            </div>

            @section('blogPosts')

            <div class="row clearfix" id="blog-posts">
    @foreach ($allblog as $blog)
        @if (strtolower($blog->placefor) === 'dubai')
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href="{{ route('abudhabi.blog.blogdetails', ['id' => $blog->id, 'title' => Str::slug($blog->title)]) }}">
                            <img src="{{ Storage::url($blog->blog_img) }}" alt="{{ $blog->title }}" style="max-height: 250px;" />
                        </a>
                    </figure>
                    <div class="over-box">
                        <div class="date">
                            <span class="date-title">{{ date('d M, Y', strtotime($blog->created_at)) }}</span>
                        </div>
                        <h3 class="title_blog blog-title">
                            <a href="{{ route('abudhabi.blog.blogdetails', ['id' => $blog->id, 'title' => Str::slug($blog->title)]) }}">
                                {{ $blog->title }}
                            </a>
                        </h3>
                        <div>{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 50, '...') }}</div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

<!-- Pagination Links -->
<div class="pagination-container">
    {{ $allblog->links() }}
</div>
@show

        </div>
    </section>



    {{-- abdout blackout  --}}
    <section class="reviews-section"
        style="background: url({{ asset('assets/site/images/newImages/blackIcon/white_bg_crack-04.webp') }})">

        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div>


        <div class="auto-container" style="padding: 30px 0;">
            <div class="row">
                <div class="col-12">


                    @if ($pageAbout)
                        <div class="content-section">
                            <!-- Title -->
                            <!-- About Text -->
                            <div id="aboutText"
                                style="color: #000; font-size: 18px; line-height: 1.8; margin-bottom: 15px; text-align: justify;">
                                {!! substr($pageAbout->about_Text, 0, 300) !!}
                            </div>

                            <!-- Hidden Extra Content -->
                            <div id="extraContent"
                                style="display: none; color: #000; font-size: 18px; line-height: 1.8; text-align: justify;">

                                {!! substr($pageAbout->about_Text, 300) !!}

                            </div>

                            <!-- Toggle Button -->
                            <div id="toggleButton"
                                style="margin-top: 10px; color: #e74c3c; font-size: 16px; cursor: pointer; text-decoration: underline; transition: color 0.3s ease;">
                                Read More
                            </div>
                        </div>
                    @else
                        <p style="color: red;">About information not found for this location.</p>
                    @endif





                </div>
            </div>
        </div>
    </section>





@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleButton');
            const extraContent = document.getElementById('extraContent');

            toggleButton.addEventListener('click', function() {
                if (extraContent.style.display === 'none' || extraContent.style.display === '') {
                    extraContent.style.display = 'block';
                    toggleButton.textContent = 'Read Less';
                } else {
                    extraContent.style.display = 'none';
                    toggleButton.textContent = 'Read More';
                }
            });
        });
    </script>




<script>
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault(); // Stop full reload

        let url = $(this).attr('href');

    $.ajax({
        url: url,
        type: 'GET',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success: function(html) {
            // replace only the blog-posts section
            $('#blog-posts-container').html(html);
        },
        error: function(xhr) {
            console.error('AJAX Error:', xhr.responseText);
            alert('Cannot load more posts right now.');
        }
    });
    });
</script>



@endsection
