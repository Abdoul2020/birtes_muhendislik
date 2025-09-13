@extends('site.master')

@section('title','Birtes Mühendislik - Ana Sayfa')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<!-- Meta Title and Description -->
<title> Birtes Mühendislik - Referanslar </title>
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
<script src="https://cdn.tailwindcss.com"></script>



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
                        <h2 class=" fw-bold display-2" style="font-size: 28px;"> Referanslar </h2>
                        <nav class="breadcrumb" style="justify-content: center;">
                            <a class="breadcrumb-item" href="/">Ana Sayfa</a>
                            <span class="breadcrumb-item active" aria-current="page"> Referanslar </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Start -->
    <section id="projects" class="pt-5 pb-5">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            <!-- Card -->

            <!-- @foreach ($maincategories as $category)
    <h3>{{ $category['title'] }}</h3>

    @if (!empty($category['references']))
        <ul>
            @foreach ($category['references'] as $reference)
                <li>{{ $reference['title'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No references found.</p>
    @endif
@endforeach -->


            @foreach ($maincategories as $category)
            <div class="group relative overflow-hidden rounded-xl shadow-md">
                <img src="{{ asset($category['poster']) }}" alt="{{ $category['title'] }}" class="w-full h-56 object-cover">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-300">
                </div>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="px-4 text-center text-white text-2xl sm:text-3xl font-extrabold drop-shadow">
                        {{ $category['title'] }}
                    </div>
                    <button type="button"
                        class="mt-3 opacity-0 group-hover:!opacity-100 transition-opacity duration-200 border border-white/80 text-white px-4 py-1.5 rounded"
                        data-key="{{ strtolower(str_replace(' ', '', $category['title'])) }}">
                        Liste
                    </button>
                </div>
            </div>

            @endforeach

        </div>


        <!-- MODAL (no custom CSS; all Tailwind) -->
        <div id="refModal" class="fixed inset-0 z-50 hidden items-center justify-center">
            <div class="absolute inset-0 bg-black/60" data-close></div>

            <div class="relative bg-white w-[96vw] max-w-6xl max-h-[85vh] rounded-2xl shadow-2xl overflow-auto">
                <button type="button"
                    class="absolute right-3 top-3 w-9 h-9 rounded-full bg-[#323232] text-white grid place-items-center"
                    aria-label="Kapat" title="Kapat" data-close>✕</button>

                <div class="p-4 sm:p-6">
                    <h2 id="modalTitle" class="text-2xl font-bold mb-4">Projeler Listesi</h2>

                    <div class="border rounded-xl overflow-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-indigo-700 text-white text-sm">
                                    <th class="px-4 py-3 text-left">SIRA NO</th>
                                    <th class="px-4 py-3 text-left">İŞİN ADI</th>
                                    <th class="px-4 py-3 text-left">YERİ</th>
                                    <th class="px-4 py-3 text-left">İLGİLİ KURUM</th>
                                    <th class="px-4 py-3 text-left">PROJE KAPSAMI</th>
                                    <th class="px-4 py-3 text-left">TARİH</th>
                                    <th class="px-4 py-3 text-left">İŞVEREN FİRMA</th>
                                </tr>
                                <tr>
                                    <th id="categoryBand" colspan="7"
                                        class="bg-[#323232] text-white text-center px-4 py-2 text-sm font-semibold tracking-wide uppercase">
                                        Kategori</th>
                                </tr>
                            </thead>
                            <tbody id="modalBody" class="divide-y divide-gray-200"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects End -->

</div>


@endsection

@section('scripts')

<script>
    const CATEGORIES = @json($maincategories);

    const TITLES = {};
    const TABLES = {};

    // Normalize and populate TITLES and TABLES
    CATEGORIES.forEach(category => {
        const normalizedTitle = category.title.trim().toLowerCase().replace(/\s+/g, '');
        TITLES[normalizedTitle] = category.title;

        TABLES[normalizedTitle] = (category.references ?? []).map(ref =>{ 

            const startYear = ref.baslangic_tarihi ? new Date(ref.baslangic_tarihi).getFullYear() : '';
        const endYear = ref.bitis_tarihi ? new Date(ref.bitis_tarihi).getFullYear() : '';
        const yearRange = startYear && endYear ? `${startYear}–${endYear}` : startYear || endYear || '';


        return[

            ref.id,
            ref.title,
            ref.yer,
            ref.ilgili_kurum,
            ref.proje_kapsami,
            yearRange,
            ref.is_veren_company


        ]


            
        });
    });

    //data to show

    console.log(TITLES, "tables", TABLES);

    const modal = document.getElementById("refModal");
    const modalBody = document.getElementById("modalBody");
    const modalTitle = document.getElementById("modalTitle");
    const categoryBand = document.getElementById("categoryBand");

    // Open modal and render rows
    function openModal(key) {
        const normalizedKey = key.trim().toLowerCase().replace(/\s+/g, '');

        console.log("seekey::", key, "normalize key here", normalizedKey);


        const title = TITLES[normalizedKey] ?? "Projeler Listesi";
        modalTitle.textContent = title;
        categoryBand.textContent = title.toUpperCase();

        const rows = TABLES[normalizedKey] ?? [];
        modalBody.innerHTML = rows.map(r => `
            <tr class="text-sm">
                <td class="px-4 py-3">${r[0]}</td>
                <td class="px-4 py-3">${r[1]}</td>
                <td class="px-4 py-3">${r[2]}</td>
                <td class="px-4 py-3">${r[3]}</td>
                <td class="px-4 py-3">${r[4]}</td>
                <td class="px-4 py-3">${r[5]}</td>
                <td class="px-4 py-3">${r[6]}</td>
            </tr>
        `).join("");

        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }

    // Wire up buttons
    document.querySelectorAll('button[data-key]').forEach(btn => {
        btn.addEventListener('click', () => openModal(btn.dataset.key));
    });

    // Close modal actions
    function closeModal() {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }
    modal.addEventListener('click', (e) => {
        if (e.target.matches('[data-close]')) closeModal();
    });
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });
</script>




@endsection