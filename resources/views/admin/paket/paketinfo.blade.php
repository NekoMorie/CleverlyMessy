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
                                data-bs-target="#tambahModal"><ion-icon name="duplicate-sharp"></ion-icon>Tambah</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered ">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Paket Aktif</th>
                                    <th>Deskripsi</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paketInfo as $no => $data)
                                    <tr>
                                        <td class="text-center">{{ $no + 1 }}</td>
                                        <td>
                                            {{ $data->nama_paket }}
                                        </td>
                                        <td class="text-center">{{ $data->paket_aktif }}</td>
                                        <td class="text-center">{{ $data->list_paket }}</td>
                                        <td>
                                            <div
                                                class="table-actions d-flex justify-content-center align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-warning text-center"
                                                    data-bs-toggle="modal" data-bs-target="#EditModal{{ $data->id_paket }}"
                                                    data-bs-placement="bottom"> <i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="javascript:;" class="text-danger delete-btn"
                                                    data-url="{{ route('admin.delete', $data->id_paket) }}"
                                                    data-id="{{ $data->id_paket }}">
                                                    <ion-icon name="trash-sharp"></ion-icon>
                                                </a>

                                                <form id="delete-form-{{ $data->id_paket }}" method="POST"
                                                    style="display:none;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="id" value="{{ $data->id_paket }}">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- end page content-->
    </div>

    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
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
                                        {{ $data->durasi }} Bulan | {{ $data->banyak_siswa }} Siswa
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
    @foreach ($paketInfo as $info)
        <div class="modal fade" id="EditModal{{ $info->id }}" tabindex="-1"
            aria-labelledby="EditModalLabel{{ $info->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel{{ $info->id }}">Edit Data Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('paket-info.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $info->id }}">
                            <div class="mb-3">
                                <label for="paketSelect{{ $info->id }}" class="form-label">Nama</label>
                                <select class="form-select" id="paketSelect{{ $info->id }}" name="paket_id"
                                    required>
                                    <option value="" disabled>Pilih Paket</option>

                                    <!-- Opsi yang berasal dari $paketInfo -->
                                    <option value="{{ $info->id }}" data-banyak-siswa="{{ $info->banyak_siswa }}"
                                        selected>
                                        {{ $info->nama_paket }} | {{ 'Rp ' . number_format($info->harga, 0, ',', '.') }} |
                                        {{ $info->durasi }} Bulan | {{ $info->banyak_siswa }} Siswa
                                    </option>
                                    @foreach ($paket as $data)
                                        <option value="{{ $data->id }}"
                                            data-banyak-siswa="{{ $data->banyak_siswa }}">
                                            {{ $data->nama_paket }} |
                                            {{ 'Rp ' . number_format($data->harga, 0, ',', '.') }} |
                                            {{ $data->durasi }} Bulan | {{ $data->banyak_siswa }} Siswa
                                        </option>
                                    @endforeach
                                    <!-- Opsi lainnya dari $paket yang tidak ada di $paketInfo -->
                                    {{-- @foreach ($paket as $data)
                                        @if (!$paketInfo->contains('id', $data->id))
                                            <option value="{{ $data->id }}"
                                                data-banyak-siswa="{{ $data->banyak_siswa }}">
                                                {{ $data->nama_paket }} |
                                                {{ 'Rp ' . number_format($data->harga, 0, ',', '.') }} |
                                                {{ $data->durasi }} Bulan | {{ $data->banyak_siswa }} Siswa
                                            </option>
                                        @endif
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="Deskripsi{{ $info->id }}" class="form-label">Deskripsi Paket</label>
                                <input type="text" class="form-control" id="Deskripsi{{ $info->id }}"
                                    name="deskripsi" value="{{ $info->list_paket }}"
                                    placeholder="Isi Deskripsi, misalnya jumlah siswa atau catatan tambahan" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label><br>
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault{{ $info->id }}"
                                    name="status" {{ $info->paket_aktif == 'Aktif' ? 'checked' : '' }}>
                                <label for="flexCheckDefault{{ $info->id }}">Paket Aktif</label>
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
        document.addEventListener('DOMContentLoaded', function() {
            const paketSelect = document.getElementById('paketSelect');
            const deskripsiInput = document.getElementById('Deskripsi');

            paketSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const banyakSiswa = selectedOption.getAttribute(
                    'data-banyak-siswa'); // Ambil nilai data-banyak-siswa

                if (banyakSiswa) {
                    deskripsiInput.placeholder =
                        `Isi Deksripsi, untuk jumlah siswa, ${banyakSiswa} siswa yang anda pilih`;
                }
            });
        });
    </script>
@endsection
