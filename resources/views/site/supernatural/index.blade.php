@extends('site.supernatural.master')

@section('styles')
    <style>
        @font-face {
            font-family: 'Diether Thin';
            src: url('path/to/diether-thin.woff2') format('woff2'),
                url('path/to/diether-thin.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'IM Fell English', serif !important;
            letter-spacing: 0.44em;
            color: #7a7a7a !important;
            /* 440 tracking in em */
        }

        .diether-thinn {
            font-family: 'Diether Thin', sans-serif;
            letter-spacing: 0.44em;
            /* 440 tracking in em */
        }

        .list-group-itemm {
            background-color: #070710;
            border: none;
            cursor: pointer;
            margin-bottom: 60px;
            font-size: 16px;
            font-weight: lighter;
            text-transform: uppercase;
            font-family: 'Diether Thin', sans-serif;
            letter-spacing: 0.44em;
            color: #7a7a7a
        }

        .list-group-itemm.active {
            color: #124c56;
        }

        .faq-question {
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: lighter;
            font-family: 'Diether Thin', sans-serif;
            letter-spacing: 0.44em;
            color: #7a7a7a;
        }

        .faq-item {
            border-bottom: 1px solid #909090
        }

        .faq-answer {
            display: none;
            margin-left: 20px;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: lighter;
            font-family: 'Diether Thin', sans-serif;
            letter-spacing: 0.44em;
            color: #7a7a7a;
        }

        .faq-category {
            margin-bottom: 20px;
        }


        /* image location */
        .image_location {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .image_location img {

            /* Ensure the image fits within the container without cropping */
            display: block;
            margin: 10px auto;
            /* max-height: 290px */
        }

        /* show orhide */

        .text_about p:nth-of-type(4) {
            position: relative;
            overflow: hidden;
            max-height: 3em;
            /* Adjust based on the desired visible lines */
            transition: max-height 0.5s ease;
            /* Smooth transition */
        }

        .text_about p:nth-of-type(4)::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Adjust based on the desired shadow height */
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 1) 100%);
            pointer-events: none;
            transition: height 0.5s ease;
            /* Smooth transition */
        }

        .text_about p.show-all {
            max-height: none;
            /* Show full paragraph */
        }

        .text_about p.show-all::before {
            height: 0;
            /* Remove shadow */
        }



        @media (max-width: 768px) {

            .list-group-itemm,
            .faq-answer,
            .faq-question {
                font-size: 12px
            }

            .onwebNotMobile {
                display: none
            }

            .onmobileNotweb {
                display: block;
            }

            .text_about p {
                font-size: 12px !important;
            }

            #about_supernatural {
                padding-bottom: 0px !important
            }

            #faq_forsuper {
                padding-top: 20px !important
            }

            #location_supernatural {
                padding-top: 0px;
                padding-bottom: 0px
            }

            .text p {
                font-size: 12px;
            }

            .text h3 {
                font-size: 18px !important
            }

            .text h6 {
                font-size: 14px
            }

            .hsixFooter {
                margin-bottom: 45px;
            }

        }

        @media (min-width: 999px) {

            .onwebNotMobile {
                display: block
            }

            .onmobileNotweb {
                display: none;
            }

        }
    </style>
@endsection

@section('content')
    <section class="about-section" id="about_supernatural"
        style="padding-left: 0px !important ; padding-right: 0px !important;">

        {{-- <div class="bottom-pattern-layer-dark" style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div> --}}

        <div class="link-box onwebNotMobile"
            style="position: absolute; top: 100%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">
            <a href="#location_supernatural" class="theme-btn btn-style-one"
                style="font-size: 50px; cursor: pointer; z-index:99999">
                <span style="display: inline-block; cursor: pointer;">
                    <img src="{{ asset('assets/site/images/supernatural/Footer/downscroll.webp') }}" alt=""
                        style="max-width: 45px">
                </span>
            </a>
            <a href="https://wa.me/+971502285222" target="_blank"
                style="float: right; position: relative; z-index:9999; margin:20px">

                <span style="display: inline-block; cursor: pointer;">
                    <img src="{{ asset('assets/site/images/supernatural/Footer/bookNow.webp') }}" alt=""
                        style="max-width: 200px">
                </span>

            </a>
        </div>


        <div class="about-content" style="padding: 0px !important">
            <div class="auto-container" style="max-width: 100% !important">
                <div class="row clearfix">


                    <div class="image-column col-lg-6 col-md-12 col-sm-12 onmobileNotweb" style="margin-top: 80px">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box"><img
                                    src="{{ asset('assets/site/images/supernatural/About/singlehome.webp') }}"
                                    alt="" title=""></div>
                        </div>
                    </div>


                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12" style="order: inherit !important">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="margin-left: 80px">
                            <div class="sec-title">

                                <img src="{{ asset('assets/site/images/supernatural/About/aboutTitle.webp') }}"
                                    alt="" style="max-width: 150px">
                            </div>
                            <div class="text_about" style="text-transform: uppercase;">
                                <p class="diether-thinn">From the makers of ‘Blackout Escape Rooms and the award-winning
                                    ‘House of Fear at Global
                                    Village,
                                    Dubai, comes the latest in horror entertainment!
                                </p>
                                <p class="diether-thinn">Experience the incredible combination of horror and fun as you
                                    navigate an immersive
                                    world of demons and
                                    witches and killers. Experience Supernatural!</p>

                                <p>27 years ago, a wayward gang of best friends tampered with forces beyond their
                                    understanding, unleashing
                                    an evil that had lain dormant for centuries...</p>

                                <p class="hidden-text">Step inside today and explore a place made unrecognizable by the
                                    supernatural forces that now haunt its
                                    rooms and corridors.
                                    Step inside. We have been waiting for you.
                                </p>


                            </div>
                            <div class="link-box" style="text-align: center; margin-top:-60px"><a href="#"
                                    class="theme-btn btn-style-one" id="toggle-btn">
                                    <img src="{{ asset('assets/site/images/supernatural/About/moreread.webp') }}"
                                        alt="" style="max-width: 30px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12 onwebNotMobile">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box"><img
                                    src="{{ asset('assets/site/images/supernatural/About/singlehome.webp') }}"
                                    alt="" title=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- rooms for here  -->
    <section id="faq_forsuper" class="featured-game-area position-relative pt-115 pb-90">

        <div class="link-box onwebNotMobile"
            style="position: absolute; top: 84%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">
            <a href="#rooms" class="theme-btn btn-style-one" style="font-size: 50px; cursor: pointer; z-index:99999">
                <span style="display: inline-block; cursor: pointer;">
                    <img src="{{ asset('assets/site/images/supernatural/Footer/downscroll.webp') }}" alt=""
                        style="max-width: 45px">
                </span>
            </a>
        </div>


        {{-- About faq for --}}

        <div class="about-content" style="padding: 0px !important">
            <div class="auto-container">
                <div class="row clearfix">


                    <div class="sec-title" style="width:100%">

                        <img src="{{ asset('assets/site/images/supernatural/Faq/faqTitle.webp') }}" alt=""
                            style="max-height:56px">
                    </div>


                    <div class="container-fluid">

                        <div class="row">
                            <!-- Categories Column -->
                            <div class="col-md-3 d-none d-md-block">
                                <ul class="list-group" id="categories" style="">
                                    <li class="list-group-itemm active" data-category="general">ABOUT SUPERNATURAL</li>
                                    <li class="list-group-itemm" data-category="account">PRICE</li>
                                    <li class="list-group-itemm" data-category="technical">TIMINGS AND VISITS</li>
                                    <li class="list-group-itemm" data-category="safety"> SAFETY </li>
                                    <li class="list-group-itemm" data-category="contact"> CONTACT </li>
                                </ul>
                            </div>

                            <!-- Questions and Answers Column -->
                            <div class="col-md-9">
                                <div id="faq-content">
                                    <!-- General Category -->
                                    <div class="faq-category" id="general">
                                        <div class="faq-item">
                                            <p class="faq-question">What is Supernatural?</p>
                                            <p class="faq-answer"> Supernatural is a Multisensory indoor horror themed
                                                experience with trained Actors.

                                            </p>
                                        </div>
                                        <hr style="color:white">
                                        <div class="faq-item">
                                            <p class="faq-question">Is this and escape room?</p>
                                            <p class="faq-answer">Shipping typically takes 5-7 business days.</p>
                                        </div>
                                    </div>



                                    <!-- Account Category -->
                                    <div class="faq-category d-none" id="account">
                                        <div class="faq-item">
                                            <p class="faq-question">How do I reset my password?</p>
                                            <p class="faq-answer">You can reset your password by clicking on the 'Forgot
                                                Password' link on the login page.</p>
                                        </div>
                                        <div class="faq-item">
                                            <p class="faq-question">How do I update my email address?</p>
                                            <p class="faq-answer">You can update your email address from the account
                                                settings page.</p>
                                        </div>
                                    </div>

                                    <!-- Technical Category -->
                                    <div class="faq-category d-none" id="technical">
                                        <div class="faq-item">
                                            <p class="faq-question"> > Why is the website not loading?</p>
                                            <p class="faq-answer">
                                                < Please check your internet connection and try again. If the problem
                                                    persists, contact support.</p>
                                        </div>
                                        <div class="faq-item">
                                            <p class="faq-question"> > How do I report a bug?</p>
                                            <p class="faq-answer">
                                                < You can report a bug by using the contact form on our website.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile View -->
                        <div class="d-block d-md-none">
                            <ul class="list-group mb-3" id="mobile-categories">
                                <li class="list-group-itemm" data-category="mobile-general">ABOUT SUPERNATURAL</li>
                                <li class="list-group-itemm" data-category="mobile-account">PRICE</li>
                                <li class="list-group-itemm" data-category="mobile-technical">TIMINGS AND VISIT</li>
                                <li class="list-group-itemm" data-category="mobile-technical">SAFETY</li>
                                <li class="list-group-itemm" data-category="mobile-technical">CONTACT</li>
                            </ul>
                            <div id="mobile-faq-content">
                                <!-- General Category -->
                                <div class="faq-category d-none" id="mobile-general">
                                    <div class="faq-item">
                                        <p class="faq-question"> > What is your return policy?</p>
                                        <p class="faq-answer">
                                            < Our return policy allows you to return items within 30 days of purchase.</p>
                                    </div>
                                    <div class="faq-item">
                                        <p class="faq-question"> > How long does shipping take?</p>
                                        <p class="faq-answer">
                                            < Shipping typically takes 5-7 business days.</p>
                                    </div>
                                </div>

                                <!-- Account Category -->
                                <div class="faq-category d-none" id="mobile-account">
                                    <div class="faq-item">
                                        <p class="faq-question"> > How do I reset my password?</p>
                                        <p class="faq-answer">
                                            < You can reset your password by clicking on the 'Forgot
                                                    Password' link on the login page.</p>
                                    </div>
                                    <div class="faq-item">
                                        <p class="faq-question"> > How do I update my email address?</p>
                                        <p class="faq-answer">
                                            < You can update your email address from the account settings page.</p>
                                    </div>
                                </div>

                                <!-- Technical Category -->
                                <div class="faq-category d-none" id="mobile-technical">
                                    <div class="faq-item">
                                        <p class="faq-question"> > Why is the website not loading?</p>
                                        <p class="faq-answer">
                                            < Please check your internet connection and try again. If the problem persists,
                                                contact support.</p>
                                    </div>
                                    <div class="faq-item">
                                        <p class="faq-question"> > How do I report a bug?</p>
                                        <p class="faq-answer">
                                            < You can report a bug by using the contact form on our website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>


    {{-- location here --}}
    <section class="about-section" id="location_supernatural"
        style="padding-left: 0px !important ; padding-right: 0px !important;">

        {{-- <div class="bottom-pattern-layer-dark" style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div> --}}

        <div class="link-box onwebNotMobile"
            style="position: absolute; top: 84%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">
            <a href="#contact_supernatural" class="theme-btn btn-style-one"
                style="font-size: 50px; cursor: pointer; z-index:99999">
                <span style="display: inline-block; cursor: pointer;">
                    <img src="{{ asset('assets/site/images/supernatural/Footer/downscroll.webp') }}" alt=""
                        style="max-width: 45px">
                </span>
            </a>
        </div>


        <div class="about-content" style="padding: 0px !important">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12" style="order: inherit !important">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title">

                                <img src="{{ asset('assets/site/images/supernatural/Location/locationTitle.webp') }}"
                                    alt="" style="max-height:56px">
                            </div>

                            <div class="text">

                                <h3 class="diether-thinn mb-4"
                                    style="color:#7a7a7a; font-size:20px; text-transform: uppercase;"> Supernatural Haunted
                                    Attraction </h3>

                                <p style="font-size: 16px;">
                                    First Floor, WAFI City Mall
                                    Oud Metha Road, Umm Hurair 2,Dubai, UAE
                                </p>
                                <p style="font-size: 16px;">
                                    Supernatural is located next to Aya Universe at the top of the elevators of the main
                                    atrium
                                </p>

                            </div>

                            <div class="text onwebNotMobile">

                                <h3 class="diether-thinn mb-4"
                                    style="color:#7a7a7a; font-size:20px; text-transform: uppercase;"> Arriving by Car
                                </h3>


                                <p>
                                    You may park on-location using Carrefour Parking, or use the WAFI valet parking service.
                                </p>

                            </div>
                            <div class="text onwebNotMobile">


                                <h3 class="diether-thinn mb-4"
                                    style="color:#7a7a7a; font-size:20px; text-transform: uppercase;"> Public Transport
                                </h3>

                                <p>
                                    The Metro Green line stops at Dubai Healthcare City Station which is a 6 min walk to
                                    WAFI City.
                                </p>

                            </div>

                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">


                            <div class="row">
                                <div class="col-12">
                                    <div class="image_location">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.212428381112!2d55.31637667599044!3d25.22976913037944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d35f0425a33%3A0x4ca1b0dbf1d7981b!2sWafi%20City!5e0!3m2!1str!2str!4v1715956528576!5m2!1str!2str"
                                            width="100%" height="290" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="image_location"><img
                                            src="{{ asset('assets/site/images/supernatural/Location/mapLogo.webp') }}"
                                            alt="" title=""></div>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- contact us part --}}

    <section class="about-section" id="contact_supernatural"
        style="padding-left: 0px !important ; padding-right: 0px !important;">

        {{-- <div class="bottom-pattern-layer-dark" style="background: url({{ asset('assets/site/images/newImages/layers/pattern-black-up.webp') }});"></div> --}}
        <div class="link-box onmobileNotweb"
            style="position: absolute; top:90%; text-align: center; width: 100%; border-top: 1px solid rgba(255, 255, 255, 0.10);">

            <a href="https://wa.me/+971502285222" target="_blank"
                style="float: right; position: relative; z-index:9999; margin:20px">
                <span style="display: inline-block; cursor: pointer;">
                    <img src="{{ asset('assets/site/images/supernatural/Footer/bookNow.webp') }}" alt=""
                        style="max-width: 200px">
                </span>

            </a>
        </div>


        <div class="about-content" style="padding: 0px !important">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12" style="order: inherit !important">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title">

                                <img src="{{ asset('assets/site/images/supernatural/Contact/contactTitle.webp') }}"
                                    alt="" style="max-height:56px">
                            </div>

                            <div class="text">



                                <h3 class="diether-thinn mb-4"
                                    style="color:#7a7a7a; font-size:20px; text-transform: uppercase;"> Supernatural Haunted
                                    Attraction </h3>


                                <div class="sec-title mb-2" style="display: flex; align-items:center">

                                    <div>
                                        <img src="{{ asset('assets/site/images/supernatural/Contact/phoneIcon.webp') }}"
                                            alt="" style="max-width: 40px">
                                    </div>

                                    &nbsp;&nbsp;&nbsp;&nbsp;


                                    <div>



                                        <a href="tel:+971565390909" target="blank">

                                            <img src="{{ asset('assets/site/images/supernatural/Contact/whatsapp.webp') }}"
                                                alt="" style="max-width: 40px">

                                        </a>

                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <div>

                                        <a href="https://wa.me/+971565390909" target="_blank">

                                            <p class="m-0 p-0">
                                                +971 56 539 0909
                                            </p>

                                        </a>

                                        {{-- 
                                        <a href="tel:+97142675123">
                                            <p class="m-0 p-0">
                                                +971 4 267 5123
                                            </p>
                                        </a> --}}




                                    </div>
                                </div>

                                <div class="sec-title mb-1" style="display: flex; align-items:center">

                                    <div>
                                        <img src="{{ asset('assets/site/images/supernatural/Contact/phoneIcon.webp') }}"
                                            alt="" style="max-width: 40px">
                                    </div>

                                    &nbsp;&nbsp;&nbsp;&nbsp;

                                    <div>

                                        <a href="tel:+971502211222">

                                            <p class="m-0 p-0">
                                                +971 4 267 5123
                                            </p>


                                        </a>

                                        {{-- <a href="tel:+97142211222">
                                            <p class="m-0 p-0">
                                                +971 4 22 11 222
                                            </p>
                                        </a> --}}

                                    </div>
                                </div>
                            </div>


                            <div class="text">

                                <h3 class="diether-thinn mb-4"
                                    style="color:#7a7a7a; font-size:20px; text-transform: uppercase;"> Opening Hours</h3>


                                <div class="sec-title mb-3 pb-3">

                                    <h6
                                        style="text-transform: uppercase;
                                     font-family: 'IM Fell English', serif !important;
            letter-spacing: 0.44em;">
                                        Sunday to thursday
                                    </h6>
                                    <h6
                                        style="text-transform: uppercase; font-family: 'IM Fell English', serif !important;
                                    letter-spacing: 0.44em;">
                                        10 am - 12 pm

                                    </h6>


                                </div>

                                <div class="sec-title">

                                    <h6
                                        style="text-transform: uppercase;  font-family: 'IM Fell English', serif !important;
                                    letter-spacing: 0.44em;">
                                        Friday to Saturday
                                    </h6>


                                    <h6 class="hsixFooter"
                                        style="text-transform: uppercase;  font-family: 'IM Fell English', serif !important;
                                    letter-spacing: 0.44em;">
                                        10 am - 12 pm

                                    </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="sec-title ">
                                <img src="{{ asset('assets/site/images/supernatural/Contact/socialMediaTitle.webp') }}"
                                    alt="" style="max-width: 350px; max-height:56px">
                            </div>

                            <div class="sec-title">
                                <p>
                                    @ SUPERNATURALBYCAVE
                                </p>
                            </div>

                            <div class="sec-title p-0 m-0 responsiveSocial" style="display: flex; align-items:center">
                                <div>

                                    <a href="">

                                        <img src="{{ asset('assets/site/images/supernatural/Contact/instagram.webp') }}"
                                            alt="" style="max-width: 35px">
                                    </a>

                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div>
                                    <a href="">
                                        <img src="{{ asset('assets/site/images/supernatural/Contact/tiktok.webp') }}"
                                            alt="" style="max-width: 35px">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Function to show the selected category
        function showCategory(category, isMobile = false) {
            const prefix = isMobile ? 'mobile-' : '';
            document.querySelectorAll('.faq-category').forEach(cat => cat.classList.add('d-none'));
            document.getElementById(prefix + category).classList.remove('d-none');
        }

        // Function to show/hide answers
        function toggleAnswer(question) {
            console.log("dnone", question)
            // question.nextElementSibling.classList.toggle('d-none');
            const answer = question.nextElementSibling;
            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';
            }

        }

        // Event listeners for desktop categories
        document.querySelectorAll('#categories .list-group-itemm').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('#categories .list-group-itemm').forEach(i => i.classList.remove(
                    'active'));
                this.classList.add('active');
                showCategory(this.getAttribute('data-category'));
            });
        });

        // Event listeners for mobile categories
        document.querySelectorAll('#mobile-categories .list-group-itemm').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('#mobile-categories .list-group-itemm').forEach(i => i.classList
                    .remove('active'));
                this.classList.add('active');
                showCategory(this.getAttribute('data-category').split('-')[1], true);
            });
        });

        // Event listeners for questions
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                console.log("notclicked")
                toggleAnswer(this);
            });
        });

        // Initial load
        showCategory('general');


        // hide or show
        document.getElementById('toggle-btn').addEventListener('click', function(event) {
            event.preventDefault();
            var hiddenText = document.querySelector('.text_about p:nth-of-type(4)');
            hiddenText.classList.toggle('show-all');
        });
    </script>
@endsection
