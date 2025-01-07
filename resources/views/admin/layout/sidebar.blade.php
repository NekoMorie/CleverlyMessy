<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/admin/images/logo.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">CleverlyMessy</h4>
        </div>
        <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>
    <!--navigation-->
    @if ($user->role == 'admin')
        <ul class="metismenu" id="menu">
            <li class="menu-label">Super Admin Menu</li>
            <li>
                <a href="{{ url('/dashboard') }}">
                    <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/profile') }}">
                    <div class="parent-icon"><ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">My Profile</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><ion-icon name="people-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Users</div>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admin/useradmin') }}"><ion-icon name="ellipse-outline"></ion-icon>Admin</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/customer') }}"><ion-icon name="ellipse-outline"></ion-icon>User Beli</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="{{ url('/admin/paket') }}">
                    <div class="parent-icon"><ion-icon name="ribbon-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Paket</div>
                </a>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-envelopes-bulk"></i>
                    </div>
                    <div class="menu-title">Blog</div>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admin/blog') }}"><ion-icon name="ellipse-outline"></ion-icon>Kontent</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/kategori-tag-blog') }}"><ion-icon
                                name="ellipse-outline"></ion-icon>Kategori & Tag</a>
                    </li>
                </ul>
            </li>
            <li>
                <a onclick="confirmLogout(event)">
                    <div class="parent-icon"><ion-icon name="log-out-sharp"></ion-icon></div>
                    <div class="menu-title">Logout</div>
                </a>
            </li>
        </ul>
    @else
        <ul class="metismenu" id="menu">
            <li class="menu-label">Super Admin Menu</li>
            <li>
                <a href="{{ url('/dashboard') }}">
                    <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/profile') }}">
                    <div class="parent-icon"><ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">My Profile</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}">
                    <div class="parent-icon"><ion-icon name="people-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Users</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><ion-icon name="people-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Settings Platform</div>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admin/lokasi') }}"><ion-icon name="ellipse-outline"></ion-icon>Lokasi</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/waktu') }}"><ion-icon name="ellipse-outline"></ion-icon>Waktu</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/intitusi') }}"><ion-icon
                                name="ellipse-outline"></ion-icon>Institusi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/admin/lokasi') }}">
                    <div class="parent-icon"><ion-icon name="location-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Lokasi</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/waktu') }}">
                    <div class="parent-icon"><ion-icon name="time-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Waktu</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/absen') }}">
                    <div class="parent-icon"><ion-icon name="camera-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Absen</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/monitoring') }}">
                    <div class="parent-icon"><ion-icon name="browsers-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Monitoring</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/kategori') }}">
                    <div class="parent-icon"><ion-icon name="ribbon-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Kategori</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/setting') }}">
                    <div class="parent-icon"><ion-icon name="settings-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Setttings</div>
                </a>
            </li>
            <li>
                <a onclick="confirmLogout(event)">
                    <div class="parent-icon"><ion-icon name="log-out-sharp"></ion-icon></div>
                    <div class="menu-title">Logout</div>
                </a>
            </li>

        </ul>
    @endif
    <!--end navigation-->
</aside>
