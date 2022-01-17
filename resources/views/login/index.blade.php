@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
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
                <small class="text-muted">Doesn't have any account yet? <a href="/register" class="text-decoration-none text-dark fw-bold">Sign Up</a></small>
            </main>
        </div>
    </div>
</div>

@endsection

