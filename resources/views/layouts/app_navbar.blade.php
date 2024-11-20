<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Himpunan Mahasiswa Informatika</title>
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

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Informatika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/divisi">Divisi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
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
    <!-- Content Section -->
    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5 py-3 bg-dark text-white">
        <p>&copy; 2024 Himpunan Mahasiswa Informatika. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
