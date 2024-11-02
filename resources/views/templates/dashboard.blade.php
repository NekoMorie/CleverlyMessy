<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
	<link href="{{ asset('assets/admin/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('assets/admin/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/icons.css')}}" rel="stylesheet">
    <link href="{{'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap'}}" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('assets/admin/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/header-colors.css')}}" rel="stylesheet" />

    <title>CleverlyMessy - Admin Page</title>
  </head>
  <body>


 <!--start wrapper-->
    <div class="wrapper">
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
              <div>
                <img src="{{ asset('assets/admin/images/logo.png') }}" class="logo-icon" alt="logo icon">
              </div>
              <div>
                <h4 class="logo-text">CleverlyMess</h4>
              </div>
              <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
              </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
              <li>
                <a href="/admin" >
                  <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Dashboard</div>
                </a>
              </li>
              <li>
                <a href="/admin/profile">
                  <div class="parent-icon"><ion-icon name="person-circle-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">My Profile</div>
                </a>
              </li>
              <li>
                <a href="/admin/users">
                  <div class="parent-icon"><ion-icon name="people-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Users</div>
                </a>
              </li>
              <li>
                <a href="pages-user-profile.html">
                  <div class="parent-icon"><ion-icon name="location-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Lokasi</div>
                </a>
              </li>

              <li class="menu-label">Forms & Tables</li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="newspaper-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Forms</div>
                </a>
                <ul>
                  <li> <a href="form-elements.html"><ion-icon name="ellipse-outline"></ion-icon>Form Elements</a>
                  </li>
                  <li> <a href="form-input-group.html"><ion-icon name="ellipse-outline"></ion-icon>Input Groups</a>
                  </li>
                  <li> <a href="form-layouts.html"><ion-icon name="ellipse-outline"></ion-icon>Forms Layouts</a>
                  </li>
                  <li> <a href="form-validations.html"><ion-icon name="ellipse-outline"></ion-icon>Form Validation</a>
                  </li>
                  <li> <a href="form-date-time-pickes.html"><ion-icon name="ellipse-outline"></ion-icon>Date Pickers</a>
                  </li>
                  <li> <a href="form-select2.html"><ion-icon name="ellipse-outline"></ion-icon>Select2</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="server-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Tables</div>
                </a>
                <ul>
                  <li> <a href="table-basic-table.html"><ion-icon name="ellipse-outline"></ion-icon>Basic Table</a>
                  </li>
                  <li> <a href="table-advance-tables.html"><ion-icon name="ellipse-outline"></ion-icon>Advance Tables</a>
                  </li>
                  <li> <a href="table-datatable.html"><ion-icon name="ellipse-outline"></ion-icon>Data Table</a>
                  </li>
                </ul>
              </li>
              <li class="menu-label">Pages</li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="lock-closed-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Authentication</div>
                </a>
                <ul>
                  <li> <a href="authentication-sign-in-basic.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Sign In Basic</a>
                  </li>
                  <li> <a href="authentication-sign-in-cover.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Sign In Cover</a>
                  </li>
                  <li> <a href="authentication-sign-in-simple.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Sign In Simple</a>
                  </li>
                  <li> <a href="authentication-sign-up-basic.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Sign Up Basic</a>
                  </li>
                  <li> <a href="authentication-sign-up-cover.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Sign Up Cover</a>
                  </li>
                  <li> <a href="authentication-sign-up-simple.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Sign Up Simple</a>
                  </li>
                  <li> <a href="authentication-reset-password-basic.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Reset Password Basic</a>
                  </li>
                  <li> <a href="authentication-reset-password-cover.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Reset Password Cover</a>
                  </li>
                  <li> <a href="authentication-reset-password-simple.html" target="_blank"><ion-icon name="ellipse-outline"></ion-icon>Reset Password Simple</a>
                  </li>
                </ul>
              </li>
                <a href="pages-edit-profile.html">
                  <div class="parent-icon"><ion-icon name="create-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Edit Profile</div>
                </a>
              </li>
              <li>
                <a href="pages-invoices.html">
                  <div class="parent-icon"><ion-icon name="receipt-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Invoice</div>
                </a>
              </li>
              <li>
                <a href="pages-to-do.html">
                  <div class="parent-icon"><ion-icon name="shield-checkmark-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Invoice</div>
                </a>
              </li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="copy-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Extra Pages</div>
                </a>
                <ul>
                  <li><a href="pages-faq.html"><ion-icon name="ellipse-outline"></ion-icon>FAQ</a>
                  </li>
                  <li><a href="pages-pricing-tables.html"><ion-icon name="ellipse-outline"></ion-icon>Pricing</a>
                  </li>
                  <li><a href="pages-errors-404-error.html"><ion-icon name="ellipse-outline"></ion-icon>404 Error</a>
                  </li>
                  <li><a href="pages-errors-500-error.html"><ion-icon name="ellipse-outline"></ion-icon>500 Error</a></li>
                  <li><a href="pages-errors-coming-soon.html"><ion-icon name="ellipse-outline"></ion-icon>Coming Soon</a></li>
                  <li><a href="pages-starter-page.html"><ion-icon name="ellipse-outline"></ion-icon>Blank Page</a></li>
                </ul>
              </li>
              <li class="menu-label">Charts & Maps</li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="bar-chart-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Charts</div>
                </a>
                <ul>
                  <li> <a href="charts-apex-chart.html"><ion-icon name="ellipse-outline"></ion-icon>Apex</a>
                  </li>
                  <li> <a href="charts-chartjs.html"><ion-icon name="ellipse-outline"></ion-icon>Chartjs</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="map-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Maps</div>
                </a>
                <ul>
                  <li> <a href="map-google-maps.html"><ion-icon name="ellipse-outline"></ion-icon>Google Maps</a>
                  </li>
                  <li> <a href="map-vector-maps.html"><ion-icon name="ellipse-outline"></ion-icon>Vector Maps</a>
                  </li>
                </ul>
              </li>
              <li class="menu-label">Others</li>
              <li>
                <a class="has-arrow" href="javascript:;">
                  <div class="parent-icon"><ion-icon name="list-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Menu Levels</div>
                </a>
                <ul>
                  <li> <a class="has-arrow" href="javascript:;"><ion-icon name="ellipse-outline"></ion-icon>Level One</a>
                    <ul>
                      <li> <a class="has-arrow" href="javascript:;"><ion-icon name="ellipse-outline"></ion-icon>Level Two</a>
                        <ul>
                          <li> <a href="javascript:;"><ion-icon name="ellipse-outline"></ion-icon>Level Three</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;" target="_blank">
                  <div class="parent-icon"><ion-icon name="document-text-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Documentation</div>
                </a>
              </li>
              <li>
                <a href="https://themeforest.net/user/codervent" target="_blank">
                  <div class="parent-icon"><ion-icon name="link-sharp"></ion-icon>
                  </div>
                  <div class="menu-title">Support</div>
                </a>
              </li>
            </ul>
            <!--end navigation-->
         </aside>



        <!--start top header-->
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
                      <img src="{{ asset('assets/admin/images/avatars/06.png')}}" class="user-img" alt="">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                       <a class="dropdown-item" href="javascript:;">
                         <div class="d-flex flex-row align-items-center gap-2">
                            <img src="{{ asset('assets/admin/images/avatars/06.png')}}" alt="" class="rounded-circle" width="54" height="54">
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
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                             <div class="ms-3"><span>Logout</span></div>
                           </div>
                         </a>
                      </li>
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
 <script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
 <script src="{{ asset('assets/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
 <script src="{{ asset('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
 <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
 <script type="module" src="{{ 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js' }}"></script>
 <!--plugins-->
 <script src="{{ asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
 <script src="{{ asset('assets/admin/plugins/chartjs/chart.min.js')}}"></script>
 <script src="{{ asset('assets/admin/js/index.js')}}"></script>
 <!-- Main JS-->
 <script src="{{ asset('assets/admin/js/main.js')}}"></script>


</body>
</html>
