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
                  <th>#</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Pin Code</th>
                  <th>Country</th>
                  <th>Actions</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                  <td>1</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ url('assets/admin/images/avatars/01.png')}}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">Thomas Hardy</p>
                        </div>
                     </div>
                   </td>
                   <td>89 Chicago UK</td>
                   <td>Chicago</td>
                   <td>8574201</td>
                   <td>United Kingdom</td>
                   <td>
                     <div class="table-actions d-flex align-items-center gap-3 fs-6">
                       <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                       <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                       <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                     </div>
                   </td>
                 </tr>
                 <tr>
                  <td>2</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ url('assets/admin/images/avatars/02.png')}}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">Victoria Hardy</p>
                        </div>
                     </div>
                   </td>
                   <td>77 New York UK</td>
                   <td>New York</td>
                   <td>8956370</td>
                   <td>United Kingdom</td>
                   <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                    </div>
                  </td>
                 </tr>
                 <tr>
                  <td>3</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ url('assets/admin/images/avatars/03.png')}}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">Maria Anders</p>
                        </div>
                     </div>
                   </td>
                   <td>56 Poland UK</td>
                   <td>Poland</td>
                   <td>3265840</td>
                   <td>United Kingdom</td>
                   <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                    </div>
                  </td>
                 </tr>
                 <tr>
                  <td>4</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ url('assets/admin/images/avatars/04.png')}}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">Maria Anders</p>
                        </div>
                     </div>
                   </td>
                   <td>47-A Delhi India</td>
                   <td>Delhi</td>
                   <td>6535420</td>
                   <td>India</td>
                   <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                    </div>
                  </td>
                 </tr>
                 <tr>
                  <td>5</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ url('assets/admin/images/avatars/05.png')}}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">Martin Loother</p>
                        </div>
                     </div>
                   </td>
                   <td>37 B Columbo Shri Lanka</td>
                   <td>Columbo</td>
                   <td>9645230</td>
                   <td>Shri Lanka</td>
                   <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                    </div>
                  </td>
                 </tr>
                 <tr>
                  <td>6</td>
                   <td>
                     <div class="d-flex align-items-center gap-3 cursor-pointer">
                        <img src="{{ url('assets/admin/images/avatars/06.png')}}" class="rounded-circle" width="44" height="44" alt="">
                        <div class="">
                          <p class="mb-0">Martin Loother</p>
                        </div>
                     </div>
                   </td>
                   <td>68 New York UK</td>
                   <td>New York</td>
                   <td>7854230</td>
                   <td>United Kingdom</td>
                   <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                    </div>
                  </td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>

     </div>
     <!-- end page content-->
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="deleteModalLabel">Are you sure about that?</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="button" class="btn btn-danger">Delete</button>
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
           <form id="userForm">
             <div class="mb-3">
               <label for="userName" class="form-label">Nama Lokasi</label>
               <input type="text" class="form-control" id="userName" name="userName" required>
             </div>
             <div class="mb-3">
                <label for="latitude" class="form-label">Latitude Lokasi</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
              </div>
              <div class="mb-3">
                <label for="longtitude" class="form-label">Longtitude Lokasi</label>
                <input type="text" class="form-control" id="longtitude" name="longtitude" required>
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

@endsection
