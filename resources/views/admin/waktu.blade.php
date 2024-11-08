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
          <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="time-outline"></ion-icon></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->


  <div class="card">
   <div class="card-body">
     <div class="d-flex align-item-center">
         <div class="col-md-6 p-0">
             <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#tambahModal"><ion-icon name="duplicate-sharp"></ion-icon>Tambah</button>
         </div>
     </div>
   </div>
  </div>
       <div class="card">
         <div class="card-body">
           <div class="d-flex align-items-center">
              <h5 class="mb-0">Customer Details</h5>
               <form class="ms-auto position-relative">
                 <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon name="search-sharp"></ion-icon></div>
                 <input class="form-control ps-5" type="text" placeholder="search">
               </form>
           </div>
           <div class="table-responsive mt-3">
             <table class="table align-middle">
               <thead class="table-secondary">
                 <tr>
                  <th>No</th>
                  <th>Nama Waktu</th>
                  <th>Waktu Masuk</th>
                  <th>Waktu Keluar</th>
                  <th>Updated At</th>
                  <th>Actions</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($waktu as $data)
                 <tr>
                  <td>{{ $no++ }}</td>
                   <td>{{ $data->nama_waktu }}</td>
                   <td>{{ $data->waktu_masuk }} WIB</td>
                   <td>{{ $data->waktu_keluar }} WIB</td>
                   <td>{{ $data->updated_at }}</td>
                   <td>
                     <div class="table-actions d-flex align-items-center gap-3 fs-6">
                       <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                       <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                       <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModalWaktu" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" idWaktu="{{ $data->id }}"><ion-icon name="trash-sharp"></ion-icon></a>
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
    <div class="modal fade" id="deleteModalWaktu" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Are you sure about that?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data waktu ini?
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

 <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="tambahModalLabel">Tambah Data Waktu</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <form id="userForm" action="{{ route('addWaktu') }}" method="POST">
            @csrf
             <div class="mb-3">
               <label for="nama_waktu" class="form-label">Nama</label>
               <input type="text" class="form-control" id="nama_waktu" name="nama_waktu" required>
             </div>
             <div class="mb-3">
                <label for="masuk" class="form-label">Waktu Masuk</label>
                <input type="time" class="form-control" id="masuk" name="masuk" required>
             </div>
             <div class="mb-3">
                <label for="keluar" class="form-label">Waktu Keluar</label>
                <input type="time" class="form-control" id="keluar" name="keluar" required>
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

   {{-- <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Update Data Waktu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="userForm" action="{{ route('updateWaktu') }}" method="POST">
           @csrf
           @method('PUT')
            <div class="mb-3">
              <label for="nama_waktu" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama_waktu" name="nama_waktu" value required>
            </div>
            <div class="mb-3">
               <label for="masuk" class="form-label">Waktu Masuk</label>
               <input type="time" class="form-control" id="masuk" name="masuk" required>
            </div>
            <div class="mb-3">
               <label for="keluar" class="form-label">Waktu Keluar</label>
               <input type="time" class="form-control" id="keluar" name="keluar" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" form="userForm">Simpan</button>
        </div>
      </div>
    </div>
   </div> --}}


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
