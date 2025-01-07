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
            {{-- <h6 class="mb-0 text-uppercase">{{ $title }}</h6> --}}
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-item-center">
                        <div class="col-md-6 p-0">
                            <a href="{{ route('addAdmin') }}" class="btn btn-primary px-3"><ion-icon
                                    name="duplicate-sharp"></ion-icon>Tambah</a>
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
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No.Telpon</th>
                                    <th>Login At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $no => $data)
                                    <tr class="text-center ">
                                        <td>{{ $no + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                {{-- @if ($data->foto == null && $data->google_photo == null)
                                                    <img src="{{ asset('assets/image/defaultUser.jpg') }}"
                                                        class="rounded-circle" width="44" height="44" alt="">
                                                @else --}}
                                                <img src="{{ $data->foto ? Storage::url($data->foto) : asset($data->google_photo) }}"
                                                    class="rounded-circle" width="44" height="44" alt="">
                                                {{-- @endif --}}
                                                <div class="">
                                                    <p class="mb-0">{{ $data->nama }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone_number }}</td>
                                        <td>{{ $data->last_login }}</td>
                                        <td>{{ $data->updated_at }}</td>
                                        <td>
                                            <div
                                                class="table-actions d-flex align-items-center justify-content-center gap-3 fs-6">
                                                <a href="{{ route('editAdmin', $data->id_admin) }}" class="text-warning"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"
                                                    aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                                                <a href="javascript:;" class="text-danger delete-btn"
                                                    data-url="{{ route('admin.delete', $data->id_admin) }}"
                                                    data-id="{{ $data->id_admin }}">
                                                    <ion-icon name="trash-sharp"></ion-icon>
                                                </a>

                                                <form id="delete-form-{{ $data->id_admin }}" method="POST"
                                                    style="display:none;">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{ $data->id_admin }}">
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
                    <form id="userForm" action="{{ url('admin/users') }}" method="POST" enctype="multipart/form-data">
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
@endsection
