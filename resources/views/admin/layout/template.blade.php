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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap') }}"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.css" rel="stylesheet" />
    <!--Theme Styles-->
    <link href="{{ url('assets/admin/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/admin/css/header-colors.css') }}" rel="stylesheet" />

    <link href="{{ url('assets/admin/css/kartu.css') }}" rel="stylesheet" />

    {{-- tabel --}}
    <link href="{{ url('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- Tambahkan di bagian <head> -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">

    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}" type="image/x-icon">
    <title>CleverlyMessy - {{ $title }} Page</title>
    <style>
        .page-item.active .page-link {
            background-color: #00489B;
            border-color: #3e69b9
        }

        .form-check-input:checked {
            background-color: #00489B;
            border-color: #3e69b9
        }
    </style>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        @include('admin.layout.sidebar')
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon
                            name="close-sharp"></ion-icon></div>
                </form>
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-button">
                            <a class="nav-link" href="javascript:;">
                                <div class="">
                                    <ion-icon name="search-sharp"></ion-icon>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dark-mode-icon" href="javascript:;">
                                <div class="mode-icon">
                                    <ion-icon name="moon-sharp"></ion-icon>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <span class="notify-badge">8</span>
                                    <ion-icon name="notifications-sharp"></ion-icon>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-primary"><ion-icon name="cart-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                                        ago</span></h6>
                                                <p class="msg-info">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-danger"><ion-icon
                                                    name="person-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Customers<span class="msg-time float-end">14
                                                        Sec
                                                        ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-success"><ion-icon
                                                    name="document-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
                                                        min
                                                        ago</span></h6>
                                                <p class="msg-info">The pdf files generated</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-info"><ion-icon
                                                    name="checkmark-done-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Product Approved <span
                                                        class="msg-time float-end">2 hrs ago</span></h6>
                                                <p class="msg-info">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-warning"><ion-icon name="send-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Time Response <span class="msg-time float-end">28
                                                        min
                                                        ago</span></h6>
                                                <p class="msg-info">5.1 min avarage time response</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-danger"><ion-icon
                                                    name="chatbox-ellipses-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Comments <span class="msg-time float-end">4
                                                        hrs
                                                        ago</span></h6>
                                                <p class="msg-info">New customer comments recived</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-primary"><ion-icon
                                                    name="albums-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1
                                                        day
                                                        ago</span></h6>
                                                <p class="msg-info">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-success"><ion-icon
                                                    name="shield-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Your item is shipped <span
                                                        class="msg-time float-end">5 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-warning"><ion-icon name="cafe-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2
                                                        weeks
                                                        ago</span></h6>
                                                <p class="msg-info">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li> --}}
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <img src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                        alt="Profile picture" class="border rounded-circle" width="40px">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                {{-- @auth --}}
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <img src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                                alt="Profile picture" class="border rounded-circle" width="60px">
                                            <div class="">
                                                <h6 class="mb-0 dropdown-user-name">{{ $user->nama }}</h6>
                                                <small
                                                    class="mb-0 dropdown-user-designation text-secondary">{{ $user->role }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class=""><ion-icon name="person-outline"></ion-icon></div>
                                                <div class="ms-3"><span>Profile</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" onclick="confirmLogout(event)">
                                            <div class="d-flex align-items-center">
                                                <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                                                <div class="ms-3">Logout</div>
                                            </div>

                                        </a>
                                    </li>
                        </li>
                        {{-- @endauth --}}

                        {{-- @guest
                                    <li>
                                        <a class="dropdown-item" href="{{ route('login') }}">
                                            <div class="d-flex align-items-center">
                                                <div class=""><ion-icon name="log-in-outline"></ion-icon></div>
                                                <div class="ms-3"><span>Login</span></div>
                                            </div>
                                        </a>
                                    </li>
                                @endguest --}}
                        {{-- </ul>
                    </li> --}}


                    </ul>

                </div>
            </nav>
        </header>
        @include('sweetalert::alert')

        <!--end top header-->
        @yield('content')

        <!-- Footer -->
        <footer class="footer bg-light text-center py-3"
            style="position: fixed; bottom: 0; width: 100%; z-index: 10;">
            <div class="footer-text">
                Copyright © 2024. All rights reserved.
            </div>
        </footer>


        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon
                    name="color-palette-sharp" class="me-0"></ion-icon></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1" checked>
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                            value="option3">
                        <label class="form-check-label" for="SemiDark">Semi Dark</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end switcher-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->


    <!-- JS Files-->
    <script src="{{ url('assets/admin/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.js"></script>
    <script src="{{ url('assets/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/index.js') }}"></script>
    <script src="{{ url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ url('assets/admin/js/main.js') }}"></script>
    <script src="{{ url('assets/admin/js/delete.js') }}"></script>

    {{-- Data Tabels --}}
    <script src="{{ url('assets/admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/table-datatable.js') }}"></script>
    <!-- Tambahkan di bagian sebelum penutup </body> -->
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('gagal'))
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: '{{ session('gagal') }}',
                });
            @endif

            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('success') }}',
                });
            @endif
        });
    </script>
    <script>
        // new MultiSelectTag('tag')
        new MultiSelectTag('tag', {
            rounded: true, // default true
            shadow: false, // default false
            placeholder: 'Search', // default Search...
            tagColor: {
                textColor: '#327b2c',
                borderColor: '#92e681',
                bgColor: '#eaffe6',
            },
            onChange: function(values) {
                console.log(values)
            }
        })
    </script>

    <script>
        $(document).ready(function() {
            $("#summernote").summernote({
                height: 300, // Tinggi editor
                placeholder: "Write here...", // Placeholder default
                toolbar: [
                    // Sesuaikan toolbar
                    ["style", ["bold", "italic", "underline"]],
                    ["font", ["fontsize", "color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["insert", ["link", "picture", "video"]],
                    ["view", ["fullscreen", "codeview", "help"]],
                ],
            });
        });
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');

        titleInput.addEventListener('input', function() {
            let title = this.value;

            let slug = title
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g,
                    '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            slugInput.value = slug;
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.save-button').addEventListener('click', function() {
                Swal.fire({
                    title: "Apakah kamu yakin?",
                    text: "Pastikan semua perubahan sudah benar!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, simpan!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('save-form').submit();
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    const url = this.dataset.url;
                    const paketId = this.dataset.id;
                    const formId =
                        `delete-form-${paketId}`;
                    const form = document.getElementById(formId);
                    if (!form) {
                        console.error(`Form dengan ID ${formId} tidak ditemukan!`);
                        return;
                    }

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: 'Data yang dihapus tidak dapat dikembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.action = url; // Set URL formulir
                            form.submit(); // Kirim formulir
                        }
                    });
                });
            });
        });

        function previewFile() {
            const preview = document.getElementById('previewImage');
            const file = document.getElementById('img').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function formatHargaInput(input) {
            input.addEventListener("input", function(e) {
                let rawValue = e.target.value.replace(/[^0-9]/g, "");
                if (rawValue) {
                    e.target.value =
                        `Rp ${parseInt(rawValue, 10).toLocaleString("id-ID")}`;
                } else {
                    e.target.value = "";
                }
            });

            input.addEventListener("focus", function(e) {
                e.target.setSelectionRange(e.target.value.length, e.target.value
                    .length); // Letakkan kursor di akhir
            });

            input.addEventListener("keydown", function(e) {
                const allowedKeys = ["Backspace", "ArrowLeft", "ArrowRight", "Delete",
                    "Tab"
                ]; // Tombol diperbolehkan
                if (allowedKeys.includes(e.key)) return;
                if (!/[0-9]/.test(e.key)) e.preventDefault();
            });
        }

        document.querySelectorAll(".input-harga").forEach(function(input) {
            if (input.value) {
                let rawValue = parseInt(input.value.replace(/[^0-9]/g, ""),
                    10);
                input.value = `Rp ${rawValue.toLocaleString("id-ID")}`;
            }
            formatHargaInput(input); // Tambahkan format listener
        });
    </script>
    <script>
        document.getElementById("harga").addEventListener("input", function(e) {
            let rawValue = e.target.value.replace(/[^0-9]/g, "");

            if (rawValue) {
                e.target.value = `Rp. ${parseInt(rawValue, 10).toLocaleString("id-ID")}`;
            } else {
                e.target.value = "";
            }
        });

        document.getElementById("harga").addEventListener("focus", function(e) {
            e.target.setSelectionRange(e.target.value.length, e.target.value
                .length);
        });

        document.getElementById("harga").addEventListener("keydown", function(e) {
            const allowedKeys = [
                "Backspace",
                "ArrowLeft",
                "ArrowRight",
                "Delete",
                "Tab",
            ];

            if (allowedKeys.includes(e.key)) return;

            if (!/[0-9]/.test(e.key)) {
                e.preventDefault();
            }
        });







        function confirmLogout(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari akun Anda!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Use Fetch API to send a POST request to the logout route.  
                    fetch("{{ route('logout-admin') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-Token': '{{ csrf_token() }}', // Include CSRF token for protection  
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({}) // Send an empty body for a simple logout action  
                        })
                        .then(response => {
                            if (response.ok) {
                                // If the request was successful, reload the page or redirect to a different page  
                                window.location.href =
                                    "{{ url('/login') }}"; // Change this to the desired redirect URL  
                            } else {
                                // Handle error (optional)  
                                Swal.fire('Oops!', 'Something went wrong. Please try again.', 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Oops!', 'Something went wrong. Please try again.', 'error');
                        });
                }
            });
        }



        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data ini akan dihapus dan tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>


</body>

</html>
