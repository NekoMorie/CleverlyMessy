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
                            <a href="{{ route('blog.create') }}" class="btn btn-primary px-3"><ion-icon
                                    name="duplicate-sharp"></ion-icon>Tambah</a>
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
                                    <th>Judul</th>
                                    <th>image</th>
                                    <th>Slug</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Publish At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $no => $data)
                                    <tr>
                                        <td class="text-center">{{ $no + 1 }}</td>
                                        <td>
                                            {{ $data->title }}
                                        </td>
                                        <td class="text-center"><img src="{{ Storage::url($data->image) }}" alt=""
                                                class="img-fluid" width="80px">
                                        </td>
                                        <td class="text-center">{{ $data->slug }}</td>
                                        <td class="text-center">{{ $data->kategori }}</td>
                                        <td class="text-center">{{ $data->status }}</td>
                                        <td class="text-center">{{ $data->publish_at }}</td>
                                        <td>
                                            <div
                                                class="table-actions d-flex justify-content-center align-items-center gap-3 fs-6">
                                                <a href="{{ route('blog.edit', $data->id) }}"> <i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="javascript:;" class="text-danger delete-btn"
                                                    data-url="{{ route('blog.delete', $data->id) }}"
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
@endsection
