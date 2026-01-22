@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="card card-custom p-5">
    <h3 class="fw-bold mb-3">Hubungi saya</h3>

    <p class="text-muted">
        Jika Anda memiliki pertanyaan, saran, atau membutuhkan bantuan,
        jangan ragu untuk menghubungi saya melalui informasi di bawah ini.
    </p>

    <div class="row mt-4">
        <div class="col-md-6 mb-3">
            <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">📧 Email</h6>
                <p class="mb-0">trifajarsuryani47@gmail.com</p>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="border rounded p-3 h-100">
                <h6 class="fw-bold">📞 Telepon</h6>
                <p class="mb-0">0831-2970-1641</p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="border rounded p-3">
                <h6 class="fw-bold">📍 Alamat</h6>
                <p class="mb-0">
                    Calabai, Dompu, Nusa Tenggara Barat, Indonesia
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
