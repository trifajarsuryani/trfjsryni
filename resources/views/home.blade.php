@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card card-custom p-5 text-center">
    <h1 class="fw-bold mb-3">Selamat Datang 👋</h1>

    <p class="text-muted fs-5">
        Website ini dibuat sebagai media informasi dan pengelolaan data mahasiswa
        dengan tampilan sederhana, modern, dan mudah digunakan.
    </p>

    <hr class="my-4">

    <p class="mb-4">
        Jelajahi berbagai halaman yang tersedia untuk mengetahui lebih banyak
        tentang kami dan informasi terbaru.
    </p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="{{ route('berita') }}" class="btn btn-primary px-4">
            📰 Berita
        </a>
        <a href="{{ route('profile') }}" class="btn btn-secondary px-4">
            👤 Profil
        </a>
        <a href="{{ route('contact') }}" class="btn btn-info text-white px-4">
            📞 Contact
        </a>
    </div>
</div>
@endsection
