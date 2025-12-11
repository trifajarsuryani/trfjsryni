@extends('layouts/main')
@section('content') 
    <article>
        <h1>{{ $new_berita['title'] }}</h1>
        <p>Penulis: {{ $new_berita['author'] }}</p>
        <p>{{ $new_berita['content'] }}</p>
       <a href="{{ route('berita.index') }}">Kembali</a> 
    </article>


@endsection