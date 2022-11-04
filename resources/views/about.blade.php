
@extends('layout.main')

@section('container')

<div class="container-fluid">
    <div class="row">
        <div class="col col-md-8 text-center offset-md-2 shadow rounded p-5" style="background-color: rgba(255, 255, 0, 0.527)">

            <h1>Halaman about</h1>
            <h3>{{ $nama }}</h3>
            <p>{{ $bio }}</p>
            <p>{{ $email }}</p>
            <img src="img/{{ $image }}" alt="burung1.jpg" class="img-fluid">

        </div>
    </div>


</div>
@endsection
