@extends('layout.main')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ $post->title }}</h2>

            <p>By. <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> In <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="">
            
            <article class="my-3">
                {!! $post->body !!}
            </article>

            <a href="/blog">Back to Posts</a>
        </div>
    </div>
</div>



@endsection