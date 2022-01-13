@extends('layouts.main')

@section('content')
<article>
    <h2>{{ $post->title }}</h2>
    {{-- <h5>By: {{ $post["author"] }}</h5> --}}
    <p>By Jale in <a href="/category/{{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></p>
    <p>{!! $post->body !!}</p>
</article>

<a href="/posts">back to posts</a>
@endsection


