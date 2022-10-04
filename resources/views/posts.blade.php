@extends('layout.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5 p-5">
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->body }}</p>
        </article>
    @endforeach

@endsection
