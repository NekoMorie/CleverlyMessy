<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
	<link href="{{ url('assets/admin/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ url('assets/admin/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{ url('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ url('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/icons.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/fontawesome-free-6.6.0-web/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap')}}" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ url('assets/admin/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/header-colors.css')}}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/x-icon">
    <title>CleverlyMessy - {{ $title }} Page</title>
  </head>
  <body>


 <!--start wrapper-->
    <div class="wrapper">
        @include('admin.layout.sidebar')
          <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
              <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
              <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div>
             </form>
             <div class="top-navbar-right ms-auto">

              <ul class="navbar-nav align-items-center">
                <li class="nav-item mobile-search-button">
                  <a class="nav-link" href="javascript:;">
                    <div class="">
                      <ion-icon name="search-sharp"></ion-icon>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                      <ion-icon name="moon-sharp"></ion-icon>
                    </div>
                  </a>
                </li>
                <li class="nav-item dropdown dropdown-large dropdown-apps">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                    <div class="">
                      <ion-icon name="apps-sharp"></ion-icon>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                    <div class="row row-cols-3 g-3 p-3">
                      <div class="col text-center">
                        <div class="app-box mx-auto bg-gradient-purple text-white"><ion-icon name="cart-sharp"></ion-icon>
                        </div>
                        <div class="app-title">Orders</div>
                      </div>
                      <div class="col text-center">
                        <div class="app-box mx-auto bg-gradient-info text-white"><ion-icon name="people-sharp"></ion-icon>
                        </div>
                        <div class="app-title">Teams</div>
                      </div>
                      <div class="col text-center">
                        <div class="app-box mx-auto bg-gradient-success text-white"><ion-icon name="shield-checkmark-sharp"></ion-icon>
                        </div>
                        <div class="app-title">Tasks</div>
                      </div>
                      <div class="col text-center">
                        <div class="app-box mx-auto bg-gradient-danger text-white"><ion-icon name="videocam-sharp"></ion-icon>
                        </div>
                        <div class="app-title">Media</div>
                      </div>
                      <div class="col text-center">
                        <div class="app-box mx-auto bg-gradient-warning text-white"><ion-icon name="file-tray-sharp"></ion-icon>
                        </div>
                        <div class="app-title">Files</div>
                      </div>
                      <div class="col text-center">
                        <div class="app-box mx-auto bg-gradient-branding text-white"><ion-icon name="notifications-sharp"></ion-icon>
                        </div>
                        <div class="app-title">Alerts</div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                    <div class="position-relative">
                      <span class="notify-badge">8</span>
                      <ion-icon name="notifications-sharp"></ion-icon>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;">
                      <div class="msg-header">
                        <p class="msg-header-title">Notifications</p>
                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                      </div>
                    </a>
                    <div class="header-notifications-list">
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-primary"><ion-icon name="cart-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                          ago</span></h6>
                            <p class="msg-info">You have recived new orders</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-danger"><ion-icon name="person-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                           ago</span></h6>
                            <p class="msg-info">5 new user registered</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-success"><ion-icon name="document-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                          ago</span></h6>
                            <p class="msg-info">The pdf files generated</p>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-info"><ion-icon name="checkmark-done-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">New Product Approved <span
                          class="msg-time float-end">2 hrs ago</span></h6>
                            <p class="msg-info">Your new product has approved</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-warning"><ion-icon name="send-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                          ago</span></h6>
                            <p class="msg-info">5.1 min avarage time response</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-danger"><ion-icon name="chatbox-ellipses-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                          ago</span></h6>
                            <p class="msg-info">New customer comments recived</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-primary"><ion-icon name="albums-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                          ago</span></h6>
                            <p class="msg-info">24 new authors joined last week</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-success"><ion-icon name="shield-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                          ago</span></h6>
                            <p class="msg-info">Successfully shipped your item</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="javascript:;">
                        <div class="d-flex align-items-center">
                          <div class="notify text-warning"><ion-icon name="cafe-outline"></ion-icon>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                          ago</span></h6>
                            <p class="msg-info">45% less alerts last 4 weeks</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <a href="javascript:;">
                      <div class="text-center msg-footer">View All Notifications</div>
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                    <div class="user-setting">
                      <img src="{{ url('assets/admin/images/avatars/06.png')}}" class="user-img" alt="">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                       <a class="dropdown-item" href="javascript:;">
                         <div class="d-flex flex-row align-items-center gap-2">
                            <img src="{{ url('assets/admin/images/avatars/06.png')}}" alt="" class="rounded-circle" width="54" height="54">
                            <div class="">
                              <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                              <small class="mb-0 dropdown-user-designation text-secondary">UI Developer</small>
                            </div>
                         </div>
                       </a>
                     </li>
                     <li><hr class="dropdown-divider"></li>
                     <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="person-outline"></ion-icon></div>
                             <div class="ms-3"><span>Profile</span></div>
                           </div>
                         </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="settings-outline"></ion-icon></div>
                             <div class="ms-3"><span>Setting</span></div>
                           </div>
                         </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="speedometer-outline"></ion-icon></div>
                             <div class="ms-3"><span>Dashboard</span></div>
                           </div>
                         </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="wallet-outline"></ion-icon></div>
                             <div class="ms-3"><span>Earnings</span></div>
                           </div>
                         </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="cloud-download-outline"></ion-icon></div>
                             <div class="ms-3"><span>Downloads</span></div>
                           </div>
                         </a>
                      </li>
                      @auth
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="javascript:;">
                            <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <div class="d-flex align-items-center">
                                <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                                <div class="ms-3"><span>Logout</span></div>
                              </div>
                            </form>
                          </a>
                        </li>
                      @endauth
                  </ul>
                </li>

               </ul>

              </div>
            </nav>
          </header>
        <!--end top header-->
        @yield('content')

        <!--start footer-->
        <footer class="footer">
         <div class="footer-text">
            Copyright © 2024. All right reserved.
         </div>
         </footer>
       <!--end footer-->


     <!--Start Back To Top Button-->
          <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
      <!--End Back To Top Button-->

      <!--start switcher-->
      <div class="switcher-body">
       <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon name="color-palette-sharp" class="me-0"></ion-icon></button>
       <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
         <div class="offcanvas-header border-bottom">
           <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
           <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body">
           <h6 class="mb-0">Theme Variation</h6>
           <hr>
           <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
             <label class="form-check-label" for="LightTheme">Light</label>
           </div>
           <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
             <label class="form-check-label" for="DarkTheme">Dark</label>
           </div>
           <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
             <label class="form-check-label" for="SemiDark">Semi Dark</label>
           </div>
           <hr/>
           <h6 class="mb-0">Header Colors</h6>
           <hr/>
           <div class="header-colors-indigators">
             <div class="row row-cols-auto g-3">
               <div class="col">
                 <div class="indigator headercolor1" id="headercolor1"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor2" id="headercolor2"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor3" id="headercolor3"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor4" id="headercolor4"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor5" id="headercolor5"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor6" id="headercolor6"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor7" id="headercolor7"></div>
               </div>
               <div class="col">
                 <div class="indigator headercolor8" id="headercolor8"></div>
               </div>
             </div>
           </div>

         </div>
       </div>
      </div>
      <!--end switcher-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

  </div>
<!--end wrapper-->


 <!-- JS Files-->
 <script src="{{ url('assets/admin/js/jquery.min.js')}}"></script>
 <script src="{{ url('assets/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
 <script src="{{ url('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
 <script src="{{ url('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
 <script type="module" src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>
 <!--plugins-->
 <script src="{{ url('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
 <script src="{{ url('assets/admin/plugins/chartjs/chart.min.js')}}"></script>
 <script src="{{ url('assets/admin/js/index.js')}}"></script>
 <!-- Main JS-->
 <script src="{{ url('assets/admin/js/main.js')}}"></script>


</body>
</html>
