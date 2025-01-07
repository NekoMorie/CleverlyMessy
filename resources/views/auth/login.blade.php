<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ url('assets/admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/admin/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ url('assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ url('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/fontawesome-free-6.6.0-web/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap') }}"
        rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ url('assets/admin/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/header-colors.css') }}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/x-icon">
    <title>CleverlyMessy - {{ $title }} Page</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-3">
                <div class="container-fluid">
                    <a href="javascript:;"><img src="assets/images/logo-icon-3.png" width="140" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <a href="javascript:;" class="btn btn-sm btn-primary px-4 radius-30">Buy Now</a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4>Sign In</h4>
                                <p>Sign In to your account</p>
                            </div>
                            <form class="form-body row g-3" action="{{ route('login') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-dismissible fade show py-2 bg-danger">
                                        <div class="d-flex align-items-center">
                                            <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                                            </div>
                                            <div class="ms-3">
                                                @foreach ($errors->all() as $error)
                                                    <div class="text-white">
                                                        {{ $error }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckRemember">
                                        <label class="form-check-label" for="flexSwitchCheckRemember">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 text-end">
                                    <a href="authentication-reset-password-simple.html">Forgot Password?</a>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 text-center">
                                    <p class="mb-0">Don't have an account? <a
                                            href="authentication-sign-up-simple.html">Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="my-5">
            <div class="container">
                <div class="text-center">
                    <p class="my-4">Copyright © 2021 UI Admin by Codervent.</p>
                </div>
            </div>
        </footer>
    </div>
    <!--end wrapper-->


</body>

</html>
