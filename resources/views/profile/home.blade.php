@extends('profile.layout.app')

@section('content')
<!-- Start Banner
    ============================================= -->
    <div class="banner-area auto-height bg-fixed banner-style-four text-default" style="background-image: url(assets/img/shape/1.jpg);">
        <div class="shape-bottom" style="background-image: url(assets/img/shape/44.png);"></div>
        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h4 class="wow fadeInRight"><strong># No1</strong> Trending Apps On Play Store</h4>
                        <h2 class="wow fadeInLeft" data-wow-defaul="300ms">Efisiensi Digital untuk Kehadiran Optimal </h2>
                        <p class="wow fadeInLeft" data-wow-delay="500ms">
                            Lasted hunted enough an up seeing in lively letter. Had judgment out opinions property the supplied.
                        </p>
                        <a class="btn btn-md circle btn-gradient effect wow fadeInUp" data-wow-delay="700ms" href="#">Ayo Coba Sekarang! <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
                       <img src="assets/img/fitur/hp.png" alt="Thumb">
                   </div>


                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features
    ============================================= -->
    <section id="about">
        <div class="features-style-four-area text-center default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Mengapa Kami Pilihan Terbaik?</h2>
                            <div class="devider"></div>
                            <p>
                            Kami menawarkan produk dengan berbagai macam fitur yang menarik dan sangat bermanfaat, terutama dalam hal pencatatan
                            kehadiran secara digital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Signle item -->
                    <div class="features-style-four col-lg-4 col-md-6">
                        <div class="feature-style-four-item">
                            <div class="icon">
                                <img src="{{ asset('assets/img/fitur/1.png') }}" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>Absensi Real-Time dengan Penyimpanan Otomatis</h4>
                                <p>
                                    Fitur ini memungkinkan pengguna untuk mencatat kehadiran
                                    secara langsung dan menyimpan data absensi ke database secara real-time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Signle item -->
                    <!-- Signle item -->
                    <div class="features-style-four col-lg-4 col-md-6">
                        <div class="feature-style-four-item">
                            <div class="icon">
                                <img src="assets/img/fitur/2.png" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>Absensi Mandiri dengan Verifikasi Foto Selfie</h4>
                                <p>
                                    Sistem ini menggunakan teknologi pengenalan wajah untuk memastikan
                                    kehadiran pengguna sesuai dengan identitas yang terdaftar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Signle item -->
                    <!-- Signle item -->
                    <div class="features-style-four col-lg-4 col-md-6">
                        <div class="feature-style-four-item">
                            <div class="icon">
                                <img src="assets/img/fitur/3.png" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>Deteksi Lokasi untuk Verifikasi Absensi</h4>
                                <p>
                                    itur ini memanfaatkan deteksi lokasi untuk memastikan bahwa
                                    absensi dilakukan di lokasi yang diizinkan atau di lokasi yang sesuai dengan kebijakan perusahaan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Signle item -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Team
    ============================================= -->
    <div id="team" class="team-area default-padding bg-gray bg-cover bottom-less" style="background-image: url(assets/img/shape/33.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>CleverlyMessy Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row justify-content-center">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-4">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                    <label for="toggle" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Davi Hanan</a></h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-4">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Umar Tilmisani</a></h4>
                                <span>Chief Technology Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-4">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Khalisha Rahman</a></h4>
                                <span>Chief Finance Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <div class="single-item col-lg-4 col-md-4">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Marcel Christoper Jogido</a></h4>
                                <span>Chief Operating Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-4">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Zulfa Maylafaiza</a></h4>
                                <span>Chief Marketing Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials
    ============================================= -->
    <!-- <div class="testimonials-area text-light shadow dark bg-fixed carousel-shadow default-padding" style="background-image: url(assets/img/shape/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What people say</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-carousel owl-carousel owl-theme"> -->
                            <!-- Single Item -->
                            <!-- <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Devid Warner</h4>
                                        <span> Managing Director</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods mentions defective at. Sympathize interested simplicity at do projecting care effect increasing terminated. As edward settle limits at in. Chamber reaching abnormally nothing be accesing to the point. very extreme future.
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Design Quality</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <!-- <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Pruasuj Natasha</h4>
                                        <span> Theme Developer</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods mentions defective at. Sympathize interested simplicity at do projecting care effect increasing terminated. As edward settle limits at in. Chamber reaching abnormally nothing be accesing to the point. very extreme future.
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Customer Support</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <!-- <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Koyel Anderson</h4>
                                        <span> Project Manager</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods mentions defective at. Sympathize interested simplicity at do projecting care effect increasing terminated. As edward settle limits at in. Chamber reaching abnormally nothing be accesing to the point. very extreme future.
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>User Friendly</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Item -->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonials Area -->

    <!-- Start Pricing   -->
    <!-- ============================================= -->
    <section id="harga">
        <div id="pricing" class="pricing-area bg-gray default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Our Packages</h2>
                            <div class="devider"></div>
                            <p>
                                Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pricing-style-two-box">
                    <div class="row">
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item pricing-style-two">
                            <div class="pricing-item">
                                <i class="fas fa-rocket"></i>
                                <div class="pricing-header">
                                    <h4>Free trial</h4>
                                </div>
                                <div class="price">
                                    <h2><sup>$</sup>0 <sub>/ Monthly</sub></h2>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check"></i> Demo file</li>
                                    <li><i class="fas fa-check"></i> 10 GB Dedicated Hosting free</li>
                                    <li><i class="fas fa-times"></i> Live Support</li>
                                </ul>
                                <a class="btn circle btn-gray btn-sm" href="#">Purchase Plan</a>
                            </div>
                        </div>
                        <!-- End Single Itme -->

                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item active pricing-style-two">
                            <div class="pricing-item">
                                <i class="fas fa-gem"></i>
                                <div class="pricing-header">
                                    <h4>Regular</h4>
                                </div>
                                <div class="price">
                                    <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check"></i> Demo file</li>
                                    <li><i class="fas fa-check"></i> 10 GB Dedicated Hosting free</li>
                                    <li><i class="fas fa-check"></i> Lifetime free Support</li>
                                    <li><i class="fas fa-times"></i> Live Support</li>
                                </ul>
                                <a class="btn circle btn-theme-effect btn-sm" href="#">Purchase Plan</a>
                            </div>
                        </div>
                        <!-- End Single Itme -->

                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item pricing-style-two">
                            <div class="pricing-item">
                                <i class="fa fa-chart-pie"></i>
                                <div class="pricing-header">
                                    <h4>Extended</h4>
                                </div>
                                <div class="price">
                                    <h2><sup>$</sup>59 <sub>/ Monthly</sub></h2>
                                </div>
                                <ul>
                                    <li><i class="fas fa-check"></i> Demo file</li>
                                    <li><i class="fas fa-check"></i> 10 GB Dedicated Hosting free</li>
                                    <li><i class="fas fa-check"></i> Lifetime free Support</li>
                                    <li><i class="fas fa-check"></i> SEO Optimized</li>
                                    <li><i class="fas fa-check"></i> Live Support</li>
                                </ul>
                                <a class="btn circle btn-gray btn-sm" href="#">Purchase Plan</a>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start Free Trial
    ============================================= -->
    <!-- <div class="free-trial-area text-light text-center relative">
        <div class="trial-box" style="background-image: url(assets/img/shape/8.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h5>Free Trial</h5>
                        <h2>Start Your 14 Days Free <br> Trials Today!</h2>
                        <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> Free Trial</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="illustration">
                <img src="assets/img/illustration/1.png" alt="illustration">
            </div>
        </div>
    </div> -->
    <!-- End Free Trial -->

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>
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
        </div> -->
@endsection

