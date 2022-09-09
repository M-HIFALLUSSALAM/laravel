
@extends('layout.main')

@section('container')

    <h1>Halaman about</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="burung1.jpg" width="200">
@endsection
