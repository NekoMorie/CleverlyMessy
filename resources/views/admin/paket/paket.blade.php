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
                                    <th>Harga</th>
                                    <th>Durasi</th>
                                    <th>Status</th>
                                    <th>Banyak Siswa</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paket as $no => $data)
                                    <tr>
                                        <td class="text-center">{{ $no + 1 }}</td>
                                        <td>
                                            {{ $data->nama_paket }}
                                        </td>
                                        <td class="text-center">{{ 'Rp ' . number_format($data->harga, 0, ',', '.') }}</td>
                                        <td class="text-center">{{ $data->durasi }} Bulan</td>
                                        <td class="text-center">{{ $data->status }}</td>
                                        <td class="text-center">{{ $data->banyak_siswa }}</td>
                                        <td class="text-center">{{ $data->updated_at }}</td>
                                        <td>
                                            <div
                                                class="table-actions d-flex justify-content-center align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-warning text-center"
                                                    data-bs-toggle="modal" data-bs-target="#EditModal{{ $data->id }}"
                                                    data-bs-placement="bottom"> <i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="javascript:;" class="text-danger delete-btn"
                                                    data-url="{{ route('admin.delete', $data->id) }}"
                                                    data-id="{{ $data->id }}">
                                                    <ion-icon name="trash-sharp"></ion-icon>
                                                </a>

                                                <form id="delete-form-{{ $data->id }}" method="POST"
                                                    style="display:none;">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
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
                    <form action="{{ route('paket.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
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
@endsection
