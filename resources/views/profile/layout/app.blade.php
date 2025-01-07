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
    {{-- <link href="{{ asset('vendor/template/css/font-awesome.min.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css"
        integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <style>
        .owl-carousel .item {
            margin: 15px;
            transition: 0.5s ease-in-out;
        }

        .app-feature-style-one h4 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .app-feature-thumb img {
            max-width: 100%;
            height: auto;
        }

        @media (min-width: 768px) {
            li.auth {
                display: block;
            }
        }

        @media (min-width: 992px) {
            li.auth {
                display: block;
            }
        }

        @media (min-width: 1200px) {
            li.auth {
                display: block;
            }
        }

        li.auth {
            display: none;
        }

        .fixed-dimension {
            width: 800px;
            height: 350px;
            object-fit: cover;
            /* Crop bagian gambar yang tidak sesuai */
            overflow: hidden;
            /* Hilangkan bagian di luar dimensi */
        }
    </style>
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

    @if (Route::currentRouteName() == 'home' || Route::currentRouteName() == 'blog.detail')
    @else
        <!-- Start Breadcrumb -->
        <div class="breadcrumb-area shadow dark bg-cover text-center text-light"
            style="background-image: url(assets/img/shape/2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>{{ $title }}</h1>
                        <ul class="breadcrumb">
                            <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
    @endif

    @yield('content')

    <!-- Start Footer-->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/image/logotext.png" width="250px" alt="Logo" />
                            <p>
                                Excellence decisively nay man yet impression for contrasted
                                remarkably. There spoke happy for you are out. Fertile how old
                                address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" />
                                <button type="submit"><i class="arrow_right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="blog-with-sidebar.html"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>
                            &copy; Copyright 2024. All Rights Reserved by CleverlyMessy
                        </p>
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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $(".owl-carousel.app-features-carousel").owlCarousel({
                loop: true,
                margin: 10,
                // nav: true,
                // dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                items: 1 // Hanya satu slide per tampilan
            });
        });
    </script>

</body>

</html>
