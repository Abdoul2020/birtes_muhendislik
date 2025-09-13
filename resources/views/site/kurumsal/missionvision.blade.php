@extends('site.master')

@section('title','Birtes Mühendislik - Mision & vizyon')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Mision & vizyon </title>
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
                    
                    <div class="col-lg-6">
                        <div class="section-element " >
                            <h2 class="mb-3" style="color: #2a3990; text-align:center;"> <span class="pb-1" style="border-bottom: 4px solid;">Misyon</span></h2>

                            {!! $about_text->mision !!}
                           
                        </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="section-element" >
                            <h2 class="mb-3" style="color: #2a3990; text-align:center;"> <span class="pb-1" style="border-bottom: 4px solid;">Vizyon</span></h2>

                            {!! $about_text->vision !!}
                          
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section id="cities" class="pt-5 pb-5">
        <div class="container">
            <div>
                <h3 class="display-6 fw-bold mb-5" style="color: #2a3990; border-left: 5px solid #323232; padding-left: 10px;"> Firma Değerlerimiz</h3>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Güvenilirlik
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Yenilikçilik
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Dürüstlük
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Verimlilik
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Liderlik
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Duyarlılık
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Dinamik ekip ruhu
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Sadakat
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-dark m-0 text-capitalize d-flex align-items-center">
                            <svg class="text-white bg-primary rounded-circle p-1 me-2" width="25" height="25">
                                <use xlink:href="#tick"></use>
                            </svg> Müşteri odaklılık
                        </p>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <section id="cities" class="pt-5 pb-5">
        <div class="container">
            <div>
                <h3 class="display-6 fw-bold mb-5" style="color: #2a3990; border-left: 5px solid #323232; padding-left: 10px;"> Neler Yapıyoruz</h3>
            </div>


            <div class="section-element" >

            {!! $about_text->kalite_polic !!}
                        
                        </div>


        </div>
    </section>

    

</div>



@endsection

@section('scripts')




@endsection