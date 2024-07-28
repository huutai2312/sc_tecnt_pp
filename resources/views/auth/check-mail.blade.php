@extends('layouts.only-content')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/logo.webp') }}"
                                 width="100px"
                                 class="mb-4 img-fluid" alt="img">
                        </a>
                        <div class="mb-4"><h3 class="mb-2"><b>Hi, Check Your Mail</b></h3>
                            <p class="text-muted">We have sent the account activation link to your email.</p></div>
                        <div class="d-grid mt-3">
                            <a type="button" class="btn btn-primary" href="{{ route('login') }}">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
