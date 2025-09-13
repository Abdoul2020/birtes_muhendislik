<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
        data-kt-scroll-activate="true" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
            data-kt-menu-expand="false">
            <!--begin:Dashboard-->
            
            <!--begin:Pages-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-semibold text-uppercase fs-7">Sayfalar</span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Pages-->
            @hasanyrole('dubai|abudhabi|Super-Admin|admin')
            <!--begin:Reservations-->
            {{-- <div data-kt-menu-trigger="click" class="menu-item">
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.reservations.index') }}">
            <span
                class="menu-icon">{!! getSvgIcon('duotune/communication/com005.svg', 'svg-icon svg-icon-2') !!}</span>
            <span class="menu-title">All Reservations</span>
            </a>
            <!--end:Menu link-->
        </div>
    </div> --}}

    <!-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion"> -->
    <!--begin:Menu link-->
    <!-- <a href="javascript:;" class="menu-link">
            <span class="menu-icon">{!! getSvgIcon('duotune/communication/com005.svg', 'svg-icon svg-icon-2') !!}</span>
            <span class="menu-title">Ürün Takibi</span>
            <span class="menu-arrow"></span>
        </a> -->
    <!--end:Menu link-->

    <!--begin:Menu sub-->
    <!-- <div class="menu-submenu" style="padding-left: 30px">


            <div class="menu-item">
                <a class="menu-link" href="{{ route('admin.reservations.today-list') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title"> Yakında Dönecekler </span>
                </a>
            </div>


            <div class="menu-item">
                <a class="menu-link" href="{{ route('admin.reservations.dailylist') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Takip</span>
                </a>
            </div>
        </div> -->
    <!--end:Menu sub-->
    <!-- </div> -->
    @endhasanyrole



    <!-- @hasanyrole('dubai|Super-Admin') -->
    <!--begin:Reservations-->
    <!-- <div data-kt-menu-trigger="click" class="menu-item">
                    <div class="menu-item"> -->
    <!--begin:Menu link-->
    <!-- <a class="menu-link" href="{{ route('admin.reservations.dubai') }}">
                            <span class="menu-icon">{!! getSvgIcon('duotune/communication/com005.svg', 'svg-icon svg-icon-2') !!}</span>
                            <span class="menu-title"> Takip</span>
                        </a> -->
    <!--end:Menu link-->
    <!-- </div>
                </div>  -->
    <!--end:Reservations-->
    <!-- @endhasanyrole -->



    @hasanyrole('abudhabi|Super-Admin')
    <!--begin:Reservations-->
    {{-- <div data-kt-menu-trigger="click" class="menu-item">
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('admin.reservations.abudhabi') }}">
    <span class="menu-icon">{!! getSvgIcon('duotune/communication/com005.svg', 'svg-icon svg-icon-2') !!}</span>
    <span class="menu-title">Abu Dhabi</span>
    </a>
    <!--end:Menu link-->
</div>
</div> --}}
<!--end:Reservations-->
@endhasanyrole



@hasanyrole('Super-Admin|admin')
<!--begin:Rooms-->
<!-- <div data-kt-menu-trigger="click" class="menu-item">
    <div class="menu-item"> -->
<!--begin:Menu link-->
<!-- <a class="menu-link" href="{{ route('admin.rooms.index') }}">
            <span class="menu-icon">{!! getSvgIcon('duotune/general/gen022.svg', 'svg-icon svg-icon-2') !!}</span>
            <span class="menu-title">Ürünler</span>
        </a> -->
<!--end:Menu link-->
<!-- </div>
</div> -->


<!-- ana sayfa banner page -->

<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.homebanner.index') }}">
            <span class="menu-icon">
                <!-- Contacts Icon -->

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-banner" viewBox="0 0 24 24">
                    <path d="M4 4h16v4H4z" />
                    <path d="M4 12h16v4H4z" />
                    <polygon points="20,4 24,6 20,8" />
                    <polygon points="20,12 24,14 20,16" />
                    <polygon points="0,4 4,6 0,8" />
                    <polygon points="0,12 4,14 0,16" />
                </svg>


                <!-- End of Contacts Icon -->
            </span>
            <span class="menu-title"> Ana Sayfa Banner </span>
        </a>
        <!--end:Menu link-->
    </div>
</div>

<!-- end of ana sayfa page -->

<!-- about us section -->

<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.about.list') }}">
            <span class="menu-icon">
                <!-- Blog Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                    <path d="M20 21V19a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M16 3a4 4 0 0 1 4 4v3a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h8z"></path>
                </svg>

                <!-- End of Blog Icon -->
            </span>
            <span class="menu-title">Hakkımızda</span>
        </a>
        <!--end:Menu link-->
    </div>
</div>
<!-- end of about us -->

<!-- iletişim bilgileri -->

<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.social.list') }}">
            <span class="menu-icon">{!! getSvgIcon('duotune/abstract/abs048.svg', 'svg-icon svg-icon-2') !!}</span>
            <span class="menu-title"> İletişim Bilgileri</span>
        </a>
        <!--end:Menu link-->
    </div>
</div>

<!-- end of iletişim bilgileri -->
<!-- new row adding here -->
<div data-kt-menu-trigger="click" class="menu-item">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.rooms.index') }}">
            <span class="menu-icon">{!! getSvgIcon('duotune/general/gen022.svg', 'svg-icon svg-icon-2') !!}</span>
            <span class="menu-title">Hizmetler</span>
        </a>
        <!--end:Menu link-->
    </div>
</div>

<!--end:Request Franchise-->


<!--begin:Contact Messages-->

<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.photos_videos.list') }}">
            <span class="menu-icon">
                <!-- Contacts Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-camera" viewBox="0 0 24 24">
                    <path
                        d="M23 7l-7 0 2-2h-3l-2-2h-4l-2 2h-3l2 2-7 0c-1.1 0-1.99 0.9-1.99 2l0 10c0 1.1 0.89 2 1.99 2l20 0c1.1 0 2-0.9 2-2l0-10c0-1.1-0.9-2-2-2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>

                <!-- End of Contacts Icon -->
            </span>
            <span class="menu-title"> Referens şirketler </span>
        </a>
        <!--end:Menu link-->
    </div>
</div>




<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.storyline.list') }}">
            <span class="menu-icon">
                <!-- Contacts Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-book" viewBox="0 0 24 24">
                    <path d="M4 19.5A2.5 2.5 0 016.5 17H20"></path>
                    <path d="M20 3H6.5A2.5 2.5 0 004 5.5v14A2.5 2.5 0 006.5 22H20V3z"></path>
                </svg>

                <!-- End of Contacts Icon -->
            </span>
            <span class="menu-title"> Açıklama Yazılar </span>
        </a>
        <!--end:Menu link-->
    </div>
</div>


<!-- projeler start -->

<div data-kt-menu-trigger="click" class="menu-item">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.projects.index') }}">
            <span class="menu-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-folder" viewBox="0 0 24 24">
                    <path d="M3 7v14h18V7H12l-2-2H3z" />
                </svg>
            </span>
            <span class="menu-title">Projeler</span>
        </a>
        <!--end:Menu link-->
    </div>
</div>
<!-- end of projeler -->

<!-- referenslar ana hizmetler -->
<div data-kt-menu-trigger="click" class="menu-item">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.referensmain.index') }}">
            <span class="menu-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-arrow-up" viewBox="0 0 24 24">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12"></polyline>
                </svg>
            </span>
            <span class="menu-title">Referens Ana Hizmet</span>
        </a>
        <!--end:Menu link-->
    </div>
</div>
<!-- ana himetler -->

<!-- referens projeleri -->

<div data-kt-menu-trigger="click" class="menu-item">
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{ route('admin.referensproject.index') }}">
            <span class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-arrow-up" viewBox="0 0 24 24">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12"></polyline>
                </svg>


            </span>
            <span class="menu-title">Referens Projeleri</span>
        </a>
        <!--end:Menu link-->
    </div>
</div>

<!-- end of referens projeleri -->


<!--end:Contact messages-->
@endhasanyrole

</div>
<!--end::Menu-->
</div>
<!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->