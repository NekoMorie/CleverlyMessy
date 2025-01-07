<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket & Harga - Presensi</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background: linear-gradient(180deg, #EFF3F9 50%, #ffffff 50%);
            color: #1e293b;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 140px 40px 80px;
        }

        .header {
            text-align: center;
            margin-bottom: 80px;
        }

        .header h1 {
            font-size: 3.2em;
            margin-bottom: 20px;
            color: #1e293b;
            font-weight: 800;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .header p {
            font-size: 1.25em;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.6s ease 0.2s forwards;
        }

        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            text-align: left;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            height: 100%;
            display: flex;
            flex-direction: column;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .card:hover {
            transform: translateY(-5px) scale(1.02);
        }

        .card h3 {
            color: #1e293b;
            font-size: 1.5em;
            margin-bottom: 16px;
            font-weight: 700;
        }

        .price {
            font-size: 2em;
            color: #3b82f6;
            margin-bottom: 24px;
            font-weight: 700;
        }

        .period {
            color: #64748b;
            font-size: 0.5em;
            font-weight: 500;
        }

        .features {
            margin-bottom: 24px;
        }

        .features li {
            color: #475569;
            margin-bottom: 12px;
            padding-left: 28px;
            position: relative;
            font-size: 1em;
            line-height: 1.5;
        }

        .features li:before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #3b82f6;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #3b82f6;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1em;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-top: auto;
        }

        .btn:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .btn::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn:hover::after {
            left: 100%;
        }

        .package-section {
            margin-bottom: 60px;
        }

        .package-section h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 40px;
            color: #1e293b;
            font-weight: 700;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .popular {
            border: 2px solid #3b82f6;
        }

        .popular:before {
            content: "Populer";
            position: absolute;
            top: 12px;
            right: -25px;
            background: #3b82f6;
            color: white;
            padding: 4px 30px;
            font-size: 0.8em;
            font-weight: 600;
            transform: rotate(45deg);
        }

        @media (max-width: 1200px) {
            .pricing-cards {
                grid-template-columns: repeat(2, 1fr);
                max-width: 800px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 40px 20px;
            }

            .header h1 {
                font-size: 2.4em;
            }

            .pricing-cards {
                grid-template-columns: 1fr;
                max-width: 400px;
            }

            .card {
                padding: 30px;
            }
        }

        .navbar {
            background: #fff;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links a {
            color: #1e293b;
            text-decoration: none;
            font-weight: 500;
            font-size: 1em;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #3b82f6;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .demo-btn {
            background: #1e40af;
            color: #fff !important;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .demo-btn:hover {
            background: #1e3a8a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 64, 175, 0.2);
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Keyframes untuk animasi fadeInUp */
        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Tambahan style untuk icon di card header */
        .card h3 i {
            margin-right: 8px;
            color: #3b82f6;
        }

        /* Tambahan style untuk icon di button */
        .btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .btn:hover i {
            transform: translateX(4px);
        }

        .faq-section {
            margin-top: 80px;
            text-align: center;
        }

        .faq-section h2 {
            font-size: 2.4em;
            color: #1e293b;
            margin-bottom: 16px;
            font-weight: 700;
        }

        .faq-subtitle {
            color: #64748b;
            font-size: 1.2em;
            margin-bottom: 48px;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .faq-item {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            text-align: left;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .faq-item h3 {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 1.2em;
            color: #1e293b;
            margin-bottom: 16px;
        }

        .faq-item h3 i {
            color: #3b82f6;
            font-size: 1.2em;
            margin-top: 2px;
        }

        .faq-item p {
            color: #64748b;
            line-height: 1.6;
            font-size: 1em;
        }

        @media (max-width: 992px) {
            .faq-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .faq-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Tambahkan style khusus untuk pricing-cards di paket sekolah */
        .package-section:last-of-type .pricing-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .package-section:last-of-type .card {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 32px;
            margin: 0;
        }

        /* Menyesuaikan ukuran dan spacing untuk konten card */
        .package-section:last-of-type .card h3 {
            font-size: 1.8em;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .package-section:last-of-type .price {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .package-section:last-of-type .period {
            font-size: 0.4em;
            margin-left: 5px;
        }

        .package-section:last-of-type .features {
            flex-grow: 1;
            margin-bottom: 30px;
        }

        .package-section:last-of-type .features li {
            margin-bottom: 15px;
        }

        /* Media queries untuk responsif */
        @media (max-width: 1024px) {
            .package-section:last-of-type .pricing-cards {
                padding: 0 20px;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .package-section:last-of-type .pricing-cards {
                grid-template-columns: repeat(2, 1fr);
                max-width: 600px;
            }

            .package-section:last-of-type .card {
                padding: 24px;
            }
        }

        @media (max-width: 576px) {
            .package-section:last-of-type .pricing-cards {
                grid-template-columns: 1fr;
                max-width: 350px;
            }
        }

        /* Animasi untuk card */
        @keyframes floatUp {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes shine {
            0% {
                left: -100%;
                opacity: 0;
            }

            100% {
                left: 100%;
                opacity: 1;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Update style untuk card */
        .card {
            /* ... style yang sudah ada ... */
            animation: floatUp 0.8s ease-out forwards;
            opacity: 0;
        }

        /* Delay untuk setiap card */
        .pricing-cards .card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .pricing-cards .card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .pricing-cards .card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .pricing-cards .card:nth-child(4) {
            animation-delay: 0.4s;
        }

        /* Animasi hover untuk card */
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Animasi untuk tombol */
        .btn {
            /* ... style yang sudah ada ... */
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.3),
                    transparent);
            animation: shine 0.5s ease-out;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        /* Animasi untuk badge populer */
        .popular::before {
            animation: pulse 2s infinite;
        }

        /* Animasi untuk icon */
        .card h3 i {
            transition: transform 0.3s ease;
        }

        .card:hover h3 i {
            transform: scale(1.2) rotate(5deg);
        }

        /* Animasi untuk FAQ items */
        .faq-item {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: floatUp 0.6s ease-out forwards;
        }

        .faq-item:nth-child(1) {
            animation-delay: 0.6s;
        }

        .faq-item:nth-child(2) {
            animation-delay: 0.7s;
        }

        .faq-item:nth-child(3) {
            animation-delay: 0.8s;
        }

        .faq-item:nth-child(4) {
            animation-delay: 0.9s;
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Animasi untuk header */
        .header h1 {
            animation: floatUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .header p {
            animation: floatUp 0.8s ease-out 0.2s forwards;
            opacity: 0;
        }

        /* Animasi untuk section titles */
        .package-section h2 {
            animation: floatUp 0.8s ease-out forwards;
            opacity: 0;
        }
    </style>
</head>

<body>
    <div class="package-section">
        <h2>Paket Perusahaan</h2>
        <div class="pricing-cards">
            <div class="card popular">
                <h3><i class="fas fa-crown"></i>ENTERPRISE</h3>
                <div class="price">
                    Rp 465.000
                    <span class="period">per bulan</span>
                </div>
                <ul class="features" style="list-style-type: none; padding: 0;">
                    <li>Max 300 karyawan</li>
                    <li>Fitur lanjutan</li>
                    <li>Laporan kinerja</li>
                    <li>Integrasi dengan sistem lain</li>
                </ul>
                <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="card">
                <h3><i class="fas fa-gem"></i>DIAMOND</h3>
                <div class="price">
                    Rp 330.000
                    <span class="period">per bulan</span>
                </div>
                <ul class="features" style="list-style-type: none; padding: 0;">
                    <li>Max 200 karyawan</li>
                    <li>Pengelolaan absensi dan kehadiran</li>
                    <li>Laporan waktu dan gaji</li>
                    <li>Integrasi dasar</li>
                </ul>
                <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="card">
                <h3><i class="fas fa-award"></i>PLATINUM</h3>
                <div class="price">
                    Rp 230.000
                    <span class="period">per bulan</span>
                </div>
                <ul class="features" style="list-style-type: none; padding: 0;">
                    <li>Max 130 karyawan</li>
                    <li>Laporan absensi dan data kehadiran</li>
                </ul>
                <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="card">
                <h3><i class="fas fa-medal"></i>GOLD</h3>
                <div class="price">
                    Rp 150.000
                    <span class="period">per bulan</span>
                </div>
                <ul class="features" style="list-style-type: none; padding: 0;">
                    <li>Max 100 karyawan</li>
                    <li>Dasar laporan kehadiran</li>
                    <li>Pengelolaan absensi sederhana</li>
                </ul>
                <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <div class="package-section">
        <h2>Paket Sekolah</h2>
        <div class="pricing-cards">
            <div class="card style="justify-content: center; ">
                    <h3><i class="fas fa-star"></i>SILVER</h3>
                    <div class="price">
                        Rp 83.000
                        <span class="period">per bulan</span>
                    </div>
                    <ul class="features" style="list-style-type: none; padding: 0;">
                        <li>Maksimal 40 siswa atau guru</li>
                        <li>Laporan kehadiran</li>
                        <li>Absensi online</li>
                    </ul>
                    <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="card">
                    <h3><i class="fas fa-check-circle"></i>BASIC</h3>
                    <div class="price">
                        Rp 33.000
                        <span class="period">per bulan</span>
                    </div>
                    <ul class="features" style="list-style-type: none; padding: 0;">
                        <li>Maksimal 15 siswa atau guru</li>
                        <li>Absensi dasar</li>
                        <li>Pengelolaan waktu</li>
                    </ul>
                    <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="card">
                    <h3><i class="fas fa-gift"></i>FREE</h3>
                    <div class="price">
                        Rp 0
                        <span class="period">per bulan</span>
                    </div>
                    <ul class="features" style="list-style-type: none; padding: 0;">
                        <li>Maksimal 5 siswa atau guru</li>
                        <li>Hanya fitur dasar absensi</li>
                    </ul>
                    <a href="#" class="btn">Pilih Paket <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <p class="faq-subtitle">Pertanyaan yang sering ditanyakan</p>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h3><i class="fas fa-question-circle"></i> Bagaimana cara berlangganan?</h3>
                    <p>Pilih paket yang sesuai, lakukan pembayaran, dan sistem akan aktif dalam 24 jam.</p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-question-circle"></i> Apakah bisa upgrade paket?</h3>
                    <p>Ya, Anda bisa upgrade paket kapan saja sesuai kebutuhan organisasi Anda.</p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-question-circle"></i> Apakah ada demo sistem?</h3>
                    <p>Ya, Anda bisa mencoba demo sistem gratis selama 14 hari.</p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-question-circle"></i> Apakah bisa downgrade paket?</h3>
                    <p>Ya, Anda dapat menurunkan paket sesuai kebutuhan pada akhir periode berlangganan.</p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-question-circle"></i> Bagaimana sistem pembayaran?</h3>
                    <p>Pembayaran dapat dilakukan melalui transfer bank atau e-wallet yang tersedia.</p>
                </div>

                <div class="faq-item">
                    <h3><i class="fas fa-question-circle"></i> Bagaimana dengan keamanan data?</h3>
                    <p>Data Anda aman dengan sistem enkripsi dan backup rutin yang kami lakukan.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
