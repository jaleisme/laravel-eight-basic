@extends('layouts.main')

@section('content')
    @if($posts->count())
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4 fw-bold">{{ $title }}</h1>
                <div class="card mb-4">
                    <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.5)"><a class="text-white text-decoration-none" href="/category/{{ $posts[0]->postCategory->slug }}">{{ $posts[0]->postCategory->name }}</a></div>
                    <img src="https://source.unsplash.com/random/1200x300?{{ $posts[0]->postCategory->name }}" class="card-img-top" alt="{{ $posts[0]->postCategory->name }}">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a class="text-decoration-none text-dark fw-bold" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                        <small class="text-muted">
                            <p>By <a class="text-decoration-none text-dark fw-bold" href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none text-dark fw-bold" href="/category/{{ $posts[0]->postCategory->slug }}">{{ $posts[0]->postCategory->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text">{{ $posts[0]->excerpt }}...</p>
                        <a class="btn btn-dark" href="/posts/{{ $posts[0]->slug }}">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.5)"><a class="text-white text-decoration-none" href="/category/{{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></div>
                    <img src="https://source.unsplash.com/random/500x400?{{ $post->postCategory->name }}" class="card-img-top" alt="{{ $post->postCategory->name }}">
                    <div class="card-body">
                        <h3>
                            <a class="text-decoration-none text-dark fw-bold" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h3>
                        <small class="text-muted">
                            <p>By <a class="text-decoration-none text-dark fw-bold" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a class="btn btn-dark" href="/posts/{{ $post->slug }}">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
@endsection

