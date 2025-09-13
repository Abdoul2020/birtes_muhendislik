@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Ana Sayfa </title>
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
                        <h2 class=" fw-bold display-2" style="font-size: 28px;"> Firma Profili </h2>
                        <nav class="breadcrumb" style="justify-content: center;">
                            <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active" aria-current="page"> Hakkımızda</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about-us" class="pt-5 pb-5">
        <div class="vertical-element">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-5">
                        <div class="image-holder">
                            <img src="{{asset('assets/site/img/about_birtes.webp') }}" alt="about-us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-element ">
                            <h6 style="color: #2a3990;"> <span class="pb-1" style="border-bottom: 4px solid;">HAKKIMIZDA</span></h6>

                            <h3 class="display-6 fw-bold"> <span style="color: #2a3990;">Birtes</span> Mühendislik </h3>

                            {!! $about_text->about_Text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section id="cities" class="pt-5 pb-5">
        <div class="container">
            <div>
                <h3 class="display-6 fw-bold mb-5" style="color: #2a3990; border-left: 5px solid #323232; padding-left: 10px;"> Bu Şehirlerde Hizmet Verdik</h3>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Ankara
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> İstanbul
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Mersin
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> İzmir
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Konya
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Bursa
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Antalya
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Bursa
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Ankara
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Erzurum
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> İstanbul
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Konya
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container-fluid facts-section my-5 py-5">
            <div class="container py-5" style="background: rgba(15,15,15,0.8);">
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="display-4 text-white counter" data-target="50">+0</h1>
                        <span class="">Farklı Şehir</span>
                    </div>
                    <div class="col-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-4 text-white counter" data-target="10">0</h1>
                        <span class="">Farklı Proje</span>
                    </div>
                    <div class="col-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-4 text-white counter" data-target="100">0</h1>
                        <span class=""> Müşteri Memnuniyeti</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>



@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const update = () => {
                const target = +counter.getAttribute('data-target');
                const current = +counter.innerText;
                const increment = Math.ceil(target / 200);
                if (current < target) {
                    counter.innerText = current + increment;
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = target;
                }
            };
            update();
        });
    });
</script>
@endsection