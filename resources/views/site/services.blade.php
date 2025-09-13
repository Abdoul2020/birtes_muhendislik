@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Hizmetler </title>
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
            <h2 class=" fw-bold display-2" style="font-size: 28px;"> Hizmetler </h2>
            <nav class="breadcrumb" style="justify-content: center;">
              <a class="breadcrumb-item" href="/">Ana Sayfa</a>
              <span class="breadcrumb-item active" aria-current="page"> Hizmetler </span>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- hizmetler services -->
  <!-- Service Start -->
  <section id="about" class="pt-5 pb-5">
    <div class="container ">

      @php
      // Map each room title to an SVG icon identifier
      $iconMap = [
      'Sıhhı Tesisat' => 'plumber',
      'Isıtma Tesisatı' => 'water-heater',
      'Soğutma Sistemleri' => 'water',
      'Endüstriyel Tesisat' => 'plumbing',
      'Yangın Tesisatı' => 'gas',
      // Add more mappings as needed...
      ];
      $defaultIcon = 'install-option';
      @endphp


      <div class="row align-items-center">
        @forelse($services as $service)
        @php
        // Determine appropriate icon or fallback
        $icon = $iconMap[$service->title] ?? $defaultIcon;

        // Extract description items from HTML if needed
        // Example: assuming description contains bullet-points
        $listItems = strip_tags($service->description, '<p>
          <li>
            <ul>
              <h3>');
                @endphp
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="bg-light">
                    <div>
                      <img
                        src="{{ asset($service->poster) }}"
                        alt="{{ $service->title }}"
                        class="img-fluid">
                    </div>

                    <div class="pt-3 pb-5 px-2">
                      <h6 class="text-primary mt-3 pb-2 services_title">
                        <svg class="me-2" width="24" height="24">
                          <use xlink:href="#{{ $icon }}"></use>
                        </svg>
                        {{ $service->title }}
                      </h6>

                      {{-- Display description (cleaned/parsed as needed) --}}
                      <div class="service-description">
                        {!! $service->description !!}
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                <div class="col-12">
                  <p>No services available at the moment.</p>
                </div>
                @endforelse
      </div>


    </div>
  </section>


  <section id="faqs" class="padding-medium" style="
    background-image: url('{{asset('assets/site/img/contact_map.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">
    <div class="container">
      <div class="row gy-4 justify-content-center">


        <div class="col-md-8">
          @php
          $platformIcons = [
          'ofisadres' => 'location',
          'eposta' => 'email',
          'ofistelefon' => 'phone',
          ];
          $defaultIcon = 'contact';

          $labels = [
          'ofisadres' => 'Adres:',
          'eposta' => 'E-posta:',
          'ofistelefon' => 'Telefon:',
          ];

          // Define which platforms you want to show
          $allowedPlatforms = ['ofisadres', 'eposta', 'ofistelefon'];
          @endphp

          <div class="contact-list">
            @foreach ($contacts as $contact)
            @if (in_array($contact->platform, $allowedPlatforms))
            @php
            $icon = $platformIcons[$contact->platform] ?? $defaultIcon;
            $label = $labels[$contact->platform] ?? ucfirst($contact->platform) . ':';
            @endphp
            <div class="contact-item">
              <div class="icon-box">
                <svg class="text-primary me-2" width="25" height="25">
                  <use xlink:href="#{{ $icon }}"></use>
                </svg>
              </div>
              <div class="text-box">
                <div class="label">{{ $label }}</div>
                <div class="detail">{{ $contact->username }}</div>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>



      </div>
    </div>
  </section>
  <!-- Service End -->
  <!-- end of hizmetler services -->
</div>
@endsection

@section('scripts')

@endsection