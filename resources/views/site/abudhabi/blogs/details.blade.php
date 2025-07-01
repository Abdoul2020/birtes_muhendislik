@extends('site.abudhabi.master')
@section('meta_tags')
    <!-- Primary Meta Tags -->
    <title>Black Out Blog | {{ $blog->title }}</title>
    <meta name="title" content="Black Out Blog | {{ $blog->title }}">
    <meta name="description" content="{{ $blog->meta_description ?? 'Explore the latest insights, tips, and updates from Black Out - the ultimate escape room experience in Dubai & Abu Dhabi and Abu Dhabi.' }}">
    <meta name="keywords" content="{{ $blog->meta_keywords ?? 'Black Out blog, escape room tips, Black Out UAE, Black Out Dubai & Abu Dhabi, escape room games, horror escape rooms' }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Black Out Blog | {{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->meta_description ?? 'Explore the latest insights, tips, and updates from Black Out - the ultimate escape room experience in Dubai & Abu Dhabi and Abu Dhabi.' }}">
    <meta property="og:image" content="https://black-out.ae{{ Storage::url($blog->blog_img) }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Black Out Blog | {{ $blog->title }}">
    <meta property="twitter:description" content="{{ $blog->meta_description ?? 'Explore the latest insights, tips, and updates from Black Out - the ultimate escape room experience in Dubai & Abu Dhabi and Abu Dhabi.' }}">
    <meta property="twitter:image" content="https://black-out.ae{{ Storage::url($blog->blog_img) }}">
    



@endsection




@section('styles')
    <style>
        .share-links li a {
                font-size: 18px;
                background:none;
                border:none;
        }
        .share-links li a:hover {
            color: var(--theme-red-light);
            box-shadow:none;
            -webkit-box-shadow:none;
        }
        /* share button responsive */
        @media screen and (max-width: 768px) {
            .default-social-links li span {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 480px) {
            .social-links {
                flex-direction: column;

            }

            .default-social-links li span {
                font-size: 14px;

            }

            .post-share-options {
                padding: 10px;
            }

            .social-links {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 15px;

            }

            .default-social-links {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .default-social-links li {
                margin: 5px;
            }

            .default-social-links li span {
                font-size: 18px;
                padding: 5px;
                transition: color 0.3s ease;
            }

            .default-social-links li a {
                display: inline-block;
            }
            
        }

        /* end of share buttons responsive */



        .custom-share-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 12px;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            width: 320px;
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .popup-content {
            margin-bottom: 20px;
        }

        .popup-content ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-between;
        }

        .popup-content li {
            margin: 0 10px;
        }

        .popup-content a {
            text-decoration: none;
            color: #333;
            font-size: 20px;
            transition: color 0.3s;
        }

        .popup-content a:hover {
            color: #007bff;
        }

        .popup-content .copy-link {
            cursor: pointer;
        }

        .popup-close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            background-color: transparent;
            border: none;
            font-size: 20px;
            color: #333;
            cursor: pointer;
        }

        .popup-close-btn:hover {
            color: #ff0000;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }

        .share-icon {
            font-size: 24px;
        }

        .copy-link-icon {
            font-size: 22px;
        }

        .share-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
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

    <section class="faq-section" style="background: #07070f; padding-bottom: 0px !important;  padding-top:230px;">

        <div class="top-pattern-layer"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div>

        <!-- bottom for pattern -->

        <div class="bottom-pattern-layer-dark-allblack"
            style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-bottom.webp') }}); bottom: -122px;">
        </div>

        <div class="auto-container" style="margin-bottom: 50px;">

            <!-- <div class="sec-title centered"><h2 style="color: #ffff;">FAQ</h2>
                                                                                                                                                                          <p> Your Comments are important to us</p>
                                                                                                                                                                          <span class="bottom-curve"></span></div> -->

            <div class="row">

                <div class="col-12">

                    <div class="row"
                        style="position: relative;
                            display: block;
                            margin-bottom: 20px;
                            background-image: linear-gradient(to left, transparent, #880611 20%, #880611 80%, transparent);
                            background-repeat: no-repeat;
                            background-position: bottom;
                            background-size: 100% 2px; padding-top: 48px;">

                        <div class="col-12" style="text-align: center; margin-bottom: 10px; ">

                            <h1 style="color: #ffff; padding-bottom: 20px;" class="glitch">
                                BLOG </h1>

                        </div>

                    </div>

                </div>

            </div>

            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side / Blog Detail-->
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">

                            <div class="blog-detail">
                                <div class="image-box">
                                    @if ($blog->blog_img)
                                        <figure class="image">
                                            <img src="{{ Storage::url($blog->blog_img) }}" alt="{{ $blog->title }}">
                                        </figure>
                                    @endif
                                </div>
                                <div class="lower-content blog-post-content">
                                    <div class="date"><span
                                            class="date-title">{{ $blog->created_at->format('d M, Y') }}</span></div>
                                    <!-- <h3>{{ $blog->title }}</h3> -->
                                    <p>{!! $blog->content !!}</p>
                                </div>
                            </div>

                            <!-- Other Options -->

                            <div class="post-share-options clearfix">
                                <div class="social-links">
                                    <ul class="default-social-links clearfix share-links">

                                        @php
                                            $currentUrl = urlencode(request()->fullUrl());
                                        @endphp

                                        <li>
                                            <span>Share:</span>
                                        </li>

                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?url={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:?subject=Check%20this%20out&body={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fas fa-envelope"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?text={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-whatsapp"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://discord.com/channels/@me?message={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-discord"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://pinterest.com/pin/create/button/?url={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-pinterest"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.reddit.com/submit?url={{ $currentUrl }}"
                                                target="_blank">
                                                <span class="fab fa-reddit"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.quora.com/share?url={{ $currentUrl }}" target="_blank">
                                                <span class="fab fa-quora"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            {{-- end of social shared data --}}


                        </div>

                        <!--Sidebar Side-->
                        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                            <aside class="sidebar">
                                <!-- Search -->
                                <div class="sidebar-widget search-box">
                                    <form method="post" action>
                                        <div class="form-group">
                                            <input type="search" name="search-field" value placeholder="Search"
                                                required>
                                            <button type="submit"><span class="icon fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Post Widget -->
                                <div class="sidebar-widget popular-posts">
                                    <div class="widget-content">
                                        <h4 class="sidebar-title">Recent Posts</h4>

                                        @foreach ($allblog as $blog)
                                            <article class="post">
                                                <div class="post-inner">
                                                    <figure class="post-thumb">
                                                        <a
                                                            href="{{ route('abudhabi.blog.blogdetails', ['id' => $blog->id, 'title' => Str::slug($blog->title)]) }}">
                                                            {{-- Check if blog_img exists, otherwise use a placeholder --}}
                                                            <img src="{{ Storage::url($blog->blog_img) }}"
                                                                alt="{{ $blog->title }}">
                                                        </a>
                                                    </figure>
                                                    <div class="text">
                                                        <a
                                                            href="{{ route('abudhabi.blog.blogdetails', ['id' => $blog->id, 'title' => Str::slug($blog->title)]) }}">
                                                            {{ $blog->title }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach

                                    </div>
                                </div>


                                <!-- Category Widget -->
                                <div class="sidebar-widget categories">
                                    <div class="widget-content">
                                        <h4 class="sidebar-title">ROOMS</h4>
                                        <!-- Blog Category -->
                                        <ul class="blog-categories">
                                            <li><a
                                                    href="{{ route('rooms.detail', ['slug' => 'psychiatric']) }}">Psychiatric</a>
                                            </li>
                                            <li><a href="{{ route('rooms.detail', ['slug' => 'exorcism']) }}">Exorcism</a>
                                            </li>
                                            <li><a href="{{ route('rooms.detail', ['slug' => 'hotel-666']) }}">
                                                    Hotel 666</a></li>
                                            <li><a href="{{ route('rooms.detail', ['slug' => 'the-circus']) }}">
                                                    The Circus </a></li>
                                            <li><a href="{{ route('rooms.detail', ['slug' => 'dungeon']) }}">
                                                    Dungeon </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>

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
                                    <strong style="color: #cbcbcb;">Black
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
