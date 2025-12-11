@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Tambah Data Mahasiswa</h2>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('insertdata') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="name" id="nama" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" name="nim" id="nim" class="form-control" value="{{ old('nim') }}">
        </div>
        <div class="mb-3">
          <label for="prodi" class="form-label">Program Studi</label>
          <input type="text" name="prodi" id="prodi" class="form-control" value="{{ old('prodi') }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
          <label for="nohp" class="form-label">No. HP</label>
          <input type="text" name="nohp" id="nohp" class="form-control" value="{{ old('nohp') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
@endsection
