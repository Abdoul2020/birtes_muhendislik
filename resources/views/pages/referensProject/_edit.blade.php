<x-default-layout>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 col">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3"></div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <button type="submit" class="btn btn-warning w-100" form="contentForm">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    Güncelle
                </button>
                <!--end::Primary button-->
            </div>
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid col">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body py-4">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif


                    <form method="post" id="contentForm" enctype="multipart/form-data"
                        action="{{ route('admin.referensproject.update', $room->id) }}">
                        @csrf @method('patch')

                        <div class="col-12 float-start px-3 py-5">

                            <!--begin::Input group-->
                            <div class="row g-9">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <div class="row g-9">
                                        <!--begin::Col-->

                                        <!--begin::Col-->

                                    </div>
                                </div>
                                <!--end::Col-->


                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                            <!--begin::Input group-->
                            <div class="row g-9">
                                <!--begin::Col Proje Adı -->
                                <div class="col-md-12 fv-row">
                                    <div class="form-floating mb-7 fv-row">
                                        <input name="title" type="text"
                                            class="form-control form-control-solid"
                                            id="title"
                                            value="{{ old('title', $room->title ?? '') }}"
                                            required />
                                        <label class="required" for="title">Proje Adı</label>
                                    </div>
                                </div>
                                <!--end::Col-->

                                <div class="col-md-12 fv-row">
                                    <div class="mb-3">
                                        <label class="required form-label">Bağlı Kategori:</label>
                                        <select name="main_referens_id" class="form-select" required>
                                            <option value="">Bağlı Kategori Seçin</option>
                                            @foreach ($rooms as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ old('main_referens_id', $room->main_referens_id ?? '') == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-10">
                                    <label for="baslangic_tarihi" class="required form-label">Başlangıç Tarihi</label>
                                    <input type="date" name="baslangic_tarihi" id="baslangic_tarihi"
                                        class="form-control form-control-solid"
                                        value="{{ old('baslangic_tarihi', isset($room->baslangic_tarihi) ? \Carbon\Carbon::parse($room->baslangic_tarihi)->format('Y-m-d') : date('Y-m-d')) }}"
                                        placeholder="Başlangıç Tarihi" />
                                </div>

                                <div class="col-md-6 mb-10">
                                    <label for="bitis_tarihi" class="required form-label">Bitiş Tarihi</label>
                                    <input type="date" name="bitis_tarihi" id="bitis_tarihi"
                                        class="form-control form-control-solid"
                                        value="{{ old('bitis_tarihi', isset($room->bitis_tarihi) ? \Carbon\Carbon::parse($room->bitis_tarihi)->format('Y-m-d') : date('Y-m-d')) }}"
                                        placeholder="Bitiş Tarihi" />
                                </div>

                                <div class="col-md-6 mb-10">
                                    <label for="ilgili_kurum" class="required form-label">İlgili Kurum</label>
                                    <input type="text" name="ilgili_kurum" id="ilgili_kurum"
                                        class="form-control form-control-solid"
                                        value="{{ old('ilgili_kurum', $room->ilgili_kurum ?? '') }}"
                                        placeholder="Kurum Adı" />
                                </div>

                                <div class="col-md-6 mb-10">
                                    <label for="proje_kapsami" class="required form-label">Proje Kapsamı</label>
                                    <textarea name="proje_kapsami" id="proje_kapsami" rows="3"
                                        class="form-control form-control-solid"
                                        placeholder="Proje Kapsamı">{{ old('proje_kapsami', $room->proje_kapsami ?? '') }}</textarea>
                                </div>

                                <div class="col-md-12 mb-10">
                                    <label for="yer" class="required form-label">Yer</label>
                                    <input type="text" name="yer" id="yer"
                                        class="form-control form-control-solid"
                                        value="{{ old('yer', $room->yer ?? '') }}"
                                        placeholder="Yer" />
                                </div>

                                <div class="col-md-12 mb-10">
                                    <label for="is_veren_company" class="required form-label">İş Veren Şirket</label>
                                    <input type="text" name="is_veren_company" id="is_veren_company"
                                        class="form-control form-control-solid"
                                        value="{{ old('is_veren_company', $room->is_veren_company ?? '') }}"
                                        placeholder="İş Veren Şirket" />
                                </div>
                            </div>


                            <!--end::Input group-->


                            <!--begin::Input group-->
                            <div class="row g-9">


                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <div class="row g-9">

                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <!--begin::Input group-->
                                            <div class="mb-7 fv-row">
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-danger form-check-solid">
                                                    <input name="status" class="form-check-input" type="checkbox"
                                                        value="{{ $room->status }}" @checked($room->status) />
                                                    <span class="form-check-label status">Durum</span>
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->








                            <div class="row g-9">


                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">

                                </div>
                                <!--begin::Col-->
                            </div>




                        </div>

                    </form>

                    <div class="overlay-layer card-rounded bg-dark bg-opacity-20 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Yükleniyor...</span>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

    @section('scripts')
    <!--CKEditor Build Bundles:: Only include the relevant bundles accordingly-->
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-inline.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-balloon.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-document.bundle.js') }}"></script>

    <script>
        $(document).ready(function() {
            ClassicEditor.create(document.querySelector('#floatingContentDescription'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
    @endsection
</x-default-layout>