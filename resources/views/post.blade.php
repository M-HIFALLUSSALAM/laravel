@extends('layout.main')

@section('container')

<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, et explicabo. Hic eligendi aut itaque modi odio blanditiis ullam ratione quos aperiam. Impedit recusandae illo sequi ducimus tempore! Explicabo, rem.</p>
</article>

<a href="/blog">Back to Posts</a>

@endsection