@extends('admin.layout.template')
@section('content')
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Pages</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!--end breadcrumb-->

          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card radius-10">
                <div class="card-body">
                  <form>
                  <h5 class="mb-3">Edit Profile</h5>
                  <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                    <div class="user-change-photo shadow">
                      <img src="{{ url('/assets/admin/images/avatars/06.png') }}" alt="...">
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4"><ion-icon name="image-sharp"></ion-icon>Change Photo</button>
                  </div>
                  <h5 class="mb-0 mt-4">User Information</h5>
                  <hr>
                  <div class="row g-3">
                    <div class="col-6">
                       <label class="form-label">Username</label>
                       <input type="text" class="form-control" value="@jhon">
                    </div>
                    <div class="col-6">
                     <label class="form-label">Email address</label>
                     <input type="text" class="form-control" value="xyz@example.com">
                   </div>
                     <div class="col-6">
                       <label class="form-label">First Name</label>
                       <input type="text" class="form-control" value="jhon">
                   </div>
                   <div class="col-6">
                       <label class="form-label">Last Name</label>
                       <input type="text" class="form-control" value="">
                   </div>
                 </div>

                 <h5 class="mb-0 mt-4">Contact Information</h5>
                 <hr>
                 <div class="row g-3">
                  <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" value="47-A, city name, United States">
                   </div>
                   <div class="col-6">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" value="@jhon">
                   </div>
                   <div class="col-6">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" value="xyz@example.com">
                  </div>
                    <div class="col-6">
                      <label class="form-label">Pin Code</label>
                      <input type="text" class="form-control" value="jhon">
                  </div>
                  <div class="col-6">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" value="Deo">
                  </div>
                  <div class="col-12">
                    <label class="form-label">About Me</label>
                    <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself..."></textarea>
                   </div>
                  </div>
                  <div class="text-start mt-3">
                    <button type="button" class="btn btn-primary px-4">Save Changes</button>
                  </div>
                </div>
               </form>
              </div>
            </div>
          </div><!--end row-->

          </div>
          <!-- end page content-->
         </div>
@endsection
