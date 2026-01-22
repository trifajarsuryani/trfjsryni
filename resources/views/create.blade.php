@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="card card-custom p-4">
    <h4 class="mb-3">Tambah Mahasiswa</h4>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <input class="form-control mb-2" name="name" placeholder="Nama" required>
        <input class="form-control mb-2" name="email" placeholder="Email" required>
        <input class="form-control mb-2" name="nim" placeholder="NIM" required>
        <input class="form-control mb-2" name="prodi" placeholder="Prodi" required>
        <input class="form-control mb-3" name="nohp" placeholder="No HP" required>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
