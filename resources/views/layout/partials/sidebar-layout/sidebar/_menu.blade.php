<style>
    .menu-submenu {
        display: block;
        /* Hide submenu by default */
    }

    .menu-submenu.open {
        display: block;
        /* Show submenu when 'open' class is added */
    }
</style>


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
            <div data-kt-menu-trigger="click" class="menu-item here show">
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">{!! getSvgIcon('duotune/general/gen025.svg', 'svg-icon svg-icon-2') !!}</span>
                        <span class="menu-title"> Yönetim Paneli</span>
                    </a>
                    <!--end:Menu link-->
                </div>
            </div>
            <!--end:Dashboard-->

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

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <a href="javascript:;" class="menu-link">
                        <span class="menu-icon">{!! getSvgIcon('duotune/communication/com005.svg', 'svg-icon svg-icon-2') !!}</span>
                        <span class="menu-title">Ürün Takibi</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--end:Menu link-->

                    <!--begin:Menu sub-->
                    <div class="menu-submenu" style="padding-left: 30px">

                 
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


                        <!-- <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.reservations.abudhabi') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Abu Dhabi</span>
                            </a>
                        </div>  -->


                    </div>
                    <!--end:Menu sub-->
                </div>
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
                <div data-kt-menu-trigger="click" class="menu-item">
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('admin.rooms.index') }}">
                            <span class="menu-icon">{!! getSvgIcon('duotune/general/gen022.svg', 'svg-icon svg-icon-2') !!}</span>
                            <span class="menu-title">Ürünler</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                </div>
                <!--end:Rooms-->
                <!--begin:Rooms-->

                <!-- <div data-kt-menu-trigger="click" class="menu-item">
                    <div class="menu-item"> -->
                        <!--begin:Menu link-->
                        <!-- <a class="menu-link" href="{{ route('admin.hours.index') }}">
                            <span class="menu-icon">{!! getSvgIcon('duotune/general/gen026.svg', 'svg-icon svg-icon-2') !!}</span>
                            <span class="menu-title">Hours</span>
                        </a> -->
                        <!--end:Menu link-->
                    <!-- </div>
                </div> -->
                <!--end:Rooms-->
                <!--begin:Rooms-->
                <!-- <div data-kt-menu-trigger="click" class="menu-item">
                    <div class="menu-item"> -->
                        <!--begin:Menu link-->
                        <!-- <a class="menu-link" href="{{ route('admin.prices.index') }}">
                            <span class="menu-icon">{!! getSvgIcon('duotune/art/art002.svg', 'svg-icon svg-icon-2') !!}</span>
                            <span class="menu-title">Price List</span>
                        </a> -->
                        <!--end:Menu link-->
                    <!-- </div>
                </div> -->
                <!--end:Rooms-->


                <!--begin:FAQ-->
                <!-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <div class="menu-item"> -->
                        <!--begin:Menu link-->
                        <!-- <a class="menu-link" href="{{ route('admin.faq.list') }}">
                            <span class="menu-icon">{!! getSvgIcon('duotune/text/txt002.svg', 'svg-icon svg-icon-2') !!}</span>
                            <span class="menu-title">FAQ</span>
                        </a> -->
                        <!--end:Menu link-->
                    <!-- </div>
                </div> -->
                <!--end:FAQ-->

                <!--begin:Comments-->
                



                <!--end:Comments-->

                <!--begin:Social Media-->




                <!--end:TripadvisorReviews-->






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
                            <span class="menu-title"> Ürün Resimleri </span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                </div>






            

                <!--end:Contact messages-->
            @endhasanyrole

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select the menu link that toggles the submenu
        var menuLink = document.querySelector('.menu-accordion .menu-link');

        // Add click event listener to the link
        menuLink.addEventListener('click', function() {
            // Find the submenu within the parent menu item
            var submenu = this.nextElementSibling;

            // Toggle the 'open' class on the submenu to show or hide it
            submenu.classList.toggle('open');
        });
    });
</script>
