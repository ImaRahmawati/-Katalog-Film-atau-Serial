<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    private $films = [
        [
            'slug' => 'the-avengers',
            'judul' => 'The Avengers',
            'genre' => 'Action, Sci-Fi',
            'tahun' => 2012,
            'deskripsi' => 'Nick Fury dari S.H.I.E.L.D. membentuk badan intelijen untuk merekrut para pahlawan super guna menyelamatkan bumi dari ancaman Loki.',
            'gambar' => 'https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg'
        ],
        [
            'slug' => 'avengers-age-of-ultron',
            'judul' => 'Avengers: Age of Ultron',
            'genre' => 'Action, Sci-Fi, Adventure',
            'tahun' => 2015,
            'deskripsi' => 'Tony Stark mencoba memulai program pemeliharaan perdamaian yang tidak berjalan sesuai rencana, memaksa para pahlawan super beraksi kembali.',
            'gambar' => 'https://upload.wikimedia.org/wikipedia/en/f/ff/Avengers_Age_of_Ultron_poster.jpg'
        ],
        [
            'slug' => 'avengers-infinity-war',
            'judul' => 'Avengers: Infinity War',
            'genre' => 'Action, Sci-Fi, Adventure',
            'tahun' => 2018,
            'deskripsi' => 'Para Avengers dan sekutu mereka harus bersedia mengorbankan segalanya untuk mengalahkan Thanos sebelum ia menghancurkan alam semesta.',
            'gambar' => 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SX300.jpg'
        ],
        [
            'slug' => 'avengers-endgame',
            'judul' => 'Avengers: Endgame',
            'genre' => 'Action, Sci-Fi, Drama',
            'tahun' => 2019,
            'deskripsi' => 'Setelah peristiwa dahsyat Infinity War, alam semesta berada di ambang kehancuran. Para Avengers bersatu kembali untuk membalikkan tindakan Thanos.',
            'gambar' => 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg'
        ],
        [
            'slug' => 'captain-america-civil-war',
            'judul' => 'Captain America: Civil War',
            'genre' => 'Action, Sci-Fi',
            'tahun' => 2016,
            'deskripsi' => 'Ketidaksepakatan politik memecah belah para Avengers menjadi dua kubu yang dipimpin oleh Steve Rogers dan Tony Stark.',
            'gambar' => 'https://m.media-amazon.com/images/M/MV5BMjQ0MTgyNjAxMV5BMl5BanBnXkFtZTgwNjUzMDkyODE@._V1_SX300.jpg'
        ],
        [
            'slug' => 'thor-ragnarok',
            'judul' => 'Thor: Ragnarok',
            'genre' => 'Action, Comedy, Sci-Fi',
            'tahun' => 2017,
            'deskripsi' => 'Thor dipenjara di sisi lain alam semesta dan harus berpacu dengan waktu untuk kembali menghentikan Ragnarok.',
            'gambar' => 'https://m.media-amazon.com/images/M/MV5BMjMyNDkzMzI1OF5BMl5BanBnXkFtZTgwODcxODg5MjI@._V1_SX300.jpg'
        ],
    ];

    // Halaman Beranda
    public function beranda() {
        return view('beranda');
    }

    // Halaman Daftar Item
    public function daftar() {
        return view('daftar-film', ['films' => $this->films]);
    }

    // Halaman Detail Item menggunakan Route Parameter
    public function detail($slug) {
        // Cari film berdasarkan slug
        $film = collect($this->films)->firstWhere('slug', $slug);

        if (!$film) {
            abort(404);
        }

        return view('detail-film', ['film' => $film]);
    }
}
