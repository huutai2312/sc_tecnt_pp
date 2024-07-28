@extends('layouts.only-content')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="auth-header row">
                    <div class="col my-1">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/logo.webp') }}" alt="img" width="100px">
                        </a>
                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="auth-5" role="tabpanel" aria-labelledby="auth-tab-5">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('activation.resend') }}">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ request()->email ?? old('email') }}">
                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-primary">Resend Activation Link</button>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-center align-items-end mt-3">
                                    <a href="{{ route('login') }}" class="link-primary ms-2">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
