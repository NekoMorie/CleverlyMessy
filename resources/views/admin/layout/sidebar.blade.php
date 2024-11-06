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
    <ul class="metismenu" id="menu">
    <li class="menu-label">Admin Menu</li>
      <li>
        <a href="{{ url('/admin') }}">
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
        <a href="{{ url('/admin/waktu') }}">
          <div class="parent-icon"><ion-icon name="browsers-sharp"></ion-icon>
          </div>
          <div class="menu-title">Monitoring</div>
        </a>
      </li>
      <li>
        <a href="{{ url('/admin/waktu') }}">
          <div class="parent-icon"><ion-icon name="settings-sharp"></ion-icon>
          </div>
          <div class="menu-title">Setttings</div>
        </a>
      </li>

    </ul>
    <!--end navigation-->
 </aside>
