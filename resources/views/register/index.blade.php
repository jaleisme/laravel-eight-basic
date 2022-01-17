@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <main class="form-registration text-center">
                <h1 class="h3 mb-3 fw-bold">Sign Up</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input value="{{ old('name') }}" required type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="E.g. John Doe" name="name">
                        <label for="name">Full Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input value="{{ old('username') }}" required type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="E.g. itsjohndoe" name="username">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input value="{{ old('email') }}" required type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="password" class="form-control rounded-bottom mb-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-md btn-dark" type="submit">Sign Up</button>
                </form>
                <small class="text-muted">Already registered? <a href="/login" class="text-decoration-none text-dark fw-bold">Sign In</a></small>
            </main>
        </div>
    </div>
</div>

@endsection

