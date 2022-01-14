@extends('layouts.main')

@section('content')
    <div class="row border-bottom mb-3">
        <div class="col-12">
            <h1 class="mb-3 fw-bold">Posts</h1>
        </div>
    </div>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a class="text-decoration-none text-dark fw-bold" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>By <a class="text-decoration-none text-dark fw-bold" href="">{{ $post->user->name }}</a> in <a class="text-decoration-none text-dark fw-bold" href="/category/{{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></p>
        {{-- <h5>By: {{ $post["author"] }}</h5> --}}
        <p>{{ $post->excerpt }}...</p>
        <a class="btn btn-sm btn-dark" href="/posts/{{ $post->slug }}">Read more</a>
    </article>
    @endforeach
@endsection

