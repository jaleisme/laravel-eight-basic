@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <main class="form-registration text-center">
                <h1 class="h3 mb-3 fw-bold">Sign Up</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" id="name" placeholder="E.g. John Doe" name="name">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" placeholder="E.g. itsjohndoe" name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom mb-3" id="password" placeholder="Password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-md btn-dark" type="submit">Sign Up</button>
                </form>
                <small class="text-muted">Already registered? <a href="/login" class="text-decoration-none text-dark fw-bold">Sign In</a></small>
            </main>
        </div>
    </div>
</div>

@endsection

