<header class="main-header header-style-two" style="background: #000">
    <div class="header-container">

        <div class="header-upper">
            <div class="auto-container" style="max-width:1800px">
                <div class="inner-container clearfix"
                    style="display: flex; justify-content:space-between;align-items:center">

                    <div class="logo-box logo__web">
                        <div class="logo"><a href="{{ route('supernatural.index') }}"
                                title="SuperNatural | Haunted Attraction"><img
                                    src="{{ asset('assets/site/images/supernatural/Header/logo1.webp') }}"
                                    alt="SuperNatural | Haunted Attraction" title="SuperNatural | Haunted Attraction"
                                    style="max-width: 450px; margin-top: 10px;"></a></div>
                    </div>

                    <div class="logo-box logo__mobile" style="max-width:250px; z-index:999999;">
                        <div class="logo"><a href="{{ route('supernatural.index') }}"
                                title="SuperNatural | Haunted Attraction"><img
                                    src="{{ asset('assets/site/images/supernatural/Header/logo1.webp') }}"
                                    alt="SuperNatural | Haunted Attraction" title="SuperNatural | Haunted Attraction"
                                    style="max-width: 250px !important; margin-top: 10px; height:auto !important;"></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix mobile___menu" style="float: none !important;">

                        <div class="mobile-nav-toggler" style="color: #ffff;"><span class="icon flaticon-menu-2"></span>
                        </div>

                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix ">
                                    <li class="diether-thin">
                                        <a href="{{ route('supernatural.index') }}"
                                            style="font-weight: 600 !important">HOME</a>
                                    </li>
                                    <li class="diether-thin"><a href="#about_supernatural"
                                            style="font-weight: 600 !important">ABOUT </a></li>
                                    <li class="diether-thin"><a href="#location_supernatural"
                                            style="font-weight: 600 !important">LOCATION</a></li>
                                    <li class="diether-thin"><a href="#contact_supernatural"
                                            style="font-weight: 600 !important">CONTACT</a></li>
                                    <li class="diether-thin"><a href="#faq_supernatural"
                                            style="font-weight: 600 !important">FAQ</a>

                                    </li>
                                </ul>
                            </div>


                        </nav>

                    </div>


                    <div class="onwebNotMobile">
                        <a href="{{ route('home.index') }}" title=""><img
                                src="{{ asset('assets/site/images/supernatural/Header/powerby.webp') }}"
                                alt="SuperNatural | Haunted Attraction" title="SuperNatural | Haunted Attraction"
                                style="max-width: 250px; margin-top: 10px;"></a>
                    </div>


                </div>
            </div>
        </div>


        <div class="header-top ">
            <div class="auto-container " style="max-width:1500px">



            </div>
        </div>


    </div>

    <div class="sticky-header">
        <div class="auto-container clearfix">

            <div style="display: flex; justify-content: space-between; align-items: center;">

                <div class="logo pull-left">
                    <a href="{{ route('homepage.index') }}" title><img
                            src="{{ asset('assets/site/images/supernatural/Header/logo1.webp') }}"
                            alt="Black-out Rooms in Dubai | Black-Out" style="max-width: 250px; margin-top: 10px;"
                            title></a>
                </div>

                <div class="pull-right">

                    <nav class="main-menu clearfix">

                    </nav>
                </div>

            </div>

        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">

            <div class="nav-logo"><a href="{{ route('homepage.index') }}">
                    <img src="" alt="" title></a></div>
            <div class="menu-outer"></div>

            <ul class="navigation clearfix ">
                <li class="diether-thinText">
                    <a href="{{ route('supernatural.index') }}"
                        style="color: #ffff !important; letter-spacing:2px !important; font-weight:lighter !important">Visit
                        Blackout</a>
                </li>
                <li class="diether-thin">
                    <a href="https://wa.me/+971502285222" style="" target="_blank">
                        <span style=" cursor: pointer;">
                            <img src="{{ asset('assets/site/images/supernatural/Footer/bookNow.webp') }}"
                                alt="" style="max-width: 150px">
                        </span>

                    </a>


                </li>

                <li class="diether-thin pb-3 pt-3">

                    <div class="sec-title p-0 m-0 responsiveSocial"
                        style="display: flex; align-items:center; justify-content:center">
                        <div>

                            <a href="">

                                <img src="{{ asset('assets/site/images/supernatural/Contact/instagram.webp') }}"
                                    alt="" style="max-width: 30px">
                            </a>

                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div>
                            <a href="">
                                <img src="{{ asset('assets/site/images/supernatural/Contact/tiktok.webp') }}"
                                    alt="" style="max-width: 30px">
                            </a>
                        </div>
                    </div>


                </li>

            </ul>




            {{-- <div class="link-box" style="padding: 30px 25px 0px 25px; display: list-item; text-align:center">
                <a href="{{ route('rooms.dubai') }}" class="theme-btn btn-style-one"
                    style="padding: 0px 0px !important;"><span class="btn-title glitch">
                        Visit Blackout</span></a>
            </div> --}}








        </nav>
    </div>

</header>
