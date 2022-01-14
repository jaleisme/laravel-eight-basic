@extends('layouts.main')

@section('content')
<article>
    <h2 class="fw-bold">{{ $post->title }}</h2>
    {{-- <h5>By: {{ $post["author"] }}</h5> --}}
    <p>By <a class="text-decoration-none text-dark fw-bold" href="">{{ $post->user->name }}</a> in <a class="text-decoration-none text-dark fw-bold" href="/category/{{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></p>
    <p>{!! $post->body !!}</p>
</article>

<a class="btn btn-sm btn-dark" href="/posts">Back to posts</a>
@endsection


