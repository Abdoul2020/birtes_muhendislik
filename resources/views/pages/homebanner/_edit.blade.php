<x-default-layout>
    <div class="container mt-5">
        <h2 class="mb-4">Banner Güncelle</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST"
            action="{{ route('admin.homebanner.update', $photovideo->id) }}"
            enctype="multipart/form-data"
            class="bg-light p-4 rounded">
            @csrf
            @method('PATCH')

            <!-- Name -->
            <div class="mb-3">
                <label class="required form-label">Adı:</label>
                <input type="text" name="name" class="form-control" placeholder="Adı"
                    value="{{ old('name', $photovideo->name) }}" required />
            </div>

            <!-- Place For -->
            <div class="mb-3">
                <label class="required form-label">Belge Türü:</label>
                <select name="placefor" id="place_for_select" class="form-select" required>
                    <option value="">Türü Seç</option>
                    <option value="mp4" {{ old('placefor', $photovideo->placefor) === 'mp4' ? 'selected' : '' }}>Video</option>
                    <option value="png" {{ old('placefor', $photovideo->placefor) === 'png' ? 'selected' : '' }}>Resim</option>
                </select>
            </div>

            <!-- Photo Image (if "png") -->
            <div class="mb-3" id="div_photo_img" style="{{ old('placefor', $photovideo->placefor) === 'png' ? '' : 'display: none;' }}">
                <label class="form-label">Photo Image <span class="text-muted">(Resim seçildiğinde)</span>:</label>
                <input type="file" name="photo_img" class="form-control" accept="image/*" />

                @if($photovideo->photos_img)
                <div class="mt-2">
                    <img src="{{ Storage::url($photovideo->photos_img) }}"
                        alt="Mevcut Resim"
                        class="img-thumbnail"
                        style="max-width:200px; max-height:200px;">
                </div>
                @endif
            </div>

            <!-- Video MP4 (if "mp4") -->
            <div class="mb-3" id="div_video_mp4" style="{{ old('placefor', $photovideo->placefor) === 'mp4' ? '' : 'display: none;' }}">
                <label class="form-label">Video MP4 <span class="text-muted">(Video seçildiğinde)</span>:</label>
                <input type="file" name="video_mp4" class="form-control" accept="video/mp4" />

                @if($photovideo->videos_mp4)
                <div class="mt-2">
                    <video width="320" height="240" controls class="mb-2">
                        <source src="{{ Storage::url($photovideo->videos_mp4) }}" type="video/mp4">
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                </div>
                @endif
            </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('place_for_select');
            const photoDiv = document.getElementById('div_photo_img');
            const videoDiv = document.getElementById('div_video_mp4');

            function toggleFields() {
                const val = select.value;
                if (val === 'png') {
                    photoDiv.style.display = '';
                    videoDiv.style.display = 'none';
                } else if (val === 'mp4') {
                    photoDiv.style.display = 'none';
                    videoDiv.style.display = '';
                } else {
                    photoDiv.style.display = 'none';
                    videoDiv.style.display = 'none';
                }
            }

            // On page load
            toggleFields();

            // On select change
            select.addEventListener('change', toggleFields);
        });
    </script>
</x-default-layout>