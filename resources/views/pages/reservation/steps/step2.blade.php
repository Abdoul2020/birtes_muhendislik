<!--begin::Step 2-->
<div data-kt-stepper-element="content">
    <div class="w-100">
        <!--begin::Input group-->
        <div class="fv-row">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required"> Türkiye'de bulunan Ürünler</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Bir Ürün Seçin"></i>
            </label>
            <!--end::Label-->

            @foreach($rooms->where('place_id', 1) as $item)
                <!--begin:Option-->
                <label class="d-flex flex-stack cursor-pointer mb-5">
                    <!--begin:Label-->
                    <span class="d-flex align-items-center my-2">
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">{{ $item->title }}</span>
                        </span>
                        <!--end:Info-->
                    </span>
                    <!--end:Label-->
                    <!--begin:Input-->
                    <span class="form-check form-check-custom form-check-solid">
					    <input class="form-check-input" type="radio" name="room_id" value="{{ $item->id }}" />
                    </span>
                    <!--end:Input-->
                </label>
                <!--end::Option-->
            @endforeach
        </div>
        <!--end::Input group-->
        <hr>
        <!--begin::Input group-->
        <div class="fv-row">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required"> Türkmenistan'da Bulunan Ürünler</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Bir Ürün Seçin"></i>
            </label>
            <!--end::Label-->

            @foreach($rooms->where('place_id', 2) as $item)
                <!--begin:Option-->
                <label class="d-flex flex-stack cursor-pointer mb-5">
                    <!--begin:Label-->
                    <span class="d-flex align-items-center my-2">
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">{{ $item->title }}</span>
                        </span>
                        <!--end:Info-->
                    </span>
                    <!--end:Label-->
                    <!--begin:Input-->
                    <span class="form-check form-check-custom form-check-solid">
					    <input class="form-check-input" type="radio" name="room_id" value="{{ $item->id }}" />
                    </span>
                    <!--end:Input-->
                </label>
                <!--end::Option-->
            @endforeach
        </div>
        <!--end::Input group-->
        <hr>

        <!--begin::Input group-->
        <div class="fv-row">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required"> Almanya'da Bulunan Ürünler</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Bir Ürün Seçin"></i>
            </label>
            <!--end::Label-->

            @foreach($rooms->where('place_id', 3) as $item)
                <!--begin:Option-->
                <label class="d-flex flex-stack cursor-pointer mb-5">
                    <!--begin:Label-->
                    <span class="d-flex align-items-center my-2">
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">{{ $item->title }}</span>
                        </span>
                        <!--end:Info-->
                    </span>
                    <!--end:Label-->
                    <!--begin:Input-->
                    <span class="form-check form-check-custom form-check-solid">
					    <input class="form-check-input" type="radio" name="room_id" value="{{ $item->id }}" />
                    </span>
                    <!--end:Input-->
                </label>
                <!--end::Option-->
            @endforeach
        </div>
        <!--end::Input group-->
        <hr>
         <!--begin::Input group-->
         <div class="fv-row">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                <span class="required"> Rusya'da Bulunan Ürünler</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Bir Ürün Seçin"></i>
            </label>
            <!--end::Label-->

            @foreach($rooms->where('place_id', 4) as $item)
                <!--begin:Option-->
                <label class="d-flex flex-stack cursor-pointer mb-5">
                    <!--begin:Label-->
                    <span class="d-flex align-items-center my-2">
                        <!--begin:Info-->
                        <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">{{ $item->title }}</span>
                        </span>
                        <!--end:Info-->
                    </span>
                    <!--end:Label-->
                    <!--begin:Input-->
                    <span class="form-check form-check-custom form-check-solid">
					    <input class="form-check-input" type="radio" name="room_id" value="{{ $item->id }}" />
                    </span>
                    <!--end:Input-->
                </label>
                <!--end::Option-->
            @endforeach
        </div>
        <!--end::Input group-->


    </div>
</div>
<!--end::Step 2-->
<!-- call jquery library -->


