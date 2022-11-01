
@extends('layout.main')

@section('container')

<div class="container-fluid">
    <div class="row">
        <div class="col col-md-8 text-center offset-md-2 shadow boder-rounded p-5">

            <h1>Halaman about</h1>
            <h3>{{ $nama }}</h3>
            <p>{{ $bio }}</p>
            <p>{{ $email }}</p>
            <img src="img/{{ $image }}" alt="burung1.jpg" class="img-fluid">

        </div>
    </div>


</div>
@endsection
