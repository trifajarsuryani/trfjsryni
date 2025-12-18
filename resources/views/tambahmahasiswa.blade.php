<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Tambah Data Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <!-- Nama -->
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Mahasiswa">
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- NIM -->
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
            @error('nim')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Studi -->
        <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <input type="text" name="prodi" class="form-control" placeholder="Masukkan Program Studi">
            @error('prodi')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="name@example.com">
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- No HP -->
        <div class="mb-3">
            <label class="form-label">No. HP</label>
            <input type="text" name="nohp" class="form-control" placeholder="08xxxxxxxxxx">
            @error('nohp')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('mahasiswa') }}" class="btn btn-secondary">Kembali</a>

    </form>
</div>

</body>
</html>
