@extends('layouts.app')

@section('title', $title)

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">{{ $title }}</h1>
    <a href="{{ route('tambahmahasiswa') }}" class="btn btn-success">Tambah Data</a>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="card shadow-sm">
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mahasiswa as $mhs)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $mhs->name }}</td>
              <td>{{ $mhs->nim }}</td>
              <td>{{ $mhs->prodi }}</td>
              <td>{{ $mhs->email }}</td>
              <td>{{ $mhs->nohp }}</td>
              <td>
                <button class="btn btn-primary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

