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
         <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if($user->image == null)
                                <img class="profile-user-img img-fluid img-circle" src="{{ url('storage/pp/foto_default.jpg') }}" alt="User profile picture">
                            @else
                                <img class="profile-user-img img-fluid img-circle" src="{{ url('storage/'.$user->image) }}" alt="User profile picture">
                            @endif
                        </div>

                        <h3 class="profile-username text-center mt-4">{{ $user->name }}</h3>

                        <p class="text-muted text-center">{{ $user->level }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                    <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Edit User</h6>
                    <hr>
                    <form class="row g-3" action="{{ url('admin/updateUser',$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Level</label>
                            <select class="form-select" name="level">
                                <option disabled>Pilih Level</option>
                                <option value="Super Admin" {{ $user->level == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                                <option value="Admin" {{ $user->level == 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="Anggota" {{ $user->level == 'Anggota' ? 'selected' : '' }}>Anggota</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Nomor Telpon</label>
                            <input type="text" class="form-control" value="{{ $user->telp }}" name="telp">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Gender</label>
                            <input type="text" class="form-control" name="gender" value="{{ $user->gender }}" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <textarea type="text" class="form-control" value="{{ $user->alamat }}" name="alamat">{{ $user->alamat }}</textarea>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="image" class="form-label">Ubah Foto</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                        </div>
                    </form>
                    </div>
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
