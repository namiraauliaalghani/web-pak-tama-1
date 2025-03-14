<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jilbab Elegan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Jilbab Elegan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href={{ route('produk.index') }}>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('jilbab.jilbab') }}>jilbab</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="#order">Pesan Sekarang</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Jilbab Elegan & Modern</h1>
            <p>Jilbab berkualitas tinggi untuk tampilan anggun dan syar'i</p>
            <a href="#order" class="btn btn-light btn-lg">Pesan Sekarang</a>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>Tentang Jilbab Elegan</h2>
            <p>Jilbab premium dengan bahan nyaman, ringan, dan desain eksklusif untuk menunjang penampilan Anda.</p>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section id="gallery" class="bg-light py-5">
        <div class="container text-center">
            <h2>Galeri Produk</h2>
            <div class="row">
                <div class="col-md-4"><img src="https://via.placeholder.com/300" class="img-fluid" alt="Jilbab 1"></div>
                <div class="col-md-4"><img src="https://via.placeholder.com/300" class="img-fluid" alt="Jilbab 2"></div>
                <div class="col-md-4"><img src="https://via.placeholder.com/300" class="img-fluid" alt="Jilbab 3"></div>
            </div>
        </div>
    </section>
    
    <!-- Testimoni Section -->
    <section id="testimoni" class="py-5">
        <div class="container text-center">
            <h2>Apa Kata Mereka?</h2>
            <blockquote class="blockquote">
                <p>"Jilbab ini sangat nyaman dan elegan saat dipakai!"</p>
                <footer class="blockquote-footer">- Aisyah, Bandung</footer>
            </blockquote>
        </div>
    </section>
    
    <!-- Order Section -->
    <section id="order" class="bg-primary text-white text-center py-5">
        <div class="container">
            <h2>Dapatkan Jilbab Anda Sekarang</h2>
            <p>Klik tombol di bawah untuk melakukan pemesanan</p>
            <a href="#" class="btn btn-light btn-lg">Pesan Sekarang</a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Jilbab Elegan | All Rights Reserved</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
