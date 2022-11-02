@extends('layout.main')

@section('container')

<h2 class="m-5">{{ $title }}</h2>

@if ($posts->count())

<div class="card mb-3 m-5">
    <img src="..." class="card-img-top" alt="...">
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

@foreach ($posts as $post)
        <article class="p-3 m-5 rounded shadow">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read More...</a>
        </article>
    @endforeach

@endsection
