<!-- Begin::Modal - Add Photo/Video -->
<div class="modal fade" id="kt_modal_add_photo_videos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"> Yeni Resim Ekle</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!-- SVG for closing modal -->
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="kt_modal_add_form_photo_video" class="form" action="{{ route('admin.photos_videos.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="fv-row mb-7">
                        <label class="required form-label"> Resim Adı:</label>
                        <input type="text" name="image_or_video_name" class="form-control form-control-solid" placeholder="Resim Adı Ekle" required/>
                    </div>
                    
                    <div class="fv-row mb-7">
                        <label class="required form-label">Bağlı Ülke:</label>
                        <select name="place_for" class="form-select form-select-solid" required>
                            <option value=""> Bağlı Ülke Secin</option>
                            <option value="Türkiye">Türkiye</option>
                            <option value="Turkmenistan"> Turkmenistan</option>
                            <option value="Almanya"> Almanya</option>
                            <option value="Rusya"> Rusya</option>
                            <option value="All">Tüm Ülke</option>
                        </select>
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required form-label">Bağlı Ürün:</label>
                        <select name="room_id" class="form-select form-select-solid" required>
                            <option value=""> Bağlı Ürün seçin</option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <div class="fv-row mb-7">
                        <label class="form-label"> Resim Ekle:</label>
                        <input type="file" name="photo_img" class="form-control form-control-solid" accept="image/*"/>
                    </div>
                   
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End::Modal - Add Photo/Video -->
