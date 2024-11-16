<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Recruitment - Himpunan Mahasiswa Informatika</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(44, 62, 80, 0.9);
            transition: background-color 0.3s;
        }

        .navbar.scrolled {
            background-color: #2C3E50;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-brand {
            font-size: 1.5rem;
            color: #ffffff;
            font-weight: bold;
        }

        .navbar .nav-link {
            color: #ffffff;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar .nav-link:hover {
            color: #b8d8ff;
        }

        .navbar .navbar-toggler {
            border: none;
        }

        .navbar .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        .navbar .nav-link.active {
            color: #b8d8ff;
            font-weight: bold;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            background: url({{asset('images/informatika.jpg')}}) no-repeat center center/cover;
            color: white;
            padding: 160px 0;
            text-align: center;
            background-size: cover;
            background-position: center;
            transition: all 0.3s ease;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

        .hero-section p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }

        .cta-btn {
            background-color: #e74c3c;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 25px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .cta-btn:hover {
            background-color: #c0392b;
            transform: scale(1.1);
        }

        /* Footer */
        footer {
            background-color: #2C3E50;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        footer a {
            color: #00bcd4;
            text-decoration: none;
        }

        footer a:hover {
            color: #fff;
        }

        .social-icons i {
            color: #fff;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .social-icons i:hover {
            color: #00bcd4;
        }

        /* Section styling for smooth transition */
        .section {
            padding: 80px 0;
        }

        .section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #34495e;
        }

        .section p {
            font-size: 1.1rem;
            color: #7f8c8d;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Informatika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/divisi">Divisi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                        <!-- Tombol Login dan Register untuk pengguna yang belum login -->
                        <li class="nav-item"><a class="btn btn-outline-light ms-3" href="/login">Login</a></li>
                        <li class="nav-item"><a class="btn btn-light ms-2" href="/register">Register</a></li>
                    @endguest

                    @auth
                        <!-- Tombol Logout untuk pengguna yang sudah login -->
                        <li class="nav-item">
                            <form action="/logout" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-light ms-3">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Open Recruitment 2024</h1>
            <p>Bergabunglah dengan Himpunan Mahasiswa Informatika untuk berkembang bersama!</p>
            <a href="login" class="cta-btn">Daftar Sekarang</a>
        </div>
    </div>

    <!-- Informasi Divisi Section -->
    <div class="section">
        <div class="container">
            <h2>Divisi Kami</h2>
            <p>Pilih divisi yang sesuai dengan minat dan keahlian Anda untuk berkembang bersama himpunan kami.</p>
            <!-- Bisa tambahkan lebih banyak konten divisi di sini -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Himpunan Mahasiswa Informatika. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector(".navbar");
            navbar.classList.toggle("scrolled", window.scrollY > 100);
        });
    </script>
</body>

</html>
