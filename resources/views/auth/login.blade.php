@extends('layouts.only-content')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center"><a href="{{ route('home') }}"><img
                                    src="{{ asset('assets/images/logo/logo.webp') }}"
                                    alt="img" width="100px"></a>
                            <div class="d-grid my-3">
                                <button disabled type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                    <img
                                        src="https://ableproadmin.com/assets/images/authentication/google.svg"
                                        alt="img"> <span>Sign In with Google</span>
                                </button>
                            </div>
                        </div>
                        <div class="saprator my-3"><span>OR</span></div>
                        <h4 class="text-center f-w-500 mb-3">Login with your email</h4>
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                        @if($errors->has('password'))
                            <div class="alert alert-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="loginEmail"
                                       placeholder="Email Address" name="email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="loginPass"
                                       placeholder="Password" name="password" required>
                            </div>
                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <h6 class="text-secondary f-w-400 mb-0">
                                    <a href="{{route('password.request')}}">Forgot Password?</a>
                                </h6>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
                                <a href="{{ route('register') }}" class="link-primary">Create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
