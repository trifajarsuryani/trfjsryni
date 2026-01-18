@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow-sm">
        <div class="card-body">

            <h2 class="card-title text-center mb-4">Dashboard</h2>

            <p class="text-center">
                Selamat datang, <strong>{{ auth()->user()->name }}</strong>!
            </p>

            <p class="text-center">
                Kamu sudah berhasil login 👏
            </p>

            <div class="text-center mt-3">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">
                    Lihat Data Mahasiswa
                </a>
            </div>

        </div>  
    </div>

</div>
@endsection
