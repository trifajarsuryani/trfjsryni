<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Mahasiswa')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body { background-color: #f4f6f9; }
        .navbar-custom {
            background: linear-gradient(90deg, #0f172a, #1e293b);
            border-radius: 14px;
            margin: 20px;
            padding: 12px 24px;
            color: white;
        }
        .card-custom { border-radius: 18px; }
        .nav-link {
            color: #e5e7eb !important;
            margin-right: 10px;
        }
        .nav-link:hover {
            color: #ffffff !important;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-custom d-flex justify-content-between">
    <span class="fw-bold fs-5">Laravel Mahasiswa</span>

    <div class="d-flex align-items-center">
        <!-- MENU PUBLIK -->
        <a href="{{ route('home') }}" class="nav-link">Home</a>
        <a href="{{ route('berita') }}" class="nav-link">Berita</a>
        <a href="{{ route('profile') }}" class="nav-link">Profil</a>
        <a href="{{ route('contact') }}" class="nav-link">Contact</a>

        @auth
            <!-- JIKA LOGIN -->
            <span class="me-3 ms-3 fw-semibold">{{ Auth::user()->name }}</span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="button" onclick="confirmLogout()" class="btn btn-outline-light btn-sm">
                    Logout
                </button>
            </form>
        @else
            <!-- JIKA BELUM LOGIN -->
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm ms-3">Login</a>
        @endauth
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function confirmLogout() {
    Swal.fire({
        title: 'Logout?',
        text: 'Kamu akan keluar dari akun',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
}
</script>

</body>
</html>
