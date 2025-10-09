@extends('layouts.app')

@section('title', 'Profile')

@section('content')
  <div class="container page profile-page">
    <h2>Profil Pengguna</h2>
    <div class="profile-wrapper">
      <!-- Foto Profil -->
      <div class="profile-photo">
        <img src="{{ asset('Ecayyy.jpg') }}" alt="Foto Profil Tri Fajar Suryani">
      </div>

      <!-- Info Profil -->
      <div class="profile-info">
        <p><strong>Nama:</strong> Tri Fajar Suryani</p>
        <p><strong>Email:</strong> trifajarsuryani@gmail.com</p>
        <p><strong>Deskripsi:</strong> saya mampu merasakan apa yang dirasakan orang lain, mau mendengarkan dengan penuh perhatian, dan tidak ragu membantu ketika melihat orang lain kesusahan.</p>
      </div>
    </div>
  </div>
@endsection
