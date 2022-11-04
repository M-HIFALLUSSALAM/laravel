@extends('layout.main')

@section('container')

<h1 class="m-5">Post Categories</h1>

<div class="container-fluid">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
              <div class="card text-bg-dark">
                <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center">
                  <h5 class="card-title flex-fill text-center fs-3">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
            </div>
        @endforeach
    </div>
</div>


@endsection
