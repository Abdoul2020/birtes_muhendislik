<x-default-layout>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 col">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3"></div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <button type="submit" class="btn btn-warning w-100" form="contentForm">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                  transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
                        </svg>
                    </span>
                    Update Comment
                </button>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <div id="kt_app_content" class="app-content flex-column-fluid col">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="card-body py-4">

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Success Message -->
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <!-- Form -->
                    <form method="post" id="contentForm" enctype="multipart/form-data"
                          action="{{ route('admin.tripadvisor.update', $record->id) }}">
                        @csrf
                        @method('patch')

                        <div class="col-12 float-start px-3 py-5">
                            <div class="row g-9">

                                <!-- Place Dropdown -->
                                <div class="col-md-3 fv-row">
                                    <div class="form-floating mb-7 fv-row">
                                        <select name="place_id" id="place_id" class="form-select form-select-solid" data-control="select2" data-placeholder="Place Select" data-allow-clear="true">
                                            <option value="" disabled selected>Select a Place</option>
                                            @foreach ($placeData as $place)
                                                <option value="{{ $place->id }}" {{ $record->place_id == $place->id ? 'selected' : '' }}>
                                                    {{ $place->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label class="required" for="place_id">Place</label>
                                    </div>
                                </div>

                                <!-- Name Field -->
                                <div class="col-md-3 fv-row">
                                    <div class="form-floating mb-7 fv-row">
                                        <input name="name" type="text" class="form-control form-control-solid" id="name"
                                               value="{{ $record->name }}" required />
                                        <label class="required" for="name">Name</label>
                                    </div>
                                </div>

                                <!-- Comment Field -->
                                <div class="col-md-3 fv-row">
                                    <div class="form-floating mb-7 fv-row">
                                        <input name="comments" type="text" class="form-control form-control-solid" id="comments"
                                               value="{{ $record->comments }}" required />
                                        <label class="required" for="comments">Comment</label>
                                    </div>
                                </div>

                                <!-- Image Upload -->
                                <div class="col-md-3 fv-row">
                                    <div class="form-floating mb-7">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ $record->images ? Storage::url($record->images) : asset('img/placeholder-poster.jpg') }}')">
                                            <div class="image-input-wrapper h-300px w-200px bgi-position-center"></div>
                                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" id="images" name="images" accept=".png, .jpg, .jpeg, .webp"/>
                                                <input type="hidden" name="images_remove"/>
                                            </label>
                                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                    <div class="overlay-layer card-rounded bg-dark bg-opacity-20 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
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
</x-default-layout>
