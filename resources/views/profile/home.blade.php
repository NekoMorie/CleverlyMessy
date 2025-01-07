@extends('profile.layout.app')

@section('content')
    <!-- Start Banner-->
    <div class="banner-area auto-height bg-fixed banner-style-four text-default"
        style="background-image: url(assets/img/shape/bg2.png);">
        <div class="shape-bottom" style="background-image: url(assets/img/shape/44.png);"></div>
        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h4 class="wow fadeInRight text-black"><strong># No1</strong> Trending Apps On Play Store</h4>
                        <h2 class="wow fadeInLeft text-black" data-wow-defaul="300ms">Efisiensi Digital untuk Kehadiran
                            Optimal </h2>
                        <p class="wow fadeInLeft text-white" data-wow-delay="500ms">
                            Lasted hunted enough an up seeing in lively letter. Had judgment out opinions property the
                            supplied.
                        </p>
                        <a class="btn btn-md circle btn-gradient effect wow fadeInUp" data-wow-delay="700ms"
                            href="#">Ayo Coba Sekarang! <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
                        <img src="assets/image/hp_header.png" alt="Thumb">
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features -->
    <section id="about">
        <div class="features-style-four-area text-center default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Mengapa Kami Pilihan Terbaik?</h2>
                            <div class="devider"></div>
                            <p>
                                Kami menawarkan produk dengan berbagai macam fitur yang menarik dan sangat bermanfaat,
                                terutama dalam hal pencatatan
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
                                    absensi dilakukan di lokasi yang diizinkan atau di lokasi yang sesuai dengan kebijakan
                                    perusahaan.
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

    <!-- Start Video
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ============================================= -->
    <div class="video-style-one-area text-light shadow dark video-bg-live bg-cover"
        style="background-image: url(assets/img/2440x1578.png)">
        <div class="player bg-cover"
            data-property="{videoURL:'cAN0NI5IZ5c',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:0, opacity:1, quality: 'highres'}">
        </div>
        <div class="video-content-info default-padding shadow dark">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6 video-style-one-item">
                        <h2>
                            Creative New Apps for <br />
                            IT, Retail,& Banking
                        </h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Aliquid nostrum, aut, perspiciatis, iusto animi incidunt ab
                            recusandae molestiae repellendus distinctio maxime ex architecto
                            vero fuga iste pariatur alias vitae tempore.
                        </p>
                        <div class="fun-facto-box">
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="18" data-speed="2000">18</div>
                                    <div class="operator">K</div>
                                </div>
                                <span class="medium">App Downloads</span>
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="98" data-speed="2000">98</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 video-style-one-item text-center">
                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube video-btn"><i
                                class="fas fa-play"></i>Watch Promo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video -->

    <!-- Start App features -->
    <div class="app-feature-thumb">
        <div class="owl-carousel app-features-carousel">

            <!-- Slide 1 -->
            <div class="app-features-area default-padding">
                <div class="container">
                    <div class="row align-center">
                        <!-- Left Column -->
                        <div class="col-lg-3 text-end app-feature-style-one">
                            <div class="app-feature-item">
                                <h4>Management</h4>
                                <p>Attention are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Time Tracking</h4>
                                <p>Business are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived
                                    abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Payment</h4>
                                <p>Providing are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                        </div>
                        <!-- Center Column -->
                        <div class="col-lg-6 text-center app-feature-style-one">
                            <img src="assets/img/illustration/desain1.png" style="width: 90%; margin:28.5px"
                                alt="Thumb" />
                            {{-- </div> --}}
                        </div>
                        <!-- Right Column -->
                        <div class="col-lg-3 app-feature-style-one">
                            <div class="app-feature-item">
                                <h4>Productivity</h4>
                                <p>Attention are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Time Tracking</h4>
                                <p>Providing are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Live Support</h4>
                                <p>Business are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived
                                    abilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="app-features-area default-padding">
                <div class="container">
                    <div class="row align-center">
                        <!-- Left Column -->
                        <div class="col-lg-3 text-end app-feature-style-one">
                            <div class="app-feature-item">
                                <h4>Management</h4>
                                <p>Attention are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Time Tracking</h4>
                                <p>Business are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived
                                    abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Payment</h4>
                                <p>Providing are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                        </div>
                        <!-- Center Column -->
                        <div class="col-lg-6 text-center app-feature-style-one">
                            {{-- <div class="app-feature-thumb"> --}}
                            <img src="assets/img/illustration/desain2.png" style="width: 90%; margin:28.5px"
                                alt="Thumb" />
                            {{-- </div> --}}
                        </div>
                        <!-- Right Column -->
                        <div class="col-lg-3 app-feature-style-one">
                            <div class="app-feature-item">
                                <h4>Productivity</h4>
                                <p>Attention are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Time Tracking</h4>
                                <p>Providing are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Live Support</h4>
                                <p>Business are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived
                                    abilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- slide 3 --}}
            <div class="app-features-area default-padding">
                <div class="container">
                    <div class="row align-center">
                        <!-- Left Column -->
                        <div class="col-lg-3 text-end app-feature-style-one">
                            <div class="app-feature-item">
                                <h4>Management</h4>
                                <p>Attention are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Time Tracking</h4>
                                <p>Business are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived
                                    abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Payment</h4>
                                <p>Providing are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                        </div>
                        <!-- Center Column -->
                        <div class="col-lg-6 text-center app-feature-style-one">
                            <img src="assets/img/illustration/absensi.png" style="width: 90%; margin:28.5px"alt="Thumb" />
                        </div>
                        <!-- Right Column -->
                        <div class="col-lg-3 app-feature-style-one">
                            <div class="app-feature-item">
                                <h4>Productivity</h4>
                                <p>Attention are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Time Tracking</h4>
                                <p>Providing are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived abilities.</p>
                            </div>
                            <div class="app-feature-item">
                                <h4>Live Support</h4>
                                <p>Business are had allowance own perceived abilities. Unfeeling are had allowance own
                                    perceived
                                    abilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add More Slides as Needed -->
        </div>
    </div>

    <!-- End App Features -->


    <!-- Start Pricing -->
    <section id="harga">
        <div id="pricing" class="pricing-area bg-gray default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Our Packages</h2>
                            <div class="devider"></div>
                            <p>
                                Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be
                                as it curiosity departure ourselves very extreme future.
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
                                {{-- {!! $paketGratis->icon !!} --}}
                                <i class="fa-solid fa-award "></i>

                                <div class="pricing-header">
                                    <h4>{{ $paketGratis->nama_paket }}</h4>
                                </div>
                                <div class="price">
                                    <h2><sup>Rp</sup>{{ number_format($paketGratis->harga, 0, ',', '.') }} <sub>/
                                            Monthly</sub>
                                    </h2>
                                </div>
                                <ul>
                                    @foreach ($paketGratis->paketInfo as $data)
                                        <li><i class="fas fa-check"></i> {{ $data->list_paket }}</li>
                                    @endforeach
                                </ul>
                                <a class="btn circle btn-gray btn-sm" href="#">Purchase Plan</a>
                            </div>
                        </div>
                        <!-- End Single Itme -->

                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item active pricing-style-two">
                            <div class="pricing-item">
                                {!! $paketBasic->icon !!}
                                <div class="pricing-header">
                                    <h4>{{ $paketBasic->nama_paket }}</h4>
                                </div>
                                <div class="price">
                                    <h2><sup>Rp</sup>{{ number_format($paketBasic->harga, 0, ',', '.') }} <sub>/
                                            Monthly</sub>
                                </div>
                                <ul>
                                    @foreach ($paketBasic->paketInfo as $data)
                                        <li><i class="fas fa-check"></i> {{ $data->list_paket }}</li>
                                    @endforeach
                                </ul>
                                <a class="btn circle btn-theme-effect btn-sm" href="#">Purchase Plan</a>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item pricing-style-two">
                            <div class="pricing-item">
                                {!! $paketSilver->icon !!}
                                <div class="pricing-header">
                                    <h6>{{ $paketSilver->nama_paket }}</h6>
                                </div>
                                <div class="price">
                                    <h4><sup>Rp</sup>{{ number_format($paketSilver->harga, 0, ',', '.') }} <sub>/
                                            Monthly</sub>
                                </div>
                                <ul>
                                    @foreach ($paketSilver->paketInfo as $data)
                                        <li><i class="fas fa-check"></i> {{ $data->list_paket }}</li>
                                    @endforeach

                                </ul>
                                <a class="btn circle btn-gray btn-sm" href="#">Purchase Plan</a>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3" style="height: 100px;">
                <a class="btn circle btn-theme-effect btn-sm" href="{{ route('harga') }}">View More &nbsp; <i
                        class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start Testimonials-->

    <div class="testimonials-area text-light shadow dark bg-fixed carousel-shadow default-padding"
        style="background-image: url(assets/img/shape/2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What people say</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed.
                            Behaviour excellent middleton be as it curiosity departure
                            ourselves very extreme future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author" />
                                    <div class="content">
                                        <h4>Devid Warner</h4>
                                        <span> Managing Director</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods
                                        mentions defective at. Sympathize interested simplicity at
                                        do projecting care effect increasing terminated. As edward
                                        settle limits at in. Chamber reaching abnormally nothing
                                        be accesing to the point. very extreme future.
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
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author" />
                                    <div class="content">
                                        <h4>Pruasuj Natasha</h4>
                                        <span> Theme Developer</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods
                                        mentions defective at. Sympathize interested simplicity at
                                        do projecting care effect increasing terminated. As edward
                                        settle limits at in. Chamber reaching abnormally nothing
                                        be accesing to the point. very extreme future.
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
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author" />
                                    <div class="content">
                                        <h4>Koyel Anderson</h4>
                                        <span> Project Manager</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods
                                        mentions defective at. Sympathize interested simplicity at
                                        do projecting care effect increasing terminated. As edward
                                        settle limits at in. Chamber reaching abnormally nothing
                                        be accesing to the point. very extreme future.
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
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Team-->
    <div id="team" class="team-area default-padding bg-gray bg-cover bottom-less"
        style="background-image: url(assets/img/shape/33.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>CleverlyMessy Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it
                            curiosity departure ourselves very extreme future.
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
                                <img src="{{ asset('assets/photo/davi.png') }}" alt="Thumb" class="fixed-dimension">
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
                                <h4><a href="team-details.html">Davi Hanan Luthfi Abiyyu</a></h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-4">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/photo/umar.png') }}" alt="Thumb" class="fixed-dimension">
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
                                <img src="{{ asset('assets/photo/khalisa.png') }}" alt="Thumb"
                                    class="fixed-dimension">
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
                                <img src="{{ asset('assets/photo/cel.png') }}" alt="Thumb" class="fixed-dimension">
                                <div class="social">
                                    <input type="checkbox" id="toggle4" class="share-toggle" hidden>
                                    <label for="toggle4" class="share-button">
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
                                <img src="{{ asset('assets/photo/Zulfa.png') }}" alt="Thumb" class="fixed-dimension">
                                <div class="social">
                                    <input type="checkbox" id="toggle5" class="share-toggle" hidden>
                                    <label for="toggle5" class="share-button">
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
@endsection
