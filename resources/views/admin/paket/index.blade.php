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
                <div class="breadcrumb-title pe-3">Admin</div>
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
            <h6 class="mb-0 text-uppercase">{{ $title }}</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-item-center">
                        <div class="col-md-6 p-0">
                            <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal"
                                data-bs-target="#tambahModal"><ion-icon name="duplicate-sharp"></ion-icon>Tambah
                                paket</button>
                            <button type="button" class="btn btn-primary px-3 ms-4" data-bs-toggle="modal"
                                data-bs-target="#tambahModalInfo"><ion-icon name="duplicate-sharp"></ion-icon>Tambah
                                Info Paket</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="seksi-paket">
                        <div class="kartu-harga">
                            @foreach ($paket as $data)
                                <div class="kartu-harga__item">
                                    <h3 class="kartu-harga__judul">
                                        {{-- <ion-icon name="gift"
                                            class="kartu-harga_ikon kartu-harga_ikon--gratis"></ion-icon> --}}
                                        {!! $data->icon !!}
                                        {{ $data->nama_paket }}
                                        <div class="dropdown options ms-auto">
                                            <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                                <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                            </div>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:;"
                                                        class="text-warning text-center" data-bs-toggle="modal"
                                                        data-bs-target="#editModalInfo{{ $data->id }}"
                                                        data-bs-placement="bottom">Edit Info Paket</a></li>
                                                <li><a class="dropdown-item" href="javascript:;"
                                                        class="text-warning text-center" data-bs-toggle="modal"
                                                        data-bs-target="#EditModal{{ $data->id }}"
                                                        data-bs-placement="bottom">Edit Paket</a></li>
                                            </ul>
                                        </div>
                                    </h3>
                                    <div class="kartu-harga__nominal">
                                        {{ 'Rp ' . number_format($data->harga, 0, ',', '.') }}
                                        <span class="kartu-harga__periode">per {{ $data->durasi }} bulan</span>
                                    </div>
                                    <ul class="kartu-harga__fitur-list">
                                        @foreach ($data->paketInfo as $info)
                                            <li class="kartu-harga__fitur-item">
                                                <ion-icon name="checkmark-circle"
                                                    class="kartu-harga__fitur-ikon"></ion-icon>
                                                {{ $info->list_paket }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content-->
    </div>
    <div class="modal fade" id="tambahModalInfo" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('paket-info.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <select class="form-select" id="paketSelect" name="paket" aria-label="Default select example">
                                <option value="" selected disabled>Open this select menu</option>
                                @foreach ($paket as $data)
                                    <option value="{{ $data->id }}" data-banyak-siswa="{{ $data->banyak_siswa }}">
                                        {{ $data->nama_paket }} | {{ 'Rp ' . number_format($data->harga, 0, ',', '.') }} |
                                        {{ $data->durasi }} Bulan | {{ $data->banyak_siswa }} Siswa |
                                        {{ $data->banyak_walikelas }} Guru
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi Paket</label>
                            <input type="text" class="form-control" id="Deskripsi" name="deskripsi"
                                placeholder="Isi Deksripsi, untuk jumlah siswa, jumlah siswa yang anda pilih" required>
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">Status</label>
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="status" checked>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach ($paket as $data)
        <div class="modal fade" id="editModalInfo{{ $data->id }}" tabindex="-1" aria-labelledby="tambahModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Data User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            @foreach ($data->paketInfo as $index => $info)
                                <form action="{{ route('paket-info.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="accordion-item">
                                        <input type="hidden" name="id" value="{{ $info->id }}">
                                        <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                                                aria-controls="collapse{{ $index }}">
                                                Paket Info {{ $index + 1 }}:
                                                {{ $info->list_paket ?? 'Deskripsi Tidak Tersedia' }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading{{ $index }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <!-- Input Deskripsi Paket -->
                                                <div class="mb-3">
                                                    <label for="Deskripsi{{ $index }}"
                                                        class="form-label">Deskripsi
                                                        Paket</label>
                                                    <input type="text" class="form-control"
                                                        id="Deskripsi{{ $index }}" name="deskripsi"
                                                        value="{{ $info->list_paket ?? '' }}"
                                                        placeholder="Isi Deskripsi, jumlah siswa, dll." required>
                                                </div>

                                                <!-- Input Status -->
                                                <div class="mb-3">
                                                    <label for="Status{{ $index }}"
                                                        class="form-label">Status</label>
                                                    <input class="form-check-input" type="checkbox"
                                                        id="Status{{ $index }}" name="status"
                                                        {{ $info->paket_aktif == 'Aktif' ? 'checked' : '' }}>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                                                <a href="javascript:;" class="btn btn-danger w-100 delete-btn "
                                                    data-url="{{ route('paket-info.delete', $info->id) }}"
                                                    data-id="{{ $info->id }}">
                                                    Delete
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="delete-form-{{ $info->id }}" method="POST" style="display:none;">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="id" value="{{ $info->id }}">
                                </form>
                            @endforeach
                        </div>

                    </div>


                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('paket.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Paket</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control input-harga" id="harga" value="0"
                                name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="durasi" class="form-label">Durasi</label>
                            <input type="number" class="form-control" id="durasi" name="durasi"
                                placeholder="Isi Perbulan (1 bulan)" required>
                        </div>
                        <div class="mb-3">
                            <label for="siswa" class="form-label">Banyak Siswa</label>
                            <input type="number" class="form-control" id="siswa" name="siswa"
                                placeholder="Isi Banyaknya Siswa yang dapat di masukan" required>
                        </div>
                        <div class="mb-3">
                            <label for="guru" class="form-label">Banyak Guru</label>
                            <input type="number" class="form-control" id="guru" name="guru"
                                placeholder="Isi Banyaknya guru yang dapat di masukan" required>
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label"><a
                                    href="https://fontawesome.com/v6/search?o=r&m=free" target="_black">Icon Fontawesome
                                    6.7</a></label>
                            <input type="text" class="form-control" id="icon" name="icon"
                                placeholder="Isi Banyaknya icon yang dapat di masukan" required>
                        </div>
                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna Paket</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="color" class="form-control form-control-color w-100" id="warna1"
                                        title="Pilih warna untuk paket" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="warna-hex1" class="form-control mt-2"
                                        placeholder="Hasil kode warna hexa akan muncul di sini" name="warna" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="telp" class="form-label">Status</label>
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="status"
                                checked>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach ($paket as $data)
        <div class="modal fade" id="EditModal{{ $data->id }}" tabindex="-1" aria-labelledby="EditModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Edit Data User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('paket.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}" hidden>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $data->nama_paket }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control input-harga" id="harga{{ $data->id }}"
                                    name="harga" value="{{ 'Rp ' . number_format($data->harga, 0, ',', '.') }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="durasi" class="form-label">Durasi</label>
                                <input type="number" class="form-control" id="durasi" name="durasi"
                                    placeholder="Isi Perbulan (1 bulan)" value="{{ $data->durasi }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="siswa" class="form-label">Banyak Siswa</label>
                                <input type="number" class="form-control" id="siswa" name="siswa"
                                    placeholder="Isi Banyaknya Siswa yang dapat di masukan"
                                    value="{{ $data->banyak_siswa }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="guru" class="form-label">Banyak Guru</label>
                                <input type="number" class="form-control" id="guru" name="guru"
                                    placeholder="Isi Banyaknya guru yang dapat di masukan"
                                    value="{{ $data->banyak_walikelas }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label"><a
                                        href="https://fontawesome.com/v6/search?o=r&m=free" target="_black">Icon
                                        Fontawesome
                                        6.7</a></label>
                                <input type="text" class="form-control" id="icon" name="icon"
                                    placeholder="Isi Banyaknya icon yang dapat di masukan" value="{{ $data->icon }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="warna" class="form-label">Warna Paket</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="color" class="form-control form-control-color w-100"
                                            id="warna" value="{{ $data->code_warna }}"
                                            title="Pilih warna untuk paket" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="warna-hex" class="form-control mt-2"
                                            placeholder="Hasil kode warna hexa akan muncul di sini"
                                            value="{{ $data->code_warna }}" name="warna" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">Status</label>
                                @if ($data->status == 'Aktif')
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="status"
                                        checked>
                                @else
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault"
                                        name="status">
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const colorInput = document.getElementById("warna");
            const hexDisplay = document.getElementById("warna-hex");

            // Set initial value to hex input
            hexDisplay.value = colorInput.value;

            // Update hex input whenever color picker changes
            colorInput.addEventListener("input", (event) => {
                hexDisplay.value = event.target.value; // Update to hexa code
            });

        });
        document.addEventListener("DOMContentLoaded", () => {
            const colorInput1 = document.getElementById("warna1");
            const hexDisplay1 = document.getElementById("warna-hex1");

            // Set initial value to hex input
            hexDisplay1.value = colorInput1.value;

            // Update hex input whenever color picker changes
            colorInput1.addEventListener("input", (event) => {
                hexDisplay1.value = event.target.value; // Update to hexa code
            });

        });
    </script>
@endsection
