@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Projeler </title>
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
                        <h2 class=" fw-bold display-2" style="font-size: 28px;"> Projeler </h2>
                        <nav class="breadcrumb" style="justify-content: center;">
                            <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active" aria-current="page"> Projeler </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Projects Start -->
    <section id="projects" class="pt-5 pb-5">

        <div class="container">
    <div class="my-4">
        <button class="filter-button px-3 me-2 mb-3 active" data-filter="*">Tümü</button>
        <button class="filter-button px-3 me-2 mb-3" data-filter=".devameden">Devam Eden</button>
        <button class="filter-button px-3 me-2 mb-3" data-filter=".tamamlanan">Tamamlanan</button>
        <button class="filter-button px-3 me-2 mb-3" data-filter=".other">Diğer Projeler</button>
    </div>

    <div class="isotope-container">
        <div class="row grid">
            @foreach($projects as $project)
                @php
                    // Define a class based on the project's level
                    $levelClass = in_array($project->level, ['devameden', 'tamamlanan'])
                        ? $project->level
                        : 'other';
                @endphp
                <div class="col-md-4 item {{ $levelClass }} mb-4">
                    <div class="project-content position-relative bg-black">
                        <img
                            class="project-img img-fluid"
                            src="{{ $project->poster ? asset($project->poster) : asset('assets/site/img/default-project.jpg') }}"
                            alt="{{ $project->title }}"
                        >
                        <div class="project-description p-5 position-absolute bottom-0 start-0">
                            <h4 class="text-white">{{ $project->title }}</h4>
                            <a href="{{ route('home.projectsdetail', $project->slug) }}" class="text-white text-decoration-underline">
                                Detayı gör
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    </section>
    <!-- Projects End -->
    <!-- end of hizmetler services -->
</div>


@endsection

@section('scripts')




@endsection