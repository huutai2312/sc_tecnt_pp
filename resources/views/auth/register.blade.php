@extends('layouts.only-content')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo.webp') }}" alt="img" width="100px">
                            </a>
                        </div>
                        <div class="saprator my-3"></div>
                        <h4 class="text-center f-w-500 mb-3">Sign up</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Display name" name="name"
                                       value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                       value="{{ old('username') }}">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" name="email"
                                       value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                       name="password_confirmation">
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="checkTerm"
                                           checked="" required>
                                    <label class="form-check-label text-muted" for="checkTerm">
                                        I agree to all the <a href="#!">Terms & Condition</a>
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
                            </div>
                        </form>

                        <div class="d-flex justify-content-between align-items-end mt-4"><h6 class="f-w-500 mb-0">
                                Already
                                have an Account?</h6><a href="{{ route('login') }}" class="link-primary">Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
