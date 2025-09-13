<x-default-layout>
    <!-- Toolbar -->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 col">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title"></div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <button type="submit" class="btn btn-warning w-100" form="contentForm">
                    <span class="svg-icon svg-icon-2"><!-- SVG icon markup here --></span>
                    Güncelle
                </button>
            </div>
        </div>
    </div>

    <!-- Content Container -->
    <div id="kt_app_content" class="app-content flex-column-fluid col">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="card-body py-4">
                    <!-- Alerts -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @elseif (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <!-- Form -->
                    <form method="POST" id="contentForm" enctype="multipart/form-data"
                        action="{{ route('admin.about.update', $record->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="px-3 py-5">
                            <div class="row g-7">
                                <!-- Title -->
                                <div class="col-md-12 mb-7">
                                    <div class="form-floating">
                                        <input name="title" type="text" class="form-control form-control-solid"
                                            id="title" value="{{ old('title', $record->title) }}" required>
                                        <label for="title">Başlık</label>
                                    </div>
                                </div>

                                <!-- Hakkımızda -->
                                <div class="col-12 mb-7">
                                    <div class="form-floating">
                                        <textarea name="about_Text" class="form-control form-control-solid"
                                            id="about_Text">{{ old('about_Text', $record->about_Text) }}</textarea>
                                        <label for="about_Text">Hakkımızda</label>
                                    </div>
                                </div>

                                <!-- Vision -->
                                <div class="col-12 mb-7">
                                    <div class="form-floating">
                                        <textarea name="vision" class="form-control form-control-solid"
                                            id="vision">{{ old('vision', $record->vision) }}</textarea>
                                        <label for="vision">Vizyon</label>
                                    </div>
                                </div>

                                <!-- Mission -->
                                <div class="col-12 mb-7">
                                    <div class="form-floating">
                                        <textarea name="mision" class="form-control form-control-solid"
                                            id="mision">{{ old('mision', $record->mision) }}</textarea>
                                        <label for="mision">Mision</label>
                                    </div>
                                </div>

                                <!-- KVKK -->
                                <div class="col-12 mb-7">
                                    <div class="form-floating">
                                        <textarea name="kvkk" class="form-control form-control-solid"
                                            id="kvkk">{{ old('kvkk', $record->kvkk) }}</textarea>
                                        <label for="kvkk">KVKK</label>
                                    </div>
                                </div>

                                <!-- Kalite Polisic/Kalite Politikaları -->
                                <div class="col-12 mb-7">
                                    <div class="form-floating">
                                        <textarea name="kalite_polic" class="form-control form-control-solid"
                                            id="kalite_polic">{{ old('kalite_polic', $record->kalite_polic) }}</textarea>
                                        <label for="kalite_polic">Kalite Politikası</label>
                                    </div>
                                </div>

                                <!-- Small Image Uploads -->
                                @for ($i = 1; $i <= 8; $i++)
                                    <div class="col-md-3 mb-7">
                                    <label for="poster_{{ $i }}">Resim {{ $i }}</label>
                                    <input type="file" name="poster_{{ $i }}" class="form-control mb-2">
                                    @if ($record->{'poster_' . $i})
                                    <img src="{{ asset('/' . $record->{'poster_' . $i}) }}"
                                        alt="Poster {{ $i }}" style="max-width: 100%; height: auto;">
                                    @endif
                            </div>
                            @endfor

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    @section('scripts')
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ['about_Text', 'vision', 'mision', 'kvkk', 'kalite_polic'].forEach(id => {
                ClassicEditor
                    .create(document.querySelector(`#${id}`))
                    .catch(error => console.error(error));
            });
        });
    </script>
    @endsection
</x-default-layout>