@extends('layouts.app')

@section('title', 'Edit Data Mahasiswa')

@section('content')
<div class="card card-custom p-4">
    <h4 class="mb-4">Edit Data Mahasiswa</h4>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control"
                   value="{{ $mahasiswa->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                   value="{{ $mahasiswa->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control"
                   value="{{ $mahasiswa->nim }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" class="form-control"
                   value="{{ $mahasiswa->prodi }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="nohp" class="form-control"
                   value="{{ $mahasiswa->nohp }}" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
