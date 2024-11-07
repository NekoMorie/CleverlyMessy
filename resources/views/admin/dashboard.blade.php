       <!--start sidebar -->
       @extends('admin.layout.template')
       @section('content')
     <!--end sidebar -->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
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
                <div class="col-12 col-lg-6 col-xl-4 d-flex">
                  <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0">Total Traffic</h6>
                        <div class="dropdown options ms-auto">
                          <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                          </div>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                       <div class="chart-container3">
                        <div class="piechart-legend">
                          <h2 class="mb-1">85%</h2>
                          <h6 class="mb-0">Total Visitors</h6>
                         </div>
                         <canvas id="chart1"></canvas>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 d-flex">
                  <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0">User Activity</h6>
                        <div class="dropdown options ms-auto">
                          <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                          </div>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="chart-container3">
                         <canvas id="chart2"></canvas>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                  <div class="card radius-10 bg-transparent shadow-none w-100">
                    <div class="card-body p-0">
                      <div class="card radius-10">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="widget-icon radius-10 bg-light-success text-success">
                              <ion-icon name="wallet-sharp"></ion-icon>
                            </div>
                            <div class="fs-5 ms-auto">
                              <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                aria-label="ellipsis horizontal sharp"></ion-icon>
                            </div>
                          </div>
                          <h4 class="my-3">$4,580</h4>
                          <div class="progress mt-1" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                          </div>
                          <p class="mb-0 mt-2">Earned This Month <span class="float-end">+2.4%</span></p>
                        </div>
                      </div>
                      <div class="card radius-10 mb-0">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="widget-icon-2 bg-light-danger text-danger">
                              <ion-icon name="people-sharp"></ion-icon>
                            </div>
                            <div class="fs-5 ms-auto">
                              <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                aria-label="ellipsis horizontal sharp"></ion-icon>
                            </div>
                          </div>
                          <h4 class="my-3">8,126</h4>
                          <div class="progress mt-1" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                          </div>
                          <p class="mb-0 mt-2">New Clients <span class="float-end">+5.3%</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             </div><!--end row-->


             <div class="row">
               <div class="col-12 col-lg-12 col-xl-8 d-flex">
                 <div class="card radius-10 w-100">
                   <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <h6 class="mb-0">Statistics</h6>
                      <div class="ms-auto">
                        <div class="d-flex align-items-center font-13 gap-2">
                          <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1 text-primary"></i>Downloads</span>
                          <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1 text-success"></i>Earnings</span>
                        </div>
                      </div>
                    </div>
                    <div class="chart-container4">
                      <canvas id="chart3"></canvas>
                    </div>
                   </div>
                 </div>
               </div>
               <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card radius-10 overflow-hidden w-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                      <h6 class="mb-0">Top Categories</h6>
                      <div class="dropdown options ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                          <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                        </div>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                          <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                          <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="chart-container5">
                      <canvas id="chart4"></canvas>
                    </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                      Clothing
                      <span class="badge bg-tiffany rounded-pill">55</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Electronics
                      <span class="badge bg-success rounded-pill">20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Furniture
                      <span class="badge bg-warning rounded-pill">10</span>
                    </li>
                  </ul>
                </div>
              </div>
             </div><!--end row-->


             <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0">Recent Orders</h6>
                  <div class="fs-5 ms-auto dropdown">
                     <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                       <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="#">Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li><hr class="dropdown-divider"></li>
                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                       </ul>
                   </div>
                 </div>
                 <div class="table-responsive mt-2">
                  <table class="table align-middle mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>#ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#89742</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/admin/images/products/11.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$214</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 8, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#68570</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/admin/images/products/07.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Sports Time Watch</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$185</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 9, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#38567</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/admin/images/products/17.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Women Red Heals</h6>
                            </div>
                          </div>
                        </td>
                        <td>3</td>
                        <td>$356</td>
                        <td><span class="badge alert-danger">Cancelled</span></td>
                        <td>Apr 10, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#48572</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/admin/images/products/04.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$149</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 11, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#96857</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/admin/images/products/10.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$199</td>
                        <td><span class="badge alert-danger">Cancelled</span></td>
                        <td>Apr 15, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#96857</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/admin/images/products/12.png" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$699</td>
                        <td><span class="badge alert-warning">Pending</span></td>
                        <td>Apr 18, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
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
         <!--end page content wrapper-->
@endsection
