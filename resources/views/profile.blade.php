@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-custom p-4">
            <h3 class="mb-4 text-center">Profil Pengguna</h3>

            @auth
                <div class="text-center mb-4">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0f172a&color=fff&size=120"
                         alt="Foto Profil"
                         class="rounded-circle shadow"
                         style="width:120px;height:120px;object-fit:cover;">
                </div>

                <table class="table table-borderless">
                    <tr>
                        <th width="35%">Nama</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Bergabung Sejak</th>
                        <td>{{ Auth::user()->created_at->format('d M Y') }}</td>
                    </tr>
                </table>

                <div class="text-center mt-4">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary px-4">
                        Ke Dashboard
                    </a>
                </div>
            @else
                <div class="text-center">
                    <img src="Ecayyy.jpg"
                         width="90" 
                         class="mb-3"
                         alt="User">

                    <p class="text-muted">
                        Halaman ini menampilkan informasi profil pengguna.<br>
                        Silakan login untuk melihat detail akun Anda.
                    </p>

                    <a href="{{ route('login') }}" class="btn btn-outline-primary">
                        Login Sekarang
                    </a>
                </div>
            @endauth
        </div>
    </div>
</div>
@endsection
