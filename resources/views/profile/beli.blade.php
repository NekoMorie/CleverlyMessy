<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Package</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }

        .step {
            font-size: 14px;
            font-weight: bold;
            color: #666;
            text-align: center;
            flex: 1;
            transition: color 0.3s ease;
            position: relative;
        }

        .step-number {
            display: inline-block;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #ddd;
            color: white;
            line-height: 45px;
            margin-bottom: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: relative;
        }

        .step.active .step-number {
            background-color: #007bff;
            transform: scale(1.1);
        }

        .step.completed .step-number {
            background-color: #28a745;
        }

        .step.completed .step-number::before {
            content: '✔';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
        }

        .step-number::before {
            content: attr(data-step);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .step.active {
            color: #007bff;
        }

        .step.completed {
            color: #28a745;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        .package {
            margin: 15px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .package:hover {
            background-color: #f0f8ff;
            border-color: #007bff;
        }

        .package.selected {
            border-color: #007bff;
            background-color: #e6f0ff;
        }

        .package-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .package-description {
            font-size: 14px;
            color: #666;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .help {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .step-text {
            margin-top: 8px;
            display: block;
            color: inherit;
        }

        .step.active .step-text {
            color: #007bff;
        }

        .step.completed .step-text {
            color: #69b6ff;
        }

        .success-checkmark {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
        }

        .success-animation {
            animation: scaleAndRotate 0.5s ease-in-out;
        }

        @keyframes scaleAndRotate {
            0% {
                transform: scale(0) rotate(-45deg);
                opacity: 0;
            }

            100% {
                transform: scale(1) rotate(0);
                opacity: 1;
            }
        }

        .success-message {
            text-align: center;
            color: #28a745;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        let selectedPackage = {
            name: 'Paket FREE',
            price: 0
        };

        function showPage(pageId) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.remove('active'));

            const steps = document.querySelectorAll('.step');
            steps.forEach(step => {
                step.classList.remove('active');
                step.classList.remove('completed');
            });

            document.getElementById(pageId).classList.add('active');
            document.querySelector(.step[data - page = "${pageId}"]).classList.add('active');

            // Tandai langkah sebelumnya sebagai selesai
            if (pageId === 'page2') {
                steps[0].classList.add('completed');
            }
            if (pageId === 'page3') {
                steps[0].classList.add('completed');
                steps[1].classList.add('completed');
            }
        }

        function selectPackage(packageElement) {
            const packages = document.querySelectorAll('.package');
            packages.forEach(pkg => pkg.classList.remove('selected'));
            packageElement.classList.add('selected');

            const packageTitle = packageElement.querySelector('.package-title').innerText;
            const packagePrice = packageElement.querySelector('.package-description').innerText.includes('Rp') ?
                parseInt(packageElement.querySelector('.package-description').innerText.match(/Rp ([\d.]+)/)[1].replace('.',
                    '')) :
                0;

            selectedPackage = {
                name: packageTitle,
                price: packagePrice
            };
            updateTotal();
        }

        function updateTotal() {
            const totalElement = document.querySelector('.total');
            totalElement.innerHTML = `
                <p>${selectedPackage.name}</p>
                <p>Pajak: Rp 0</p>
                <p>Total: Rp ${selectedPackage.price}</p>
            `;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="step-indicator">
            <span class="step active" data-page="page1" onclick="showPage('page1')">
                <div class="step-number" data-step="1"></div>
                <span class="step-text">Pilih Paket</span>
            </span>
            <span class="step" data-page="page2" onclick="showPage('page2')">
                <div class="step-number" data-step="2"></div>
                <span class="step-text">Daftar Akun</span>
            </span>
            <span class="step" data-page="page3" onclick="showPage('page3')">
                <div class="step-number" data-step="3"></div>
                <span class="step-text">Selesai</span>
            </span>
        </div>

        <div id="page1" class="page active">
            <h2>Pilih Paket</h2>
            <div class="package" onclick="selectPackage(this)">
                <div class="package-title">Paket FREE</div>
                <div class="package-description">Maksimal 5 siswa atau guru, hanya fitur dasar absensi</div>
            </div>
            <div class="package" onclick="selectPackage(this)">
                <div class="package-title">Paket BASIC</div>
                <div class="package-description">Harga Rp 33.000 per bulan, maksimal 15 siswa atau guru, absensi dasar,
                    pengelolaan waktu</div>
            </div>
            <div class="package" onclick="selectPackage(this)">
                <div class="package-title">Paket SILVER</div>
                <div class="package-description">Harga Rp 83.000 per bulan, maksimal 40 siswa atau guru, laporan
                    kehadiran, absensi online</div>
            </div>
            <div class="total">
                <p>Paket FREE</p>
                <p>Pajak: Rp 0</p>
                <p>Total: Rp 0</p>
            </div>
            <button class="btn" onclick="showPage('page2')">Daftar Akun Sekarang</button>
        </div>

        <div id="page2" class="page">
            <h2>Daftar Akun</h2>
            <form>
                <div class="form-group">
                    <label for="company-name">Nama Sekolah</label>
                    <input type="text" id="company-name" name="company-name" placeholder="Masukkan nama sekolah"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="emailanda@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Ulangi password"
                        required>
                </div>
                <div class="form-group">
                    <label for="whatsapp">Nomor WhatsApp</label>
                    <input type="text" id="whatsapp" name="whatsapp" placeholder="Masukkan nomor WhatsApp">
                </div>
                <button class="btn" type="button" onclick="showPage('page3')">Daftar</button>
            </form>
            <div class="help">
                <p>Punya kendala saat mendaftar akun? <a href="#">Hubungi kami</a></p>
            </div>
        </div>

        <div id="page3" class="page">
            <div class="success-checkmark">
                <svg class="success-animation" viewBox="0 0 52 52">
                    <circle cx="26" cy="26" r="25" fill="none" stroke="#28a745" stroke-width="2" />
                    <path fill="none" stroke="#28a745" stroke-width="2" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
            <h2 class="success-message">Selamat!</h2>
            <div class="success-message">
                <p>Pendaftaran Anda telah berhasil diselesaikan.</p>
                <p>Silakan cek email Anda untuk informasi login.</p>
            </div>
            <button class="btn" onclick="showPage('page1')">Kembali ke Halaman Awal</button>
        </div>
    </div>
</body>

</html>
