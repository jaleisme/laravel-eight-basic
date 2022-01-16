@extends('layouts.main')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="fw-bold">{{ $post->title }}</h2>
            {{-- <h5>By: {{ $post["author"] }}</h5> --}}
            <p>By <a class="text-decoration-none text-dark fw-bold" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none text-dark fw-bold" href="/category/{{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></p>
            <img src="https://source.unsplash.com/random/1200x300?{{ $post->postCategory->name }}" class="card-img-top" alt="{{ $post->postCategory->name }}">
            <article class="my-3">
                <p>{!! $post->body !!}</p>
            </article>

            <a class="btn btn-sm btn-dark" href="/posts">Back to posts</a>
        </div>
    </div>
</div>
@endsection


