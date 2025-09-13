@extends('site.master')

@section('title','Birtes Mühendislik - KVKK')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - KVKK </title>
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
                        <h2 class=" fw-bold display-2" style="font-size: 28px;"> KVKK </h2>
                        <nav class="breadcrumb" style="justify-content: center;">
                            <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active" aria-current="page"> KVKK</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    



    

    <section id="cities" class="pt-5 pb-5">
        <div class="container" style="max-width:650px">
            <div>
                <h3 class="display-6 fw-bold mb-5" style="color: #2a3990; border-left: 5px solid #323232; padding-left: 10px;"> KVKK</h3>
            </div>


            <div class="section-element" >

            {!! $about_text->kvkk !!}
                           


                        </div>


        </div>
    </section>

    

</div>



@endsection

@section('scripts')




@endsection