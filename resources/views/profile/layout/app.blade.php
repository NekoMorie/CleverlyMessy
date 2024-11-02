<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>CleverlyMessy - {{ $title }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('vendor/template/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/validnavs.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/helper.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/template/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/template/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    @include('profile.layout.navbar')

    @yield('content')

 <!-- Start Footer Bottom -->
 <div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>&copy; Copyright 2021. All Rights Reserved by <a href="https://themeforest.net/user/validthemes/portfolio">validthemes</a></p>
            </div>
            <div class="col-lg-6 text-end link">
                <ul>
                    <li>
                        <a href="about-us.html">Terms</a>
                    </li>
                    <li>
                        <a href="about-us.html">Privacy</a>
                    </li>
                    <li>
                        <a href="contact.html">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Bottom -->
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="{{ asset('vendor/template/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/jquery.appear.js') }}"></script>
<script src="{{ asset('vendor/template/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/modernizr.custom.13711.js') }}"></script>
<script src="{{ asset('vendor/template/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/wow.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/progress-bar.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/count-to.js') }}"></script>
<script src="{{ asset('vendor/template/js/YTPlayer.min.js') }}"></script>
<script src="{{ asset('vendor/template/js/validnavs.js') }}"></script>
<script src="{{ asset('vendor/template/js/main.js') }}"></script>

</body>
</html>
