<x-default-layout>
    @section('styles')
    <style>
        #kt_table_filter label {
            display: none;
            visibility: hidden
        }

        td.pg-actions {
            display: flex !important;
        }


        .process-btn {
            background-color: #910613;

            border: none;

            color: white;

            padding: 5px 18px;

            text-align: center;

            text-decoration: none;

            display: inline-block;

            font-size: 16px;

            margin: 4px 2px;

            transition-duration: 0.4s;

            cursor: pointer;

            border-radius: 5px;

        }

        .process-btn:hover {
            background-color: white;

            color: #910613;

            border: 2px solid #910613;

        }
    </style>
    @endsection
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 col">

        <!--begin::Toolbar container-->
        {{-- @include('pages.reservation._toolbar') --}}
        <!--end::Toolbar container-->

    </div>
    <!--end::Toolbar-->


    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin:::Tabs-->
        <ul
            class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 me-10 justify-content-end">

            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                    href="#published_contents"> Kiralanan Ürün Takibi</a>
            </li>
            <!--end:::Tab item-->
            @hasanyrole('root|admin')


            @endhasanyrole

            <!--begin:::Tab item-->
            {{-- <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#deleted_contents">Arşiv</a>
            </li> --}}
            @hasanyrole('root|admin')@endhasanyrole
        </ul>
        <!--end:::Tabs-->
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="published_contents" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush card-dashed">
                        <!--begin::Card body-->
                        <div class="card-body pt-10">
                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif

                            <table id="reservation_yearly" class="table table-striped border rounded gy-5 gs-7">



                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800">
                                        <th data-priority="1" class="min-w-150px"> Ürün Sırası</th>
                                        <th data-priority="2" class="min-w-300px"> Kişi AD soyad</th>
                                        <th class="min-w-150px">Urün Makine bu</th>
                                        <th class="min-w-100px">Yer(Ülke)</th>
                                        <th class="min-w-150px">İade Tarihi</th>
                                        <!-- <th class="min-w-150px">Kiralandığı Saati</th> -->
                                        <th class="min-w-200px">İşlemler</th>
                                        <th class="min-w-300px">E-Posta :</th>
                                        <th class="">Telefon : </th>
                                        <!-- <th class="">Players : </th> -->
                                        <th class=""> Toplam Ücret : </th>
                                        <th class=""> Oluşturma Tarihi : </th>

                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>
                                            <span>{{ $reservation->id }}</span>
                                        </td>

                                        <td>
                                            {{ $reservation->clientInfo->first_name ?? '' }}
                                            {{ $reservation->clientInfo->last_name ?? '' }}
                                        </td>

                                        <td>
                                            {{ $reservation->room->title ?? 'Room not found' }}
                                        </td>

                                        <td>
                                            {{ $reservation->place_id == 1 ? 'Türkiye' : ($reservation->place_id == 2 ? 'Turkmenistan' : 'N/A') }}
                                        </td>

                                        <td>{{ $reservation->reservation_date->format('d/m/Y') }}</td>

                                        <!-- <td>
                                                @if ($reservation->hour)
                                                    {{ $reservation->hour->start->format('H:i') }} -
                                                    {{ $reservation->hour->end->format('H:i') }}
                                                @endif
                                            </td> -->

                                        <td>
                                            <a href="{{ route('admin.reservations.edit', ['reservation' => $reservation->id]) }}"
                                                class="btn btn-small btn-primary"
                                                style="background: #47be7d; padding:5px 8px">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form
                                                action="{{ route('admin.reservations.destroy', ['reservation' => $reservation->id]) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-small btn-primary"
                                                    onclick="return confirm('Are you sure?')"
                                                    style="background: #f44f6c; padding:5px 8px">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>

                                        <td>
                                            {{ $reservation->clientInfo->email ?? '' }}
                                        </td>

                                        <td>
                                            {{ $reservation->clientInfo->phone ?? '' }}
                                        </td>

                                        <!-- <td>
                                                {{ $reservation->players }}
                                            </td> -->

                                        <td>
                                            @if ($reservation->paymentInfo && $reservation->paymentInfo->amount !== null)
                                            AED {{ $reservation->paymentInfo->amount / 100 }}
                                            @endif
                                        </td>

                                        <td>{{ $reservation->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                </div>
            </div>
            <!--end::Tab pane-->

            @hasanyrole('root|admin')@endhasanyrole
            <div class="tab-pane fade" id="deleted_contents" role="tab-panel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush card-dashed">
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            {{-- @include('pages.reservation._archive_table') --}}
                            <!--end::Table-->
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!--end::Main column-->
    @include('pages.reservation._modals')

    @section('scripts')

    <script src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/turkish-string.js"></script>

    <script>

        
        const turkishLang = {
            language: {

                lengthMenu: "Sayfada _MENU_ kayıt göster",
                zeroRecords: "Eşleşen kayıt bulunamadı",
                emptyTable: "Tabloda veri bulunmuyor",
                info: "_START_ - _END_ / _TOTAL_ kayıt gösteriliyor",
                infoEmpty: "0 - 0 / 0 kayıt gösteriliyor",
                infoFiltered: "(toplam _MAX_ kayıttan filtrelendi)",
                search: "Ara:",
                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
                loadingRecords: "Yükleniyor...",
                processing: "İşleniyor..."

            },
            responsive: true,
            columnDefs: [{
                type: 'turkish',
                targets: '_all'
            }]
        };
        $("#reservation_yearly").DataTable(turkishLang);
        $("#reservation_monthly").DataTable(turkishLang);
        $("#reservation_daily").DataTable(turkishLang);




        var input = document.getElementById('playerNum');

        input.addEventListener('input', function(e) {
            // Parse the input value to integer
            var num = parseInt(e.target.value, 10);

            // Check if the number is within 1 and 11, if not, reset the input
            if (isNaN(num) || num < 1 || num > 11) {
                e.target.value = "";
                alert("Please enter a number between 1 and 11.");
            } else {
                // Remove leading zeros
                e.target.value = num;
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('input[name="room_id"]').on('change', function() {
                sessionStorage.setItem('room_id', $(this).val());
                const selectedRoom = localStorage.getItem('room_id');
                var url = '/admin/hours/' + $(this).val();

                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            _token: '{{ csrf_token() }}',
                            room: selectedRoom ?? 1,
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        var hourOptionsHtml = '';
                        data.forEach(hour => {

                            // Saat bilgisini formatlayarak HTML içeriği oluşturun


                            hourOptionsHtml += `
                                    <label class="d-flex flex-stack cursor-pointer mb-5">
                                        <span class="d-flex align-items-center my-2">
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6">${hour.start} - ${hour.end}</span>
                                            </span>
                                        </span>
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="hour_id" value="${hour.id}" />
                                        </span>
                                    </label>
                                `;

                        });
                        document.getElementById('hourOptions').innerHTML = hourOptionsHtml;
                    })
                    .catch(error => console.error('Error:', error));

            });
        });
    </script>
    @endsection
</x-default-layout>