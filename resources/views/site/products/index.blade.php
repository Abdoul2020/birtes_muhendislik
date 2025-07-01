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
<div class="container-fluid page-header mb-5 p-0" style="background-image: url( {{asset('assets/site/img/inside_page.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"> Ürünler </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">AnaSayfa</a></li>
                    <li class="breadcrumb-item"><a href="#">Vinçler</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Ürünler</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->




<!-- PRODUCT will listed here -->
<!-- Team Start -->
<div class=" product_section py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"> Ürünler </h6>
            <h1 class="mb-5"> Kule Vinçler</h1>
        </div>

        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($loop->index * 0.2) }}s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid"
                            src="{{ asset( $product['poster']) }}?v=' . date('H:i:s')"
                            alt="{{ $product['title'] }}">
                    </div>
                    <div class="bg-light p-4">
                        <h5 class="fw-bold mb-4 text-start">
                            {{ $product['title'] }}
                        </h5>
                        <a href="{{ route('home.productsdetail', $product->slug) }}"
                            class="btn btn-outline-primary incele-btn">
                            İncele
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>
<!-- Team End -->



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
                    <a href="contact.html" class="btn btn-secondary py-3 px-5"> BİZİ Ara<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection