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
                        <div class="mb-4">
                            <h3 class="mb-2"><b>Enter Verification Code</b></h3>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="auth-5" role="tabpanel" aria-labelledby="auth-tab-5">
                                <form action="{{ route('otp.verify') }}" method="POST">
                                    @csrf
                                    <div class="row my-4 text-center">
                                        <div class="col">
                                            <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                                            <input type="number" class="form-control text-center code-input"
                                                   placeholder="000000" name="otp" maxlength="6"
                                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary auth-conf">Continue</button>
                                    </div>
                                </form>
                                <div class="saprator my-3"></div>
                                <form action="{{ route('otp.resend') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-sm btn-light-secondary auth-conf">Resend OTP</button>
                                    </div>
                                </form>
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('message'))
                                    <div>{{ session('message') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
