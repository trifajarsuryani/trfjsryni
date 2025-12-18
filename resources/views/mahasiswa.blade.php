<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Data Mahasiswa</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Data -->
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
        + Tambah Data
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark text-white">
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
                @forelse($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->name }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ $mhs->nohp }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning text-white">
                            Edit
                        </a>

                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin dihapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Data mahasiswa belum tersedia</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
