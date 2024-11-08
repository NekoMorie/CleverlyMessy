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
          <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="location-outline"></ion-icon></a>
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
              <h5 class="mb-0">Daftar Lokasi</h5>
               <form class="ms-auto position-relative">
                 <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon name="search-sharp"></ion-icon></div>
                 <input class="form-control ps-5" type="text" placeholder="search" value="{{ request('search') }}" name="search">
               </form>
           </div>
           <div class="table-responsive mt-3">
             <table class="table align-middle">
               <thead class="table-secondary">
                 <tr>
                  <th>No.</th>
                  <th>Nama Lokasi</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Created By</th>
                  <th>Actions</th>
                 </tr>
               </thead>
               <tbody>
                @foreach ($lokasi as $data )
                 <tr>
                  <td>{{ $no++ }}</td>
                   <td>{{ $data->nama_lokasi }}</td>
                   <td>{{ $data->lat_lokasi }}</td>
                   <td>{{ $data->long_lokasi }}</td>
                   <td>{{ $data->created_by }}</td>
                   <td>
                     <div class="table-actions d-flex align-items-center gap-3 fs-6">
                       <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                       <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModalLokasi" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" idLokasi="{{ $data->id }}"><ion-icon name="trash-sharp"></ion-icon></a>
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
    <div class="modal fade" id="deleteModalLokasi" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Are you sure about that?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus lokasi ini?
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
           <h5 class="modal-title" id="tambahModalLabel">Tambah Data Lokasi</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <form id="userForm" action="{{ url('admin/lokasi') }}" method="POST">
            @csrf
             <div class="mb-3">
               <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
               <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required>
             </div>
             <div class="mb-3">
                <label for="lat_lokasi" class="form-label">Latitude Lokasi</label>
                <input type="text" class="form-control" id="lat_lokasi" name="lat_lokasi" required>
              </div>
              <div class="mb-3">
                <label for="long_lokasi" class="form-label">Longtitude Lokasi</label>
                <input type="text" class="form-control" id="long_lokasi" name="long_lokasi" required>
              </div>
              <div class="mb-3">
                <label for="radius" class="form-label">Radius (Meter)</label>
                <input type="text" class="form-control" id="radius" name="radius" required>
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
