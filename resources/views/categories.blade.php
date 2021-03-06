@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3 fw-bold">Categories</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/random/500x500?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <a href="/posts?category={{ $category->slug }}" class="text-white text-decoration-none fw-bold">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $category->slug }}" class="text-white text-decoration-none fw-bold">{{ $category->name }}</a></h5>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
