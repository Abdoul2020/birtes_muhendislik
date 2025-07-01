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
        @include('pages.reservation._toolbar')
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
                <a class="nav-link text-active-primary pb-4 active" id="reservations-tab" data-bs-toggle="tab"
                    href="#published_contents">Yakında Dönecek Makineler</a>
            </li>
            <!--end:::Tab item-->
            @hasanyrole('root|admin')

            @endhasanyrole

            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" id="archive-tab" data-bs-toggle="tab"
                    href="#deleted_contents">Arşiv</a>
            </li>
            @hasanyrole('root|admin')@endhasanyrole
        </ul>


        <!--end:::Tabs-->
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="published_contents" role="tabpanel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush card-dashed">
                        <div class="card-body pt-10">
                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif

                            <table id="reservation_yearly" class="table table-striped border rounded gy-5 gs-7">
                                @php
                                $currentPath = request()->path();
                                $isDubai = Str::contains($currentPath, 'dubai');
                                $isAbuDhabi = Str::contains($currentPath, 'abudhabi');
                                $isToday = Str::contains($currentPath, 'today');
                                $placeId = $isDubai ? 1 : ($isAbuDhabi ? 2 : null);
                                $filteredRooms = $rooms->filter(function ($room) use ($placeId) {
                                return is_null($placeId) ? true : $room->place_id == $placeId;
                                });
                                $roomTitles = !$isToday ? $filteredRooms->pluck('title')->unique() : null;
                                @endphp

                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800">
                                        @if ($isToday)
                                        <th data-priority="1" class="min-w-150px"> Ürün Sırası </th>
                                        <th data-priority="2" class="min-w-300px"> Kişi AD soyad </th>
                                        <th class="min-w-150px">Ürün </th>
                                        <th class="min-w-100px">Yer (Ülke)</th>
                                        <th class="min-w-150px">İade Tarihi</th>
                                        <th class="min-w-200px">İşlemler</th>
                                        <th class="min-w-300px">E-Posta</th>
                                        <th>Telefon : </th>
                                        <th> Ödeme Durumu</th>
                                        <th>Oluşturma Tarihi : </th>
                                        @else
                                        <th>Date</th>
                                        @foreach ($roomTitles as $title)
                                        <th>{{ $title }}</th>
                                        @endforeach
                                        <th>Processes</th>
                                        @endif
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($isToday)
                                    @foreach ($reservations as $reservation)
                                    @php
                                    // Parse dates once to avoid calling \Carbon\Carbon::parse() multiple times
                                    $reservationDate = $reservation->reservation_date->format('d/m/Y');
                                    $startTime = $reservation->hour
                                    ? $reservation->hour->start->format('H:i')
                                    : 'N/A';
                                    $endTime = $reservation->hour
                                    ? $reservation->hour->end->format('H:i')
                                    : 'N/A';
                                    $createdAt = $reservation->created_at->format('d/m/Y');
                                    @endphp
                                    <tr>
                                        <td>&nbsp; <span>{{ $reservation->id }}</span> </td>
                                        <td>{{ $reservation->clientInfo->first_name ?? 'N/A' }}
                                            {{ $reservation->clientInfo->last_name ?? 'N/A' }}
                                        </td>
                                        <td>{{ $reservation->room->title ?? 'Room not found' }}</td>
                                        <td>
                                            {{ $reservation->place_id == 1 ? 'Dubai' : ($reservation->place_id == 2 ? 'Abu Dhabi' : 'N/A') }}
                                        </td>
                                        <td>{{ $reservationDate }}</td>
                                        <td>
                                            <a href="{{ route('admin.reservations.edit', ['reservation' => $reservation->id]) }}"
                                                class="btn btn-small btn-primary"
                                                style="background: #47be7d; padding:5px 8px; color:#fff">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form
                                                action="{{ route('admin.reservations.destroy', ['reservation' => $reservation->id]) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-small btn-primary"
                                                    onclick="return confirm('Are you sure?')"
                                                    style="background: #f44f6c; padding:5px 8px; color:#fff">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $reservation->clientInfo->email ?? 'N/A' }}</td>
                                        <td>{{ $reservation->clientInfo->phone ?? 'N/A' }}</td>
                                        <td>
                                            @if ($reservation->paymentInfo && $reservation->paymentInfo->amount !== null)
                                            AED {{ $reservation->paymentInfo->amount / 100 }}
                                            @else
                                            N/A
                                            @endif
                                        </td>
                                        <td>{{ $createdAt }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    @foreach ($groupedReservations as $date => $reservationsByRoom)
                                    <tr>
                                        <td>{{ $date }}</td>
                                        @foreach ($roomTitles as $title)
                                        @php
                                        $roomId = $rooms->firstWhere('title', $title)->id ?? null;
                                        @endphp
                                        <td class="cursor-pointer">
                                            @if ($roomId && isset($reservationsByRoom[$roomId]))
                                            <a>{{ $reservationsByRoom[$roomId] }}</a>
                                            @else
                                            &nbsp;
                                            @endif
                                        </td>
                                        @endforeach
                                        @php
                                        $formattedDate = str_replace('/', '-', $date);
                                        $currentPath = request()->path();
                                        $isDubaiOrAbuDhabi =
                                        Str::contains($currentPath, 'dubai') ||
                                        Str::contains($currentPath, 'abudhabi');
                                        $basePath = Str::contains($currentPath, 'dubai')
                                        ? 'dubai'
                                        : 'abudhabi';
                                        @endphp
                                        <td>
                                            <button class="process-btn"
                                                data-basepath="{{ $isDubaiOrAbuDhabi ? $basePath : '' }}"
                                                data-date="{{ $formattedDate }}"
                                                onclick="redirectToMonthlyList(this)" style="color:#fff">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                </div>
            </div>
            <!--end::Tab pane-->

            <div class="tab-pane fade" id="deleted_contents" role="tabpanel">
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="card card-flush card-dashed">
                        <div class="card-body py-4">
                            @include('pages.reservation._archive_table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Tab content-->
    </div>

    </div>
    <!--end::Main column-->
    @include('pages.reservation._modals')

    @section('scripts')


    <script>
        $("#reservation_yearly").DataTable({
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
        });



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
        let roomID = 0;
        let selDate = "";

        $(document).ready(function() {
            $('input[name="room_id"]').on('change', function() {
                roomID = $(this).val();
                sessionStorage.setItem('room_id', $(this).val());

            });
        });

        $(document).ready(function() {
            $('input[name="reservation_date"]').on('change', function() {
                sessionStorage.setItem('reservation_date', $(this).val());
                selDate = $(this).val();
                const selectedRoom = localStorage.getItem('room_id');
                const selectedDate = localStorage.getItem('reservation_date');

                var url = '/admin/hours/getHours';

                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            _token: '{{ csrf_token() }}',
                            room: roomID,
                            date: selDate
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {

                        console.log("dataFornexts", data);


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


        function redirectToMonthlyList(button) {
            var basePath = button.getAttribute('data-basepath');
            var date = button.getAttribute('data-date');

            if (!basePath || !date) {
                console.log("Button is disabled or data is missing.");
                // Optionally disable the button or give user feedback
                button.disabled = true;
                return;
            }

            var url = `/admin/reservations/${basePath}/${date}/list`;
            window.location.href = url;
        }
    </script>


    <script>
        // archives-tab'a tıklandığında AJAX ile verileri çek
        document.getElementById('archives-tab').addEventListener('click', function() {
            let archiveTableContainer = document.getElementById('archive-table-container');
            let loadingMessage = document.getElementById('loading-message');
            let errorMessage = document.getElementById('error-message');

            // Eğer veriler daha önce yüklenmemişse AJAX ile verileri çek
            if (!archiveTableContainer.hasChildNodes() || archiveTableContainer.innerHTML.trim() === '') {
                loadingMessage.style.display = 'block';
                errorMessage.style.display = 'none';


                fetch('/get-archives') // fetchArchives fonksiyonuna hitap eden endpoint
                    .then(response => response.json())
                    .then(data => {
                        loadingMessage.style.display = 'none';
                        let content = `<table class="table align-middle table-row-dashed fs-6 gy-1" id="kt_table">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-75px">Fullname</th>
                        <th class="min-w-75px">Email</th>
                        <th class="min-w-75px">Phone</th>
                        <th class="min-w-75px">Place</th>
                        <th class="min-w-75px">Room</th>
                        <th class="min-w-75px">Date</th>
                        <th class="min-w-75px">Hour</th>
                        <th class="min-w-75px">Players</th>
                        <th class="min-w-75px">Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>`;

                        data.forEach(item => {
                            content += `<tr>
                    <td>${item.clientInfo ? item.clientInfo.fullname : ''}</td>
                    <td>${item.clientInfo ? item.clientInfo.email : ''}</td>
                    <td>${item.clientInfo ? item.clientInfo.phone : ''}</td>
                    <td>${item.place ? item.place.title : ''}</td>
                    <td>${item.room ? item.room.title : ''}</td>
                    <td>${new Date(item.reservation_date).toLocaleDateString()}</td>
                    <td>${item.hour ? item.hour.start + " - " + item.hour.end : 'N/A'}</td>
                    <td>${item.players}</td>
                    <td>
                        <div class="badge ${item.status ? 'badge-light-success' : 'badge-light-danger'}">
                            ${item.status ? 'Active' : 'Passive'}
                        </div>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm">Actions</a>
                    </td>
                </tr>`;
                        });

                        content += '</tbody></table>';
                        archiveTableContainer.innerHTML = content;
                    })
                    .catch(error => {
                        loadingMessage.style.display = 'none';
                        errorMessage.style.display = 'block';
                    });
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                var tabLink = document.querySelector('#' + activeTab);
                var tab = new bootstrap.Tab(tabLink);
                tab.show();
            }

            var tabLinks = document.querySelectorAll('.nav-link');
            tabLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    localStorage.setItem('activeTab', link.id);
                });
            });
        });
    </script>
    @endsection
</x-default-layout>