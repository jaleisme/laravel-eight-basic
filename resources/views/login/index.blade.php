@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin text-center">
                <h1 class="h3 mb-3 fw-bold">Sign In</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-md btn-dark" type="submit">Sign In</button>
                </form>
                <div class="mt-2">
                    <small class="text-muted">Doesn't have any account yet? <a href="/register" class="text-decoration-none text-dark fw-bold">Sign Up</a></small>
                </div>
            </main>
        </div>
    </div>
</div>

@endsection

