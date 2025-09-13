<div class="modal fade" id="kt_modal_add_photo_videos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Yeni Banner Ekle</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!-- SVG for closing modal -->
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="kt_modal_add_form_photo_video" class="form" action="{{ route('admin.homebanner.store') }}"
                    method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="fv-row mb-7">
                        <label class="required form-label">Adı:</label>
                        <input type="text" name="image_or_video_name" class="form-control form-control-solid"
                            placeholder="Adı ekle" required />
                    </div>

                    <div class="fv-row mb-7">
                        <label class="required form-label">Belge Türü:</label>
                        <select name="place_for" id="place_for_select" class="form-select form-select-solid" required>
                            <option value="">Türü Seç</option>
                            <option value="mp4">Video</option>
                            <option value="png">Resim</option>
                        </select>
                    </div>

                    <div class="fv-row mb-7" id="div_photo_img" style="display: none;">
                        <label class="form-label"> Resim <span class="text-muted">(Gerekli)</span>:</label>
                        <input type="file" name="photo_img" class="form-control form-control-solid" accept="image/*" />
                    </div>

                    <div class="fv-row mb-7" id="div_video_mp4" style="display: none;">
                        <label class="form-label">Video MP4 <span class="text-muted">( Gerekli)</span>:</label>
                        <input type="file" name="video_mp4" class="form-control form-control-solid" accept="video/mp4" />
                    </div>

                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-primary">Yükle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>