<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CleverlyMessy - {{ $title }} Page</title>
    <!-- CSS Files -->
    <link href="{{ url('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap') }}"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: hsl(0, 0%, 96%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            margin: 0;
        }

        .active {
            border-bottom: 2px solid blue;
            color: blue;
        }

        .tab {
            cursor: pointer;
            padding: 10px 15px;
            margin: 0 5px 10px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .tab:hover {
            color: blue;
        }

        .card {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .btn {
            width: 100%;
        }

        @media (max-width: 768px) {
            #text {
                display: none;
            }

            .kotak {
                width: 100%;
            }

            .card {
                padding: 5px;
            }
        }

        .kotak {
            width: 100%;
        }

        form {
            margin-top: 50px;
        }

        .btn-google {
            background-color: #ea4335;
        }

        .form-outline {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.75rem 0.75rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-label {
            position: absolute;
            left: 0.75rem;
            top: 0.75rem;
            transition: 0.2s ease all;
            color: #6c757d;
            pointer-events: none;
        }

        .form-control:focus+.form-label,
        .form-control:not(:placeholder-shown)+.form-label {
            top: -1.25rem;
            left: 0.40rem;
            font-size: 0.75rem;
            color: #007bff;
        }

        .form-control::placeholder {
            color: transparent;
        }
    </style>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="kotak">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" id="text">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            The best offer <br />
                            <span class="text-primary">for your business</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                            quibusdam tempora at cupiditate quis eum maiores libero
                            veritatis? Dicta facilis sint aliquid ipsum atque?
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <!-- Button Group for Login and Signup -->
                                <div class="text-center mb-4">
                                    <span class="tab active" id="loginBtn">Login</span>
                                    <span class="tab" id="signupBtn">Sign Up</span>
                                </div>

                                <!-- Login Section -->
                                <section id="loginSection" style="display: block;">
                                    <form>
                                        <div class="form-outline mb-4 mt-3">
                                            <input type="email" id="loginEmail" class="form-control" placeholder=" "
                                                required />
                                            <label class="form-label" for="loginEmail">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="loginPassword" class="form-control"
                                                placeholder=" " required />
                                            <label class="form-label" for="loginPassword">Password</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block mb-3">
                                            Login
                                        </button>

                                        {{-- <div class="text-center"> --}}
                                        {{-- <p>or sign up with:</p> --}}
                                        {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button> --}}
                                        <a href="{{ route('auth-google') }}" type="button"
                                            class="btn btn-google btn-block mb-4">
                                            <i class="fab fa-google text-white"></i> <span class="text-white"> Masuk
                                                dengan Google</span>
                                        </a>
                                        {{-- <button type="button"
                                                class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button> --}}
                                        {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button> --}}
                                        {{-- </div> --}}
                                    </form>
                                </section>

                                <!-- Signup Section -->
                                <section id="signupSection" style="display: none;">
                                    <form>
                                        <div class="form-outline mb-4 mt-3">
                                            <input type="email" id="loginEmail" class="form-control" placeholder=" "
                                                required />
                                            <label class="form-label" for="loginEmail">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="loginPassword" class="form-control"
                                                placeholder=" " required />
                                            <label class="form-label" for="loginPassword">Password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="loginPassword" class="form-control"
                                                placeholder=" " required />
                                            <label class="form-label" for="loginPassword">Password</label>
                                        </div>

                                        {{-- <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example33" checked />
                                            <label class="form-check-label" for="form2Example33">
                                                Subscribe to our newsletter
                                            </label>
                                        </div> --}}

                                        <button type="submit" class="btn btn-primary btn-block mb-3">
                                            Sign up
                                        </button>

                                        {{-- <div class="text-center"> --}}
                                        {{-- <p>or sign up with:</p> --}}
                                        {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button> --}}
                                        <a href="{{ route('auth-google') }}" type="button"
                                            class="btn btn-google btn-block mb-4">
                                            <i class="fab fa-google text-white"></i> <span class="text-white"> Masuk
                                                dengan Google</span>
                                        </a>
                                        {{-- <button type="button"
                                                class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button> --}}
                                        {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button> --}}
                                        {{-- </div> --}}
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>

    <script>
        document.getElementById('signupBtn').addEventListener('click', function() {
            document.getElementById('loginSection').style.display = 'none';
            document.getElementById('signupSection').style.display = 'block';
            this.classList.add('active');
            document.getElementById('loginBtn').classList.remove('active');
        });

        document.getElementById('loginBtn').addEventListener('click', function() {
            document.getElementById('signupSection').style.display = 'none';
            document.getElementById('loginSection').style.display = 'block';
            this.classList.add('active');
            document.getElementById('signupBtn').classList.remove('active');
        });
    </script>
</body>

</html>
