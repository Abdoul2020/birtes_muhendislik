@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Proje detayı </title>
<meta name="title" content="Birtes Mühendislik - Ana Sayfa">
<meta name="description" content="Birtes Mühendislik - Ana Sayfa">
<meta name="keywords" content=" Birtes Mühendislik - Ana Sayfa ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://birtesmuhendislik.com/">
<meta property="og:title" content="Birtes Mühendislik - Ana Sayfa">
<meta property="og:description" content="Birtes Mühendislik - Ana Sayfa">
<meta property="og:image" content="{{ asset('assets/site/img/logo_favicon.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="Birtes Mühendislik - Ana Sayfa">
<meta property="twitter:description" content="Birtes Mühendislik - Ana Sayfa">
<meta property="twitter:image" content="{{ asset('assets/site/img/logo_favicon.png') }}">


@endsection


@section('styles')



@endsection



@section('content')


<div class="main-body container-xxl bg-white position-relative rounded-4 p-0 mb-lg-5">

    <section id="hero" class="pt-5 px-3">
        <div style="background-color: #f8f9fa;" class="rounded-3">
            <div class="container">
                <div class="row">
                    <div class="pt-3 pb-3" style="text-align: center;">
                        <h2 class=" fw-bold display-2" style="font-size: 28px;"> Ankara Büyük Şehir Projesi </h2>
                        <nav class="breadcrumb" style="justify-content: center;">
                            <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active" aria-current="page">
                                Ankara Büyük Şehir Projesi
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Start -->

    <section id="project-details" class="padding-small">
        <div class="container">
            <div class="row g-lg-5">
                <main class="post-grid col-lg-8">
                    <article class="post-item">
                        <div class="post-content ">
                            <div class="post-description">
                                <div class="row flex-column">
                                    <div class="col-md-12">
                                        <!-- product-large-slider -->
                                        <div class="swiper product-large-slider">
                                            <div class="swiper-wrapper">

                                                @if (!empty($projectsdetails->poster))
                                                <div class="swiper-slide">
                                                    <img src="{{ asset($projectsdetails->poster) }}?v={{ time() }}"
                                                        alt="{{ $projectsdetails->title }} poster"
                                                        class="img-fluid">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- / product-large-slider -->
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <!-- product-thumbnail-slider -->
                                        <div thumbsSlider="" class="swiper product-thumbnail-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/site/img/blog1.jpg') }}" alt="image"
                                                        class="thumb-image img-fluid">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/site/img/blog1.jpg') }}" alt="image"
                                                        class="thumb-image img-fluid">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/site/img/blog1.jpg') }}" alt="image"
                                                        class="thumb-image img-fluid">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/site/img/blog1.jpg') }}" alt="image"
                                                        class="thumb-image img-fluid">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/site/img/blog1.jpg') }}" alt="image"
                                                        class="thumb-image img-fluid">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/site/img/blog1.jpg') }}" alt="image"
                                                        class="thumb-image img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / product-thumbnail-slider -->
                                    </div>
                                </div>
                                <div class="my-5">
                                    <h4 class="my-3"> {{ $projectsdetails->title }}</h4>
                                    <p>
                                        {!! $projectsdetails->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
                <aside class="col-lg-4 mt-5">
                    <div class="post-sidebar">
                        <div class="reviews-components widget sidebar-categories border rounded-3 p-5 mb-5">
                            <h5 class="widget-title text-uppercase border-bottom pb-3 mb-3">Projet Detayı</h5>
                            <table class="table">
                                <tr>
                                    <th class="heading-color" scope="row">Başlangıç :</th>
                                    <td>{{ \Carbon\Carbon::parse($projectsdetails->baslangic_tarihi)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th class="heading-color" scope="row">Bitiş Tarihi :</th>
                                    <td>{{ \Carbon\Carbon::parse($projectsdetails->bitis_tarihi)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <th class="heading-color" scope="row">İlgi Kurum :</th>
                                    <td> {{ $projectsdetails->ilgili_kurum }} </td>
                                </tr>
                                <tr>
                                    <th class="heading-color" scope="row">Proje Kapsamı:</th>
                                    <td> {{ $projectsdetails->proje_kapsami }}</td>
                                </tr>
                                <tr>
                                    <th class="heading-color" scope="row">Yer :</th>
                                    <td> {{ $projectsdetails->yer }} </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- Projects End -->
    <!-- end of hizmetler services -->

</div>


@endsection

@section('scripts')



@endsection