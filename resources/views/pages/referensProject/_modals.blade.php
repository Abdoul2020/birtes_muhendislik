<!--begin::Modal - Add Room-->
<div class="modal fade" id="kt_modal_add_room" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold"> Yeni Proje Ekle</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_form_room" class="form" action="{{ route('admin.referensproject.store') }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <!-- Input fields for room details -->
                        <div class="col-md-12 mb-10">
                            <label for="title" class="required form-label"> Proje Adı </label>
                            <input type="text" name="title" class="form-control form-control-solid" placeholder="Proje başlığı ekle" />
                        </div>

                        <div class="fv-row mb-7">
                        <label class="required form-label">Bağlı Kategori:</label>
                        <select name="main_referens_id" class="form-select form-select-solid" required>
                            <option value=""> Bağlı Kategori seçin</option>
                            @foreach ($maincategories as $room)
                                <option value="{{ $room->id }}">{{ $room->title }}</option>
                            @endforeach
                        </select>
                    </div>
                        
                        <div class="col-md-6 mb-10">
                            <label for="baslangic_tarihi" class="required form-label">Başlangıç Tarihi</label>
                            <input type="date" name="baslangic_tarihi" id="baslangic_tarihi"
                                class="form-control form-control-solid"
                                value="{{ old('baslangic_tarihi', date('Y-m-d')) }}"
                                placeholder="Başlangıç Tarihi" />
                        </div>

                        <div class="col-md-6 mb-10">
                            <label for="bitis_tarihi" class="required form-label">Bitiş Tarihi</label>
                            <input type="date" name="bitis_tarihi" id="bitis_tarihi"
                                class="form-control form-control-solid"
                                value="{{ old('bitis_tarihi', date('Y-m-d')) }}"
                                placeholder="Bitiş Tarihi" />
                        </div>

                        <div class="col-md-6 mb-10">
                            <label for="ilgili_kurum" class="required form-label">İlgili Kurum</label>
                            <input type="text" name="ilgili_kurum" id="ilgili_kurum"
                                class="form-control form-control-solid"
                                value="{{ old('ilgili_kurum') }}"
                                placeholder="Kurum Adı" />
                        </div>

                        <div class="col-md-6 mb-10">
                            <label for="proje_kapsami" class="required form-label">Proje Kapsamı</label>
                            <textarea name="proje_kapsami" id="proje_kapsami" rows="3"
                                class="form-control form-control-solid"
                                placeholder="Proje Kapsamı">{{ old('proje_kapsami') }}</textarea>
                        </div>

                        <div class="col-md-6 mb-10">
                            <label for="yer" class="required form-label">Yer</label>
                            <input type="text" name="yer" id="yer"
                                class="form-control form-control-solid"
                                value="{{ old('yer') }}"
                                placeholder="Yer" />
                        </div>

                        <div class="col-md-6 mb-10">
                            <label for="is_veren_company" class="required form-label">İŞ Veren Şirket</label>
                            <input type="text" name="is_veren_company" id="is_veren_company"
                                class="form-control form-control-solid"
                                value="{{ old('is_veren_company') }}"
                                placeholder="İŞ Veren Şirket" />
                        </div>


                        <div class="col-md-6 mb-10">
                            <label for="status" class="form-label">Durum</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="status" name="status">
                                <label class="form-check-label" for="status">Aktif</label>
                            </div>
                        </div>

                        <!-- Input for Description -->
                        

                        <div class="col-12">

                            <div class="row">

                            </div>
                            <!--begin::Col-->
                        </div>



                    </div>

                    <!-- Images upload inputs -->
                    <!-- Add image inputs similar to the update form structure, adjusting for file uploads -->
                    <!-- Submit and cancel buttons -->
                    <div class="text-center">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Kaydet</span>
                            <span class="indicator-progress"> Lütfen bekleyin... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->

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


</div>
<!--end::Modal - Add Room-->