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

@php
$slug = request()->segment(3);

$map = [
'turkiye' => 'Türkiye',
'germany' => 'Almanya',
'turkmenistan' => 'Türkmenistan',
'russia' => 'Rusya',
];

$country = $map[$slug] ?? 'Türkiye';
@endphp

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('assets/site/img/inside_page.jpg') }});">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"> {{ $country }} Makine Parkuru </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">AnaSayfa</a></li>
                    <li class="breadcrumb-item"><a href="#">Makine Parkur</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"> {{ $country }} Makine Parkuru </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->



<div class="container-xxl py-5 mt-5">
    <div class="container">




        <div class="row g-4">
            <div class="sidebar-widget">
                <div class="tab-post">
                    {{-- Country Tabs --}}
                    <ul class="nav nav-pills nav-justified mb-4">
                        @foreach ($map as $uri => $label)
                        <li class="nav-item">
                            <a class="nav-link {{ $slug === $uri ? 'active disabled pe-none' : '' }}"
                                href="">
                                <!-- {{ $label }} -->
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    {{-- Selected Country Content --}}
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="pb-5 wow fadeInUp mt-3" data-wow-delay="0.1s">
                                <div class="container">
                                    <div class="row g-4">
                                        @forelse ($rooms as $room)
                                        {{-- List of images combined with their titles --}}
                                        @php
                                        $imgs = collect([[ 'img' => $room->poster, 'title' => $room->title ]]);
                                        $attachments->where('room_id', $room->id)
                                        ->each(fn($att) => $imgs->push([
                                        'img' => $att->photos_img,
                                        'title' => $att->name
                                        ]));
                                        @endphp

                                        @foreach ($imgs as $item)
                                        <div class="col-12 col-md-12 col-lg-3 text-center">
                                            <a href="{{ route('home.productsdetail', $room->slug) }}" class="d-block text-decoration-none">
                                                <img class="bg-light p-2 img-fluid mb-2"
                                                    src="{{ asset($item['img']) }}?v=' . date('H:i:s')"
                                                    alt="{{ $item['title'] }}">
                                                <div class="testimonial-text bg-light p-2">
                                                    <p class="mb-0">{{ $item['title'] }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                        @empty
                                        <p class="text-muted">Bu ülkede kayıtlı araç bulunmuyor.</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




    </div>
</div>

<!-- Service Start -->
<!-- Service Start -->
<div class="service product_section mb-5">
    <div class="container py-5">
        <div class="section-header text-center mb-4">
            <h2>Öne Çıkan Özellikler</h2>
        </div>
        <div class="row g-4 mt-3"> <!-- Adds vertical and horizontal gutter spacing -->
            <div class="col-lg-4 col-md-12">
                <div class="service-item text-center bg-light p-4 h-100 rounded">
                    <i class="fa-solid fa-rocket fa-3x text-primary flex-shrink-0"></i>
                    <h3>Hızlı kurulum ve söküm imkânı</h3>
                    <p>Vinç sistemlerimiz, kolay kurulumu ve hızlı sökümü sayesinde sahada zaman ve iş gücünden tasarruf sağlar hiç vakit kaybetmeden çalışmaya başlayın!</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="service-item text-center bg-light p-4 h-100 rounded">
                    <i class="fa fa-shield fa-3x text-primary flex-shrink-0" aria-hidden="true"></i>
                    <h3>Kurulum esnasında en üst seviye güvenlik önlemleri</h3>
                    <p>
                        Kurulum ve söküm süreçlerimizde, operatörlerimiz ve çevre güvenliği için CIP‑sertifikalı ekipmanlar kullanılır.
                        Tüm işlemler, OSHA ve yerel iş güvenliği standartlarına uygun şekilde gerçekleştirilir.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="service-item text-center bg-light p-4 h-100 rounded">
                    <i class="fa fa-shield fa-3x text-primary flex-shrink-0" aria-hidden="true"></i>
                    <h3>En ağır şartlara ve en zorlu iklim koşullarına dayanacak şekilde tasarlanması</h3>
                    <p>
                        Ekipmanlarımız, zorlu coğrafi ve meteorolojik koşullara uygun olarak özel alaşımlarla üretilir.
                        Şiddetli rüzgar, aşırı sıcaklık veya aşırı soğuk gibi dış etkenlere karşı dayanıklıdır ve uzun ömürlü kullanım sunar.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="service-item text-center bg-light p-4 h-100 rounded">
                    <i class="fa-solid fa-certificate fa-3x text-primary flex-shrink-0" aria-hidden="true"></i>
                    <h3>Yurtiçi ve Uluslararası sertifikalara sahiptir (ISO, CE, GOST-R, TÜV NORD, EAC)</h3>
                    <p>
                        Ekipmanlarımız, ISO, CE, GOST-R, TÜV NORD ve EAC gibi ulusal ve uluslararası standartlar doğrultusunda test edilmiş, belgelenmiş ve sertifikalandırılmıştır.
                        Bu sertifikalar, kalite, güvenlik ve performans açısından en üst düzeyde olduğumuzu garantiler.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="service-item text-center bg-light p-4 h-100 rounded">
                    <i class="fa-solid fa-gem fa-3x text-primary flex-shrink-0" aria-hidden="true"></i>
                    <h3>Ekipman kullanımında en iyi kalite tercih edilmiştir</h3>
                    <p>
                        Tüm projelerimizde yüksek kaliteli, sektör lideri markaların ekipmanları kullanılır.
                        Dayanıklılık, performans ve uzun ömür önceliğimizdir çünkü işinizi en iyi şekilde desteklemeyi hedefliyoruz.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="service-item text-center bg-light p-4 h-100 rounded">
                    <i class="fa fa-truck fa-3x text-primary flex-shrink-0" aria-hidden="true"></i>
                    <h3>Daha az tır ve konteyner ile taşınabilirlik</h3>
                    <p>
                        Yeni tasarımımız sayesinde ekipmanlarımız daha kompakt hale getirildi; bu da nakliye sırasında daha az tır ve konteyner ihtiyacı demek. Böylece hem lojistik maliyetleriniz azalır hem de çevresel etki düşer.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Service End -->

<!-- Call To Action Start -->
<div class=" py-5 wow fadeInUp call_to_action_top mt-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-12">
                <h6 class="text-primary text-uppercase" style="color: #ffff !important;"> Hemen Ara </h6>

                <h1 class="mb-4">Ön Rezervasyon Sorunuz mu Var?</h1>
                <p class="mb-0" style="color: #ffff;">Herhangi bir sorunuz varsa, lütfen bizimle iletişime geçin. Size yardımcı olmaktan memnuniyet duyarız.</p>

            </div>
            <div class="col-lg-4 col-md-12">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>
                        +90 530 200 52 20
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