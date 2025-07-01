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
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('assets/site/img/inside_page.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">İletişim</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Ana Sayfa</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">İletişim</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class=" py-5">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-12 wow fadeIn mb-4" data-wow-delay="0.1s">
                <iframe
                    class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps?q=Antalya+Bulvarı+Kanal+Mah.+No:130/1+Kepez+Antalya&output=embed"
                    frameborder="0"
                    style="min-height: 350px; border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
                </iframe>

            </div>

            <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5"> İletişim Bilgileri</h1>
            </div>

            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-lg-6 col-12">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Adres //</h5>

                            <p class="m-0">
                                <a href="https://www.google.com/maps/search/?api=1&query=Antalya+Bulvar%C4%B1+Kanal+Mah.+No%3A130%2F1+Kepez+Antalya"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-none" style="color: #596277;">
                                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                                    Antalya Bulvarı Kanal Mah. No:130/1 Kepez Antalya
                                </a>

                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// E-Posta //</h5>

                            <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>
                                <a href="mailto:info@babavinc.com" class="text-decoration-none" style="color: #596277;">info@babavinc.com</a>
                            </p>

                        </div>
                    </div>


                    <div class="col-lg-12  col-12">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Telefon //</h5>

                            <p class="m-0"><small class="fa fa-phone-alt text-primary me-2"></small>
                                Operasyon Tel : <a href="tel:+902423320200" style="color: #596277;">+90 (242) 332 02 00</a> // <br>
                                <span class=""> <strong style="visibility: hidden;"> OperasyonTelpho:</strong><a href="tel:+905302005220" style="color: #596277;">+90 (530) 200 52 20</a> </span>
                            </p>
                            <br>
                            <p class="m-0"><small class="fa fa-phone-alt text-primary me-2"></small>
                                Satın Alma Tel : <a href="tel:+902423351486" style="color: #596277;">+90 (242) 335 14 86</a> // <br>
                                <span class=""> <strong style="visibility: hidden;"> OperasyonTelpho:</strong> <a href="tel:+905533916565" style="color: #596277;">+90 (553) 391 65 65</a> </span>

                            </p>
                            <br>

                            <p class="m-0"><small class="fa fa-phone-alt text-primary me-2"></small>
                                Muhasebe Tel : <a href="tel:+905335023617" style="color: #596277;">+90 (533) 502 36 17</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<div class=" py-5 wow fadeInUp mt-5 " data-wow-delay="0.1s" style="background: #F3EED9; padding-bottom: 150px !important;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-12 ">
                <div class="text-center col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5"> İletişim Formu</h1>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name"> Ad Soyad</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email"> E-Posta</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email"> Telefon</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Konu Seçiniz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Mesaj</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-primary w-100 py-3" type="submit"> Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection