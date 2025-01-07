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
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <div class="col-md-12 p-0">
                            <form id="save-form" action="{{ url('admin/useradmin') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row mt-3">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label for="img" class="mb-2">Gambar</label>
                                                    <input type="file"
                                                        class="form-control @error('gambar') is-invalid @enderror"
                                                        id="img" onchange="previewFile()" name="image">
                                                    @error('image')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-2 mb-4">
                                                <img src="{{ asset('assets/image/defaultUser.jpg') }}" class="img-thumbnail"
                                                    alt="" width="150px" id="previewImage"
                                                    style="max-width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="telp" class="form-label">Nomor Telpon</label>
                                            <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                                id="telp" name="phone_number" value="{{ old('telp') }}" required>
                                            @error('phone_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary px-3 justify-align-end w-100 save-button">
                                    <ion-icon name="duplicate-sharp"></ion-icon>Tambah
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end page content-->
@endsection
