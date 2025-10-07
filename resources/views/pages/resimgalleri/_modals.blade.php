<!--begin::Modal - Add Room-->
<div class="modal fade" id="kt_modal_add_room" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold"> Yeni Proje Resim Gallerisi Ekle</h2>
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
                <form id="kt_modal_add_form_room" class="form" action="{{ route('admin.ressimgalleri.store') }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <!-- Input fields for room details -->
                        <div class="col-md-6 mb-10">
                            <label for="title" class="required form-label"> Proje Resim Gallerisi Adı </label>
                            <input type="text" name="title" class="form-control form-control-solid" placeholder="Proje başlığı ekle" />
                        </div>

                        

                        <div class="col-12 mb-10">
                            <label for="level" class="form-label"> Bağlı Olan Proje Seçiniz </label>
                            <select class="form-select" id="level" name="level" required>
                                <option value=""> Bağlı Olan Proje Seçiniz</option>

                                @foreach($mainProjects as $project)
                                    <option value="{{ $project->id }}">{{ $project->title }}</option>
                                @endforeach
                            </select>
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
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Input group-->
                                    <div class="form-floating mb-7">
                                        <div class="d-flex flex-column ps-5 flex-start">
                                            <span class="text-black">Poster Resim</span>
                                            <span class="text-black">JPG - 10:16</span>
                                            <span class="text-black">(750x1000px)</span>
                                        </div>
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset($room->poster ?? 'assets/media/logos/vinc.pnp') }})">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper h-300px w-200px bgi-position-center" style="background-image: url({{ asset($room->poster ?? 'assets/media/logos/vinc.png') }})"> </div>
                                            <!--end::Image preview wrapper-->

                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Değiştir">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="poster" accept=".png, .jpg, .jpeg, .webp" />
                                                <input type="hidden" name="poster_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="İptal">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel button-->

                                            <!--begin::Remove button-->
                                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Kaldır">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove button-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>



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