@extends('profile.layout.app')

@section('content')
    <!-- Start Contact Area-->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="contact-content">
                <div class="shape">
                    <img src="assets/img/illustration/contact.png" alt="illustration">
                </div>
                <div class="row">
                    <div class="col-lg-4 info">
                        <div class="content">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Our Email</h5>
                                        <a href="mailto:info@validtheme.com">info@validtheme.com</a> <br> <a
                                            href="mailto:support@softar.com">support@softar.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Address</h5>
                                        <p>
                                            22 Baker Street, <br> London, United Kingdom, <br> W1U 3BW
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-headphones-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Phone</h5>
                                        <a href="tel:+4733378901">+44-20-7328-4499</a> <br> <a
                                            href="tel:+4733378901">+99-34-8878-9989</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 contact-form-box">
                        <div class="form-box">
                            <h2>Let's talk?</h2>
                            <p>
                                It's all about the humans behind a brand and those experiencing it, br we're right there.
                                <br> In the middle performance quick.
                            </p>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*"
                                                type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
@endsection
