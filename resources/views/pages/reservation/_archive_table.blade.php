

    <table  class="table align-middle table-row-dashed fs-6 gy-1" id="archiveTable">
        <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-75px">Ad Soyad</th>
            <th class="min-w-75px">E-Posta</th>
            <th class="min-w-75px">telefon</th>
            <th class="min-w-75px">Yer(Ülke)</th>
            <th class="min-w-75px">Ürün</th>
            <th class="min-w-75px">Tarih</th>
            <th class="min-w-75px">Saat</th>
            <th class="min-w-75px">Players</th>
            <th class="min-w-75px">Durum</th>
            <th class="text-end">işlemler</th>
        </tr>
        </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="text-gray-600 fw-semibold" id="archive-table-body">
    <!--begin::Table row-->
    @foreach($archives as $item)
        <tr>
            <td>{{ $item->clientInfo?->fullname }}</td>
            <td>{{ $item->clientInfo?->email }}</td>
            <td>{{ $item->clientInfo?->phone }}</td>
            <td>{{ $item->place?->title }}</td>
            <td>{{ $item->room?->title }}</td>
            <td>{{ $item->reservation_date->format("d-m-Y") }}</td>
            <td>{{ $item->hour?->start->format("H:i") . " - ".$item->hour?->end->format("H:i")  }}</td>
            <td>{{ $item?->players }}</td>

            <td>
                <div @class(['badge', 'badge-light-danger' => !$item->status, 'badge-light-success' => $item->status, 'fw-bolder'])>
                    {{ (!$item->status) ? 'Passive' : 'Active' }}
                </div>
            </td>

            <td class="text-end">
                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                    <span class="svg-icon svg-icon-5 m-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="javascript:void(0)" class="menu-link px-3" onclick="event.preventDefault(); document.getElementById('restore-form').submit();">Restore</a>
                        <form id="restore-form" action="{{ route('admin.reservations.restore', ['item' => $item->id]) }}" method="POST" class="d-none">
                            @csrf @method('patch')
                        </form>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="javascript:void(0)" class="menu-link px-3" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                        <form id="delete-form" action="{{ route('admin.reservations.forceDelete', ['item' => $item->id]) }}" method="POST" class="d-none">
                            @csrf @method('delete')
                        </form>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
        </tr>
    @endforeach
    <!--end::Table row-->
    </tbody>
        <
    <!--end::Table body-->
</table>

        {{ $archives->links() }}


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
        $("#archiveTable").DataTable(turkishLang);



        $(document).ready(function() {
            $('#archiveTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/get-archives', // Fetch işlemi için doğru endpoint
                    type: 'GET'
                },
                columns: [
                    { data: 'clientInfo.fullname', name: 'clientInfo.fullname' },
                    { data: 'clientInfo.email', name: 'clientInfo.email' },
                    { data: 'clientInfo.phone', name: 'clientInfo.phone' },
                    { data: 'place.title', name: 'place.title' },
                    { data: 'room.title', name: 'room.title' },
                    { data: 'reservation_date', name: 'reservation_date', render: function(data, type, row) {
                            return new Date(data).toLocaleDateString(); // Tarihi istediğiniz formatta göstermek için
                        }
                    },
                    { data: 'hour.start', name: 'hour.start', render: function(data, type, row) {
                            return data ? data + " - " + row.hour.end : 'N/A'; // Saat bilgisi
                        }
                    },
                    { data: 'players', name: 'players' },
                    { data: 'status', name: 'status', render: function(data, type, row) {
                            return data ? '<span class="badge badge-light-success">Active</span>' : '<span class="badge badge-light-danger">Passive</span>';
                        }
                    },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ],
                pageLength: 10, // Her sayfada gösterilecek satır sayısı
                lengthChange: false, // Sayfa başı kayıt sayısı seçimi
                order: [[0, 'desc']] // Varsayılan sıralama (id'ye göre ters)
            });
        });
    </script>



