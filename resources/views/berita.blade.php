@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="card card-custom p-4">
    <h3 class="mb-4">Berita Terbaru</h3>

    @php
        $daftarBerita = [
            [
                'judul' => 'Perubahan Kurikulum 2025',
                'isi' => 'Pemerintah mengumumkan perubahan kurikulum nasional yang akan berlaku mulai tahun ajaran depan. Fokus pada teknologi dan literasi digital.'
            ],
            [
                'judul' => 'Inovasi Teknologi Hijau',
                'isi' => 'Startup meluncurkan teknologi ramah lingkungan yang mampu mengurangi polusi dan limbah industri.'
            ],
            [
                'judul' => 'Festival Budaya Lokal',
                'isi' => 'Festival budaya digelar dengan pertunjukan seni tradisional, kuliner khas, dan bazar UMKM.'
            ],
        ];
    @endphp

    @foreach ($daftarBerita as $berita)
        <div class="mb-4 p-3 border rounded bg-light">
            <h5>{{ $berita['judul'] }}</h5>
            <p>{{ $berita['isi'] }}</p>
            <a href="#" class="btn btn-sm btn-primary">Read More</a>
        </div>
    @endforeach
</div>
@endsection
