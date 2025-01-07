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
            <h6 class="mb-0 text-uppercase">DataTable Import</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-item-center">
                        <div class="col-md-6 p-0">
                            <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal"
                                data-bs-target="#tambahModal"><ion-icon name="duplicate-sharp"></ion-icon>Tambah</button>
                            {{-- <button type="button" class="btn btn-success px-3" data-bs-toggle="modal"
                                data-bs-target="#importModal"><ion-icon
                                    name="cloud-upload-sharp"></ion-icon></ion-icon>Import</button> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                @if ($data->image == null)
                                                    <img src="{{ url('storage/pp/foto_default.jpg') }}"
                                                        class="rounded-circle" width="44" height="44" alt="">
                                                @else
                                                    <img src="{{ url('storage/' . $data->image) }}" class="rounded-circle"
                                                        width="44" height="44" alt="">
                                                @endif
                                                <div class="">
                                                    <p class="mb-0">{{ $data->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $data->level }}</td>
                                        <td>{{ $data->created_by }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('editUser', $data->id) }}" class="text-warning"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"
                                                    aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModalUser" data-bs-placement="bottom"
                                                    idUser="{{ $data->id }}" title="Delete"
                                                    aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
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

    {{-- Modal --}}
    <div class="modal fade" id="deleteModalUser" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Are you sure about that?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus user ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <!-- Form untuk delete -->
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Users</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <form action="{{ url('/pegawai/import') }}" method="POST" enctype="multipart/form-data"> --}}
                <div class="modal-body">
                    {{-- @csrf --}}
                    <div class="form-group">
                        <label for="file_excel">File Excel</label>
                        <input type="file" name="file_excel" id="file_excel" class="form-control ">
                        {{-- @error('file_excel')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-secondary" type="submit">Save changes</button>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm" action="{{ url('admin/users') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-select" name="level" required>
                                <option selected disabled>Pilih Level</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Admin">Admin</option>
                                <option value="Anggota">Anggota</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">Nomor Telpon</label>
                            <input type="text" class="form-control" id="telp" name="telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" name="gender" required>
                                <option selected disabled>Pilih Gender</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Tumbuhan">Tumbuhan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Unggah Foto</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" form="userForm">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
@endsection
