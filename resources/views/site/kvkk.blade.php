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


@section('content')


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url( {{ asset('assets/site/img/inside_page.jpg') }});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown"> Kişisel Verilerin Korunması Kanunu</h1>
                
            </div>
        </div>
    </div>
    <!-- Page Header End -->



 <!-- About Start -->
 <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-12">
                    
                    <p class="mb-4">

                        Firmamız 1980 yılında Antalya da BABA KURTARMA olarak faaliyete girmiştir. 1980 yılında kara düzen dediğimiz vinçlerle temelini attığımız işletmeyi geliştirerek sektör haline getirip Türkiye'nin tüm illerine ulaşmayı başardık. Müşteri hizmetlerinde daha yakın ilgilenelim diye İstanbul Hadımköy de şubemiz bulunmaktadır. 2001 yılından itibaren ağımızı genişleterek Rusya/Almanya/Türkmenistan/Özbekistan şubelerimizi açmış bulunmaktayız.
                    
                    </p>

                    <div class="d-block">

                        <div>
                        <a href="" class="text-primary" target="_blank">  KVK Politikamız için tıklayınız. </a>
                        </div>
                        <div>
                        <a href="" class="text-primary" target="_blank">  Kişisel Veri Saklama ve İmha Politikası için tıklayınız.</a>
                        </div>

                        <div>
                        <a href="" class="text-primary" target="_blank">  Kişisel Veri Sahibi Başvuru Formu için tıklayınız. </a>
                        </div>
                    </div>

                   

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<!-- Call To Action Start -->
<div class=" py-5 wow fadeInUp call_to_action_top mt-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6">
                <h6 class="text-primary text-uppercase" style="color: #ffff !important;"> Hemen Ara </h6>

                <h1 class="mb-4">Ön Rezervasyon Sorunuz mu Var?</h1>
                <p class="mb-0" style="color: #ffff;">Herhangi bir sorunuz varsa, lütfen bizimle iletişime geçin. Size yardımcı olmaktan memnuniyet duyarız.</p>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+90 530 200 52 20
                    </h3>
                    <a href="{{ route('home.contactpage') }}" class="btn btn-secondary py-3 px-5"> BİZİ Ara<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection