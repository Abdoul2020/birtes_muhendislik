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
                              transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                    </svg>
                </span>
                    <!--end::Svg Icon-->
                    Ürünü Kaydet
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
                          action="{{ route('admin.rooms.update', $room->id) }}">
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

                                <!--begin::Col-->
                                
                                
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->



                            <!--begin::Input group-->
                            <div class="row g-9">
                                <!--begin::Col First Name -->
                                <div class="col-md-6 fv-row">
                                    <div class="form-floating mb-7 fv-row">
                                        <input name="title" type="text"
                                               class="form-control form-control-solid" id="title"
                                               value="{{ $room->title }}" required/>
                                        <label class="required " for="title"> Ürün Adı</label>
                                    </div>
                                </div>
                                <!--end::Col-->


                                <!--begin::Col Last Name -->
                                <div class="col-md-6 fv-row">
                                    <div class="form-floating mb-7 fv-row">
                                        <input name="slug" type="text"
                                               class="form-control form-control-solid" id="slug"
                                               value="{{ $room->slug }}" required/>
                                        <label class="required " for="slug">uzantı</label>
                                    </div>
                                </div>
                                <!--end::Col-->
                                
                                
                                <!--end::Col-->
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




                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8">
                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <textarea name="description" data-kt-autosize="true" class="tox-target"
                                        id="floatingContentDescription">{!! $room->description !!}</textarea>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Input group-->



                            <div class="row g-9">

                        
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Input group-->
                                    <div class="form-floating mb-7">
                                        <div class="d-flex flex-column ps-5 flex-start">
                                            <span class="text-black"> Poster Resmi</span>
                                            <span class="text-black">JPG - 10:16</span>
                                            <span class="text-black">(750x1000px)</span>
                                        </div>
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset($room->poster ?? 'img/placeholder-poster.jpg') }}?{{ time() }})">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper h-300px w-200px bgi-position-center" style="background-image: url({{ asset($room->poster ?? 'img/placeholder-poster.jpg') }}?{{ time() }})"> </div>
                                            <!--end::Image preview wrapper-->

                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Değitir">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="poster" accept=".png, .jpg, .jpeg, .webp"/>
                                                <input type="hidden" name="poster_remove"/>
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

            $(document).ready(function () {
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
