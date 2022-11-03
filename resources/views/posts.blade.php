@extends('layout.main')

@section('container')

<h2 class="m-5">{{ $title }}</h2>

@if ($posts->count())

<div class="card mb-3 m-5">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>

    <p>
      <small class="text-muted">
        By. <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> In <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small>
    </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-outline-primary">read More</a>
      
    </div>
</div>

@else
    <p class="text-center fs-4">No Post Found.</p>
@endif


<div class="container-fluid">
  <div class="row m-4">

@foreach ($posts->skip(1) as $post)

    <div class="col-md-4 mb-3">

      <div class="card">
        <div class="position-absolute p-2 text-white rounded" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts/{{ $post->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
        <img src="https://source.unsplash.com/500x350?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small class="text-muted">
              By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>

    </div>

@endforeach

  </div>
</div>


@endsection
