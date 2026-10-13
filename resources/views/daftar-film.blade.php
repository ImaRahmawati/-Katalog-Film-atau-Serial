<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film - Katalog Avengers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar / Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ route('beranda') }}">Avengers Katalog</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                <a class="nav-link active" href="{{ route('film.daftar') }}">Daftar Film</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Daftar Koleksi Film</h2>
        <div class="row">
            @foreach($films as $f)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $f['gambar'] }}" class="card-img-top" alt="{{ $f['judul'] }}" style="height: 400px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $f['judul'] }}</h5>
                            <p class="text-muted small mb-1"><strong>Genre:</strong> {{ $f['genre'] }}</p>
                            <p class="text-muted small mb-3"><strong>Tahun Rilis:</strong> {{ $f['tahun'] }}</p>
                            <p class="card-text text-truncate">{{ $f['deskripsi'] }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('film.detail', $f['slug']) }}" class="btn btn-outline-danger w-100">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>