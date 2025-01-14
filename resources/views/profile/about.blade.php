@extends('profile.layout.app')

@section('content')
    {{-- <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb --> --}}

    <!-- Star About Area
            ============================================= -->
    <div id="about" class="about-area bg-gray default-padding">
        <!-- Shape -->
        <div class="fixed-shape-left">
            <img src="assets/img/shape/9.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img class="wow fadeInLeft" data-wow-delay="300ms" src="assets/img/dashboard/5.png"
                                alt="Thumb">
                            <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/img/dashboard/6.png"
                                alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 info wow fadeInRight">
                        <h4>Story about us</h4>
                        <h2>Perfect place to Design, Development, Software.</h2>
                        <ul>
                            <li>
                                <h5>Free Download App</h5>
                                <p>
                                    Fruit defer in party me built under first. Forbade him but savings sending ham general.
                                    So play do in near park that pain.
                                </p>
                            </li>
                            <li>
                                <h5>Trusted and Reliable</h5>
                                <p>
                                    Fruit defer in party me built under first. Forbade him but savings sending ham general.
                                    So play do in near park that pain.
                                </p>
                            </li>
                        </ul>
                        <div class="button">
                            <a class="btn circle btn-theme-effect btn-sm" href="#">Start free trial</a>
                            <a href="#">See all features</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Fun Factor Area
            ============================================= -->
    <div class="fun-factor-area relative text-light">
        <div class="half-bg-top-gray"></div>
        <div class="container">
            <div class="fun-fact-items text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="687" data-speed="5000">687</div>
                            <span class="medium">Projects Completed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="655" data-speed="5000">655</div>
                            <span class="medium">Active clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="450" data-speed="5000">450</div>
                            <span class="medium">Cups of coffee</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="1200" data-speed="5000">1200</div>
                            <span class="medium">Happy clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Team
            ============================================= -->
    <div id="team" class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
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
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
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
                                <h4>Ahem Natasha</h4>
                                <span>Operations officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
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
                                <h4>Devid mark</h4>
                                <span>Graphic designer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
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
                                <h4>Brave Hammam</h4>
                                <span>Web developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Choose Us Area
            ============================================= -->
    <div class="choose-us-area default-padding bg-gray">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="assets/img/illustration/2.png" alt="dashboard">
                </div>

                <div class="col-lg-6 info">
                    <div class="item-box">
                        <h4>Why Choose us</h4>
                        <h2>Create your app page <br> With expert developer</h2>
                        <p>
                            Journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how
                            reasonably precaution diminution she simplicity sir but. Questions am sincerity zealously
                            concluded consisted or no gentleman it.
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-layer-group"></i>
                                <h5>Friendly Interface</h5>
                            </li>
                            <li>
                                <i class="fas fa-fingerprint"></i>
                                <h5>Strong Encryption</h5>
                            </li>
                        </ul>
                        <div class="progress-box">
                            <h5>Success Rate</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="78">
                                    <span>78%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us Area -->
@endsection
