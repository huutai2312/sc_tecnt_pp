@extends('layouts.only-content')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body"><a href="{{ route('home') }}"><img
                                src="{{ asset('assets/images/logo/logo.webp') }}" width="100px"
                                class="mb-4 img-fluid" alt="img"></a>
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h3 class="mb-0"><b>Forgot Password</b></h3>
                            <a href="{{ route('login') }}" class="link-primary">Back to Login</a>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <p class="mt-4 text-sm text-muted">Do not forget to check SPAM box.</p>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary">Send Password Reset Email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
