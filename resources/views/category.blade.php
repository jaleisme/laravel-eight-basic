@extends('layouts.main')

@section('content')
    <div class="row border-bottom mb-3">
        <div class="col-6">
            <h1 class="mt-5 mb-3 fw-bold">Category "{{ $category }}"</h1>
        </div>
        <div class="col-6 d-flex flex-col justify-content-end align-items-center">
            <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a class="text-decoration-none text-dark fw-bold" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>By <a class="text-decoration-none text-dark fw-bold" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none text-dark fw-bold" href="/category/{{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></p>
        {{-- <h5>By: {{ $post["author"] }}</h5> --}}
        <p>{{ $post->excerpt }}...</p>
        <a class="btn btn-sm btn-dark" href="/posts/{{ $post->slug }}">Read more</a>
    </article>
    @endforeach
@endsection
