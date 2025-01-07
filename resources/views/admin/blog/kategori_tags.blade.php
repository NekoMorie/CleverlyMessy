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
                            <button type="button" class="btn btn-primary px-3 " data-bs-toggle="modal"
                                data-bs-target="#tambahModalKategori"><ion-icon name="duplicate-sharp"></ion-icon>Tambah
                                Kategori</button>
                            <button type="button" class="btn btn-primary px-3 ms-4" data-bs-toggle="modal"
                                data-bs-target="#tambahModalTag"><ion-icon name="duplicate-sharp"></ion-icon>Tambah
                                Tag</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered ">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategori as $no => $data)
                                            <tr>
                                                <td class="text-center">{{ $no + 1 }}</td>
                                                <td>
                                                    {{ $data->nama }}
                                                </td>
                                                <td class="text-center">{{ $data->created_at }}</td>
                                                <td class="text-center">{{ $data->updated_at }}</td>
                                                <td>
                                                    <div
                                                        class="table-actions d-flex justify-content-center align-items-center gap-3 fs-6">
                                                        <a href="javascript:;" class="text-warning text-center"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#EditModalKategori{{ $data->id }}"
                                                            data-bs-placement="bottom">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="javascript:;" class="text-danger delete-btn"
                                                            data-url="{{ route('kategori.delete', $data->id) }}"
                                                            data-id="{{ $data->id }}">
                                                            <ion-icon name="trash-sharp"></ion-icon>
                                                        </a>

                                                        <form id="delete-form-{{ $data->id }}" method="POST"
                                                            style="display:none;">
                                                            @csrf
                                                            @method('POST')
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="table table-striped table-bordered ">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tags</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tag as $no => $data)
                                            <tr>
                                                <td class="text-center">{{ $no + 1 }}</td>
                                                <td>
                                                    {{ $data->nama }}
                                                </td>
                                                <td class="text-center">{{ $data->created_at }}</td>
                                                <td class="text-center">{{ $data->updated_at }}</td>
                                                <td>
                                                    <div
                                                        class="table-actions d-flex justify-content-center align-items-center gap-3 fs-6">
                                                        <a href="javascript:;" class="text-warning text-center"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#EditModalTag{{ $data->id }}"
                                                            data-bs-placement="bottom">
                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="javascript:;" class="text-danger delete-btn"
                                                            data-url="{{ route('tag.delete', $data->id) }}"
                                                            data-id="{{ $data->id }}">
                                                            <ion-icon name="trash-sharp"></ion-icon>
                                                        </a>

                                                        <form id="delete-form-{{ $data->id }}" method="POST"
                                                            style="display:none;">
                                                            @csrf
                                                            @method('POST')
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
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
            </div>
        </div>
        <!-- end page content-->
    </div>

    <div class="modal fade" id="tambahModalKategori" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kategori.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama" required>
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
    <div class="modal fade" id="tambahModalTag" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data Tag</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tag.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama" required>
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
    @foreach ($kategori as $data)
        <div class="modal fade" id="EditModalKategori{{ $data->id }}" tabindex="-1"
            aria-labelledby="EditModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Edit Data Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/admin/kategori/update/' . $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}" hidden>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="nama"
                                    value="{{ $data->nama }}" required>
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
    @foreach ($tag as $data)
        <div class="modal fade" id="EditModalTag{{ $data->id }}" tabindex="-1" aria-labelledby="EditModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Edit Data Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/admin/tag/update/' . $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}" hidden>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="nama"
                                    value="{{ $data->nama }}" required>
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
