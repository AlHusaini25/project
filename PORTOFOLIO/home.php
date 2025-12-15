<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio AlFachri</title>
    <!-- CSS External -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Ikon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">m.fahrialhusaini</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="mt-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Halo, Saya <span class="text-warning">M.Fahri Al Husaini</span></h1>
            <p class="lead">Web Developer</p>
            <a href="#projects" class="btn btn-light mt-3">Lihat Proyek</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <img src="alkecik.JPG" alt="Foto Profil" class="mb-3">
            <h2>Tentang Saya</h2>
            <p class="mt-3 text-muted">
                Saya adalah seorang pelajar pengembang web yang berfokus pada pembuatan website responsif
                menggunakan teknologi modern seperti HTML, CSS, JavaScript, dan Bootstrap di SMK SYAFI'I AKROM.
            </p>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Proyek Saya</h2>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="webgewh.JPG" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Website Bisnis</h5>
                            <p class="card-text">Situs profesional untuk usaha kecil menengah dengan tampilan modern dan
                                fitur lengkap.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="webgewh.JPG" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Website Bisnis</h5>
                            <p class="card-text">Situs profesional untuk usaha kecil menengah dengan tampilan modern dan
                                fitur lengkap.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="webport.JPG" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Portofolio Pribadi</h5>
                            <p class="card-text">Situs personal yang menampilkan karya dan pengalaman saya sebagai web
                                developer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Kontak Saya</h2>
            <p class="text-muted">Hubungi saya melalui media sosial di bawah ini:</p>
            <div class="mt-3">
                <a href="https://www.facebook.com/share/1GntGWSmtW/" class="btn btn-outline-dark mx-2"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="https://www.instagram.com/albknbngall?igsh=MXR1NzVyaHlqcmVzcg=="
                    class="btn btn-outline-dark mx-2"><i class="bi bi-instagram"></i> Instagram</a>
                <a href="https://github.com/AlHusaini25" class="btn btn-outline-dark mx-2"><i class="bi bi-github"></i> GitHub</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 AlFachri</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>