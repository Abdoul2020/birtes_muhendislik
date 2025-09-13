@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - İletişim </title>
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
                        <h2 class=" fw-bold display-2" style="font-size: 28px;"> İletişim </h2>
                        <nav class="breadcrumb" style="justify-content: center;">
                            <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active" aria-current="page"> İletişim </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- hizmetler services -->


    <!-- Service Start -->

    <section class="contact-us-wrap pt-5">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="inquiry-item col-lg-6 mb-5">
                    <h3 class="display-6 fw-bold"> İletişim Formu</h3>
                    <p> Bizimle İletişime Geçin.</p>
                    <form class="contact-form row mt-5 mt-lg-0">
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
                            <input type="text" name="name" placeholder="İsim ve Soyisim"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                required="">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
                            <input type="email" name="email" placeholder="E-Posta"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                required="">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
                            <input type="text" name="phone" placeholder="Telefon"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                required="">
                        </div>

                        <div class="col-md-12 col-sm-12 mb-5">
                            <select
                                class="form-select focus-transparent form-control w-100 rounded-0 border-0 ps-3 py-2 text-body contact_text_input"
                                aria-invalid="false" name="choose">
                                <option value="Select Your Service"> Talep ettiğiniz hizmet</option>
                                <option value="1"> Havalandırma Tesisatı</option>
                                <option value="2"> Yangın Sistemleri</option>

                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <input type="text" name="address" placeholder="Adres"
                                class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input">
                        </div>

                        <div class="col-md-6 col-sm-12 mb-5">
                            <select
                                class="form-select focus-transparent form-control w-100 rounded-0 border-0 ps-3 py-2 text-body contact_text_input"
                                aria-invalid="false" name="choose">
                                <option value="Select Your Service">Şehir</option>
                                <option value="Service"> Ankara</option>
                                <option value="Service"> İstanbul</option>
                                <option value="Service"> Konya</option>
                                <option value="Service"> İzmir</option>
                                <option value="Service"> Bursa</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <input type="date" name="date"
                                class="form-control w-100 rounded-0 border-0 px-3 py-2 text-body contact_text_input">
                        </div>
                        <div class="col-md-6 col-sm-12 mb-5">
                            <input type="time" name="city"
                                class="form-control w-100 rounded-0 border-0 px-3 py-2 text-body contact_text_input">
                        </div>
                        <div class="col-md-12 col-sm-12 mb-5">
                            <textarea class="form-control w-100 rounded-0 border-0 ps-3 py-2 contact_text_input"
                                rows="6" type="text" name="message" placeholder="Mesaj"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit"> Gönder</button>
                        </div>
                    </form>
                </div>

                <div class="contact-info col-lg-6 mb-5">
                    @php
                    $places = $socialcontact->groupBy('placefor');

                    // Define labels & icons per platform
                    $platformMap = [
                    'instagram' => ['label' => 'Instagram', 'icon' => 'instagram'],
                    'youtube' => ['label' => 'YouTube', 'icon' => 'youtube'],
                    'whatsap' => ['label' => 'WhatsApp', 'icon' => 'whatsap'],
                    'facebook' => ['label' => 'Facebook', 'icon' => 'facebook'],
                    'eposta' => ['label' => 'E-posta', 'icon' => 'email'],
                    'ofistelefon' => ['label' => 'Ofis Telefonu', 'icon' => 'phone'],
                    'ceptelefon' => ['label' => 'Cep Telefonu', 'icon' => 'phone'],
                    'ofisadres' => ['label' => 'Ofis Adres', 'icon' => 'location'],
                    'depoadres' => ['label' => 'Depo Adres', 'icon' => 'location'],
                    ];

                    // Define title per placefor
                    $placeTitle = [
                    1 => 'Ofis',
                    2 => 'Depo',
                    // add more if needed
                    ];
                    @endphp

                    @foreach($places as $placeKey => $items)
                    <div class="{{ ($placeKey == 1 || $placeKey == 2) ? '' : 'mt-5' }}">
                        <h3 class="office-title office-ankara mb-5 mt-5"
                            style="{{ $placeKey == 1 ? 'border-left: 5px solid #323232; padding-left: 10px;' : 'color: #323232 !important; border-left: 5px solid #2a3990; padding-left: 10px !important;' }}">
                            {{ $placeTitle[$placeKey] ?? 'Diğer' }}
                        </h3>
                        <ul class="contact-list">
                            @foreach($items as $item)
                            @php
                            $plat = $item->platform;
                            $info = $platformMap[$plat] ?? ['label' => ucfirst($plat), 'icon' => 'phone'];
                            @endphp
                            <li>
                                <div class="icon-circle office-ankara" {{ $placeKey != 1 ? 'style=background-color:#323232;' : '' }}>
                                    <svg class="icon" width="24" height="24">
                                        <use xlink:href="#{{ $info['icon'] }}"></use>
                                    </svg>
                                </div>
                                <div class="details">
                                    <span class="label">{{ $info['label'] }}</span><br>
                                    <span class="text">{{ $item->username }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->
    <section id="quote" class="pb-5">
        <div class="container">


            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">



                            <iframe id="map-frame" width="100%" height="500" style="border:0" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://maps.google.com/maps?q=0,0&z=1&output=embed" allowfullscreen>
                            </iframe>

                            <br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 100%;
                                }
                            </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- end of hizmetler services -->
</div>


@endsection

@section('scripts')

@endsection