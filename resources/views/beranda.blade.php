<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Katalog Film Avengers</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container text-center py-5 mt-5">
        <h1 class="display-4 fw-bold text-danger">Katalog Film & Serial Avengers</h1>
        <p class="lead text-secondary">Marvel Cinematic Universe - Koleksi Film Avengers Terlengkap</p>
        <p class="col-lg-8 mx-auto fs-5">Selamat datang di web katalog film. Temukan informasi lengkap mengenai film-film epik pahlawan super favorit Anda di sini.</p>
        <div class="mt-4">
            <a href="{{ route('film.daftar') }}" class="btn btn-danger btn-lg px-4 gap-3">Lihat Daftar Film</a>
        </div>
    </div>
</body>
</html>