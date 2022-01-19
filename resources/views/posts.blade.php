@extends('layouts.main')

@section('content')
<section class="old-post">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center fw-bold">{{ $title }}</h1>
            </div>
            <div class="col-md-6 my-3">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search post..." aria-label="Search post..." aria-describedby="button-addon2" name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if($posts->count())
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/random/1200x300?{{ $posts[0]->postCategory->name }}" class="card-img-top" alt="{{ $posts[0]->postCategory->name }}">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a class="text-decoration-none text-dark fw-bold" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                        <small class="text-muted">
                            <p>By <a class="text-decoration-none text-dark fw-bold" href="/posts?user={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none text-dark fw-bold" href="/posts?category={{ $posts[0]->postCategory->slug }}">{{ $posts[0]->postCategory->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text">{{ $posts[0]->excerpt }}...</p>
                        <a class="btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.5)"><a class="text-white text-decoration-none" href="/posts?category={{ $post->postCategory->slug }}">{{ $post->postCategory->name }}</a></div>
                    <img src="https://source.unsplash.com/random/500x400?{{ $post->postCategory->name }}" class="card-img-top" alt="{{ $post->postCategory->name }}">
                    <div class="card-body">
                        <h3>
                            <a class="text-decoration-none text-dark fw-bold" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h3>
                        <small class="text-muted">
                            <p>By <a class="text-decoration-none text-dark fw-bold" href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-4">
                        <a class="btn btn-primary" href="/posts/{{ $post->slug }}">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
</section>
@endsection

