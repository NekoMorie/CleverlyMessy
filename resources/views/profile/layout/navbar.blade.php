<header>
    <!-- Start Navigation -->
    @if (Route::currentRouteName() === 'home')
        <nav
            class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed dark no-background">
        @else
            <nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs dark">
    @endif


    <div class="container d-flex justify-content-between align-items-center">

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Logo">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-times"></i>
            </button>

            <ul class="nav navbar-nav navbar-right text-white" data-in="fadeInDown" data-out="fadeOutUp">
                <li>
                    <a href="/" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                </li>
                <li>
                    <a href="/about" class="dropdown-toggle active" data-toggle="dropdown">Tentang Kami</a>
                </li>
                {{-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fitur</a>
                    <ul class="dropdown-menu">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="404.html">Error Page</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{ route('harga') }}" class="dropdown-toggle" data-toggle="dropdown">Harga</a>
                </li>
                <li>
                    <a href="/blog" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                </li>
                <li>
                    <a href="/contact" class="dropdown-toggle" data-toggle="dropdown">Kontak</a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FAQ</a>
                </li>
                @if (!$user)
                    <li>
                        <div class="nav navbar-nav navbar-right attr-login ms-3">
                            <ul>
                                @guest
                                    <a class="text-white" href="/login">
                                        <li class="btn circle btn-primary login-button">Login</li>
                                    </a>
                                @endguest
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="auth"><a class="dropdown-toggle"
                            href="{{ $user->role == 'admin' ? '/dashboard' : '/dashboard' }}">Dashboard</a></li>
                    <li class="auth"><a class="dropdown-toggle" href="/logout">Logout</a></li>

                    {{-- <li><a class="dropdown-toggle auth" href="#">Profile</a></li>
                    <li><a class="dropdown-toggle auth" href="/logout">Logout</a></li> --}}
                    {{-- <li class="dropdown">
                        <div class="nav navbar-nav navbar-right attr-login ms-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                    alt="Profile picture" class="border rounded-circle" width="60px">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end nav navbar-nav navbar-right text-white"
                                aria-labelledby="navbarDropdown">
                                
                            </ul>
                        </div>
                    </li> --}}
                @endif
            </ul>
        </div>

        <div class="attr-right">
            <div class="attr-nav">
                @if (!$user)
                    <ul>
                        <li class="button"><a href="/login">Login</a></li>
                    </ul>
                @else
                    <div class="dropdown d-none d-lg-block">
                        <button class="btn btn-user-dropdown" type="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                alt="Profile picture" class="border rounded-circle" width="60px">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end" style="padding:10px;"
                            aria-labelledby="navbarDropdown">
                            <li>
                                <a href="/dashboard" class="dropdown-item d-flex align-items-center">
                                    <div><ion-icon name="person-circle-outline"></ion-icon></div>
                                    <div class="ms-3"><span>Dashboard</span></div>
                                </a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center"
                                        style="background: none; border: none; color: inherit; cursor: pointer;">
                                        <div><ion-icon name="log-out-outline"></ion-icon></div>
                                        <div class="ms-3"><span>Logout</span></div>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Overlay screen for menu -->
    <div class="overlay-screen"></div>
    <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->
