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
                            <h3 class="mb-0"><b>Change Password</b></h3>
                            <a href="{{ route('dashboard') }}" class="link-primary">Dashboard</a>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Old Password</label>
                                <input type="password" class="form-control" name="old-password"
                                       placeholder="Enter Old Password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" name="new-password"
                                       placeholder="Enter New Password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" name="cnofirm-new-password"
                                       placeholder="Confirm New Password" required>
                            </div>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
