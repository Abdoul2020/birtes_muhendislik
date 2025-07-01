<footer class="main-footer">
    

    <div class="auto-container">

        <div class="widgets-section">
            <div class="row clearfix " style="padding-top: 100px;">

                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-title">
                            <a href="{{ route('homepage.index') }}">

                                <img src="{{ asset('assets/site/images/newImages/newImage1.webp') }}"
                                    alt="Escape Rooms in Abu Dhabi | Black-Out"
                                    title="Escape Rooms in Abu Dhabi | Black-Out" style="max-width: 250px;">

                            </a>
                        </div>
                        <div class="text" style="color: #ffff;">

                            Black Out escape rooms are a unique
                            and fun way to engage with your
                            colleagues and test how well your team
                            works together.

                        </div>

                        <div class="newsletter-form">
                            <form action="#">
                                <div class="form-group clearfix" style="width: 100%;">
                                    <input type="email" name="email" value placeholder="Email address" required>
                                    <button type="submit" class="theme-btn newsletter-btn"><span
                                            class="icon flaticon-arrows-6"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <ul class="contact-info">
                            <li><strong>Phone</strong> <br><a href="tel:+9710521111041">+971 052
                                    111 1041</a> <br>

                                <a href="tel:+97143483554">+971 4 348 3554 </a>

                            </li>
                            <li><strong>Address</strong> <br>

                                <a href="https://maps.app.goo.gl/Juee2rp4Z6keGHMt8">
                                    Head Office : Al Meydan Street, KML
                                    Business Center, Showroom #4,
                                    Al Quoz-DUBAI
                                </a>
                                <br>

                            </li>
                            <li><strong>Email Address</strong>
                                <br><a href="mailto:info.dxb@black-out.ae"> info.dxb@black-out.ae</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="column col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <div class="row clearfix">
                                <div class="column col-6">
                                    <div class="widget-title">
                                        <h3>LINKS</h3>
                                    </div>
                                    <ul class="list">
                                        <li><a href="{{ route('homepage.index') }}">Home</a></li>

                                        <li><a href="{{ route('dubai.faq') }}"> Faq
                                            </a></li>
                                        <li><a href="{{ route('requestvideo.dubai') }}">Request
                                                Video </a></li>
                                        <li><a href="{{ route('dubai.contact') }}">
                                                Contact
                                            </a></li>
                                        <li><a href="{{ route('dubai.teambuilding') }}">
                                                Terms &
                                                Conditons </a></li>
                                        <li><a href="{{ route('dubai.disclaimer') }}">
                                                Disclaimers
                                                & Liability
                                            </a></li>
                                        <li><a href="{{ route('dubai.privacy') }}">
                                                Privacy
                                                Policy </a></li>

                                    </ul>
                                </div>
                                <div class="column col-6">
                                    <div class="widget-title">
                                        <h3>Rooms </h3>
                                    </div>
                                    <ul class="list">
                                        <li><a href="{{ route('rooms.dubai_detail', ['slug' => 'torture']) }}">Torture
                                            </a></li>
                                        <li><a href="{{ route('rooms.dubai_detail', ['slug' => 'exorcism']) }}">
                                                Exorticism</a></li>
                                        <li><a href="{{ route('rooms.dubai_detail', ['slug' => 'chaos']) }}">
                                                Chaos
                                            </a></li>
                                        <li><a href="{{ route('rooms.dubai_detail', ['slug' => 'psychiatric']) }}">Psychiatric
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="outer-container">

            <div class="bottom-shape-box">
                <div class="bg-shape"></div>
            </div>

            <div class="auto-container">

                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span>
                </div>

                <div class="row clearfix">

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright"><span class="logo-icon"></span> &copy;
                            Copyrights 2024

                            <a href="https://black-out.ae/" style="color: #ffff;">Blackout</a> by Cave Entertainment
                            -
                            All Rights Reserved
                        </div>
                    </div>

                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="social-links">

                            <ul class="default-social-links clearfix"
                                style="display: flex; align-items: center; float: right;">
                                @foreach ($socialMedia as $media)
                                    <li>
                                        <a href="@if ($media->platform == 'whatsap') https://wa.me/{{ $media->username }}
                                            @elseif($media->platform == 'snapchat') https://www.{{ $media->platform }}.com/add/{{ $media->username }}
                                            @elseif($media->platform == 'youtube') https://www.{{ $media->platform }}.com/channel/{{ $media->username }}
                                            @else https://www.{{ $media->platform }}.com/{{ $media->username }} @endif"
                                            target="_blank">
                                            @switch($media->platform)
                                                @case('twitter')
                                                    <span class="fab fa-twitter"></span>
                                                @break

                                                @case('facebook')
                                                    <span class="fab fa-facebook-square"></span>
                                                @break

                                                @case('linkedin')
                                                    <span class="fab fa-linkedin-in"></span>
                                                @break

                                                @case('pinterest')
                                                    <span class="fab fa-pinterest-p"></span>
                                                @break

                                                @case('youtube')
                                                    <span class="fab fa-youtube"></span>
                                                @break

                                                @case('tiktok')
                                                    <span class="fab fa-tiktok"></span>
                                                @break

                                                @case('snapchat')
                                                    <span class="fab fa-snapchat-ghost"></span>
                                                @break

                                                @case('whatsap')
                                                    <span class="fab fa-whatsapp"></span>
                                                @break

                                                @case('instagram')
                                                    <span class="fab fa-instagram"></span>
                                                @break

                                                @default
                                                    {{-- Optionally handle unknown platform with a default or no icon --}}
                                            @endswitch
                                        </a>
                                    </li>
                                @endforeach
                            </ul>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
