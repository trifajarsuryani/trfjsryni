<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $mhs->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{ $mhs->prodi }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $mhs->email }}">
        </div>

        <div class="mb-3">
            <label class="form-label">No. HP</label>
            <input type="text" name="nohp" class="form-control" value="{{ $mhs->nohp }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('mahasiswa') }}" class="btn btn-secondary">Batal</a>

    </form>
</div>

</body>
</html>
