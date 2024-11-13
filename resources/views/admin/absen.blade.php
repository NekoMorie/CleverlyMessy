@extends('admin.layout.template')
<!--end sidebar -->
<!--start sidebar -->
@section('content')

<div class="page-content-wrapper">
    <!-- start page content-->
   <div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Admin</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="log-in-outline"></ion-icon></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
{{--
    <style>
        .jam-digital-malasngoding {
          overflow: hidden;
          float: center;
          width: 100px;
          margin: 2px auto;
          border: 0px solid #efefef;
        }

        .kotak {
          float: left;
          width: 30px;
          height: 30px;
          background-color: #189fff;
        }

        .jam-digital-malasngoding p {
          color: #fff;
          font-size: 16px;
          text-align: center;
          margin-top: 3px;
        }
    </style>
  <div class="container-fluid">
    <div class="jam-digital-malasngoding">
        <div class="kotak">
          <p id="jam"></p>
        </div>
        <div class="kotak">
          <p id="menit"></p>
        </div>
        <div class="kotak">
          <p id="detik"></p>
        </div>
    </div>
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
          var waktu = new Date();
          setTimeout("waktu()", 1000);
          document.getElementById("jam").innerHTML = waktu.getHours();
          document.getElementById("menit").innerHTML = waktu.getMinutes();
          document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>
    <br> --}}

    <div class="col-lg-12">
        <div class="card">
            <form method="post" action="{{ route('absen.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col"></div>
                    <div class="col">
                        <center>
                            <h2>Absen Masuk: </h2>
                            <div class="webcam mt-4 mb-4" id="results"></div>
                            <div class="form-group">
                                <h4 class="mb-2">Keterangan Masuk</h4>
                                <textarea type="text" class="form-control @error('keterangan_masuk') is-invalid @enderror" id="keterangan_masuk" name="keterangan_masuk">{{ old('keterangan_masuk') }}</textarea>
                                @error('keterangan_masuk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </center>
                    </div>
                    <div class="col">
                        <input type="hidden" name="foto_jam_absen" class="image-tag">
                    </div>
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-primary" onClick="take_snapshot()">Masuk</button>
                </center>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{ url('webcamjs/webcam.min.js') }}"></script>
    <script language="JavaScript">
        Webcam.set({
            width: 720,
            height: 405,
            image_format: 'jpeg',
            jpeg_quality: 70
        });
        Webcam.attach('.webcam');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML =
                    '<img src="' + data_uri + '"/>';
            });
        }
    </script>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      @if (session('success'))
          Swal.fire({
              title: 'Success!',
              text: "{{ session('success') }}",
              icon: 'success',
              confirmButtonText: 'OK'
          });
      @endif
  </script>

@endsection
