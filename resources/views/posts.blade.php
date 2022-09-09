@extends('layout.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5 p-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <p>By: {{ $post["author"] }}</p>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection
