<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - {{ $film['judul'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar / Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ route('beranda') }}">Avengers Katalog</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                <a class="nav-link" href="{{ route('film.daftar') }}">Daftar Film</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <!-- Navigasi Kembali ke Daftar Item -->
        <a href="{{ route('film.daftar') }}" class="btn btn-secondary mb-4">&larr; Kembali ke Daftar Film</a>
        
        <div class="row bg-white p-4 rounded shadow-sm align-items-center">
            <div class="col-md-4 text-center">
                <img src="{{ $film['gambar'] }}" class="img-fluid rounded shadow" alt="{{ $film['judul'] }}" style="max-height: 500px;">
            </div>
            <div class="col-md-8">
                <h1 class="fw-bold text-dark">{{ $film['judul'] }}</h1>
                <hr>
                <p><strong>Genre:</strong> <span class="badge bg-danger">{{ $film['genre'] }}</span></p>
                <p><strong>Tahun Rilis:</strong> {{ $film['tahun'] }}</p>
                <h5 class="mt-4 fw-bold">Sinopsis / Deskripsi:</h5>
                <p class="text-secondary" style="line-height: 1.8;">{{ $film['deskripsi'] }}</p>
                
                <div class="mt-4">
                    <a href="{{ route('film.daftar') }}" class="btn btn-danger px-4">Kembali ke Katalog</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>