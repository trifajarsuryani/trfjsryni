@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card card-custom p-4">
            <h4 class="mb-3 text-center">Register</h4>

            <form action="{{ route('register.process') }}" method="POST">
                @csrf

                <input class="form-control mb-3" name="name" placeholder="Nama" required>
                <input class="form-control mb-3" type="email" name="email" placeholder="Email" required>
                <input class="form-control mb-3" type="password" name="password" placeholder="Password" required>

                <button class="btn btn-success w-100">Daftar</button>
            </form>

            <p class="text-center mt-3">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection
