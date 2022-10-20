@extends('layout.main')

@section('container')

    @foreach ($posts as $post)
        <article class="p-3 m-5 rounded shadow">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>By. Hifal In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read More...</a>
        </article>
    @endforeach

@endsection
