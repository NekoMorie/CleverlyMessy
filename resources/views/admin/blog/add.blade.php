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

            <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-item-center">
                            <button type="submit" class="btn btn-primary px-3 w-100"><ion-icon
                                    name="duplicate-sharp"></ion-icon>Tambah</button>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">slug</label>
                                    <input type="slug" class="form-control @error('slug') is-invalid @enderror"
                                        id="slug" name="slug" value="{{ old('slug') }}" readonly>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="kontent" class="form-label">Kontent</label>
                                    <div id="editor">
                                        <textarea id="summernote" name="kontent" required>{{ old('kontent') }}</textarea>
                                    </div>
                                    @error('kontent')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="img" class="mb-2">Gambar</label>
                                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                                id="img" onchange="previewFile()" name="image">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-2 mb-4">
                                        <img src="{{ asset('assets/image/defaultUser.jpg') }}" class="img-thumbnail"
                                            alt="" width="150px" id="previewImage" style="max-width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-item-center">
                                    <div class="col-md-12 p-0">
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <select class="form-select @error('kategori') is-invalid @enderror"
                                                id="kategori" name="kategori" required>
                                                <option disabled selected>Pilih Kategori</option>
                                                @foreach ($kategori as $kat)
                                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('kategori')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select @error('status') is-invalid @enderror" id="status"
                                                name="status" required>
                                                <option disabled selected>Pilih Status</option>
                                                <option value="publish">publish</option>
                                                <option value="draft">draft</option>
                                                <option value="draft">unpublish</option>
                                                <option value="draft">trash</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="publish_at" class="form-label">Publish At</label>
                                            <input type="datetime-local"
                                                class="form-control @error('publish_at') is-invalid @enderror"
                                                id="publish_at" name="publish_at" value="{{ old('publish_at') }}"
                                                required>
                                            @error('publish_at')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="tag" class="form-label">Tag</label>
                                            <select class="form-select" id="tag" name="tag[]" multiple>
                                                @foreach ($tag as $t)
                                                    <option value="{{ $t->id }}">{{ $t->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('tag')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </form>
        </div>
        <!-- end page content-->
    </div>
@endsection
