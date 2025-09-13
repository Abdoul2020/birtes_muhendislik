<x-default-layout>
    <div class="container mt-5">
        <h2 class="mb-4"> Referans Güncelle</h2>

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
            <div class="alert alert-success">{{ session('message') }}</div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.photos_videos.update', $photovideo->id) }}" class="bg-light p-4 rounded">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label class="required form-label"> Referans Adı:</label>
                <input type="text" name="image_or_video_name" class="form-control" placeholder="Enter image or video name" value="{{ $photovideo->name }}" required/>
            </div>

            

            <div class="mb-3">
                <label class="required form-label">Bağlı Hizmet:</label>
                <select name="room_id" class="form-select" required>
                    <option value=""> Bağlı Ürün Seçin</option>
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}" @selected($photovideo->room_id == $room->id)>{{ $room->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Resim Ekle:</label>
                <input type="file" name="photo_img" class="form-control" accept="image/*"/>
                @if($photovideo->photos_img)
                    <div class="mt-2">
                        <img src="{{ Storage::url($photovideo->photos_img) }}" alt="Room Photo" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                    </div>
                @endif
            </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </div>
        </form>
    </div>
</x-default-layout>
