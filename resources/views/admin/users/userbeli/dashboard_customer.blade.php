@extends('admin.layout.template')
<!--end sidebar -->
<!--start sidebar -->
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ $title }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="people-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- Kiri: Nama User dan Perusahaan -->
                        <h1 class="mb-0 text-uppercase">{{ $users->nama }} | {{ $users->nama_perusahaan }}</h1>
                        <!-- Kanan: Logo Perusahaan -->
                        <img src="{{ Storage::url($users->logo) }}" width="50" alt="Logo Perusahaan">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 col-xl-4 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-header bg-second" style="background-color: {{ $paket->code_warna }}">
                            <div class="mb-2 mt-2">
                                <h2 class="mb-0 text-white text-center ">PAKET {{ $paket->nama_paket }}</h2>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="chart-container3">
                                <div class="piechart-legend" style="font-size: 180px; color:{{ $paket->code_warna }}">
                                    {!! $paket->icon !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 d-flex">
                    <div class="card radius-10 w-100" style="min-height:450px">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h6 class="mb-0">Info Paket</h6>
                                <div class="dropdown options ms-auto">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chart-container3 text-bold">
                                <h5>Harga Paket</h5>
                                <p>{{ 'Rp ' . number_format($paket->harga, 0, ',', '.') }}</p>
                                <h5>Isi Paket</h5>
                                @foreach ($paketInfo as $item)
                                    <div class="d-flex align-items-center " style="padding-left:10px">

                                        @if ($item->paket_aktif == 'Aktif')
                                            <i class="fa-solid fa-check text-success"></i>
                                        @else
                                            <i class="fa-solid fa-xmark text-danger"></i>
                                        @endif
                                        <div class="ms-3">
                                            <p class="mb-0">{{ $item->list_paket }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                <h5 class="mt-2">Aktif</h5>
                                <div class="d-flex align-items-center " style="padding-left:10px">
                                    {{-- <i class="fa-solid fa-check text-success"></i> --}}
                                    <div class="ms-3">
                                        <p class="mb-0">Tanggal Order </p>
                                        <p>{{ $paket->tanggal_pembelian }}</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center " style="padding-left:10px">
                                    {{-- <i class="fa-solid fa-check text-success"></i> --}}
                                    <div class="ms-3">
                                        <p class="mb-0">Tenggat Order </p>
                                        <p>{{ $paket->tenggat_order }}</p>
                                    </div>
                                </div>
                                <button class="btn btn-warning w-100 text-white">TAMBAH PAKET</button>
                                {{-- <canvas id="chart2"></canvas> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                    <div class="card radius-10 bg-transparent shadow-none w-100">
                        <div class="card-body p-0">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="widget-icon radius-10 bg-light-second text-second">
                                            <i class="fa-solid fa-clock"></i>
                                        </div>
                                        <h5 class="ms-3 my-3">Paket Berakhir</h5>
                                    </div>
                                    <h6 class="ms-3 my-3 text-center" id="countdown">Calculating...</h6>
                                </div>
                            </div>
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="widget-icon radius-10 bg-light-success text-success">
                                            <i class="fa-solid fa-user-graduate"></i>
                                        </div>
                                        <h4 class="ms-3 my-3">{{ $banyak_guru }}</h4>
                                    </div>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: {{ $persentase['siswa'] }}%"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Banyak Siswa<span class="float-end"></span></p>
                                </div>
                            </div>
                            <div class="card radius-10 mb-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="widget-icon-2 bg-light-warning text-warning">
                                            <i class="fa-solid fa-chalkboard-user"></i>
                                        </div>
                                        <h4 class="ms-3 my-3">{{ $banyak_guru }}</h4>
                                    </div>
                                    <div class="progress mt-1" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: {{ $persentase['guru'] }}%"></div>
                                    </div>
                                    <p class="mb-0 mt-2">Banyak Guru<span class="float-end"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

        </div>
        <!-- end page content-->
    </div>
    <script>
        // Data dari backend
        const tanggalPembelian = new Date("{{ $paket->tanggal_pembelian }}"); // Tanggal pembelian
        const tenggatOrder = new Date("{{ $paket->tenggat_order }}"); // Tenggat order

        function updateCountdown() {
            const now = new Date(); // Waktu saat ini
            const timeRemaining = tenggatOrder - now; // Selisih waktu dalam milidetik

            if (timeRemaining <= 0) {
                document.getElementById('countdown').innerHTML = "Paket telah habis";
                return;
            }

            // Konversi ke hari, jam, menit, dan detik
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            // Update tampilan countdown
            document.getElementById('countdown').innerHTML =
                `${days} Hari, ${hours} Jam, ${minutes} Menit, ${seconds} Detik`;
        }

        // Jalankan fungsi setiap detik
        setInterval(updateCountdown, 1000);
        updateCountdown(); // Panggil sekali untuk tampilan awal
    </script>
@endsection
