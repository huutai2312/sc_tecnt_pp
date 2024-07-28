@extends('layouts.home')

@section('content')
    <header id="home">
        <nav class="navbar navbar-expand-md navbar-light default">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img
                        src="{{asset('assets/images/logo/logo.webp')}}" alt="logo" width="80px"> </a>
                <div class="">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                        @auth
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="btn btn-outline-secondary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center"><h1 class="mb-4 wow fadeInUp" data-wow-delay="0.2s">Turn your
                        audience
                        into
                        <span class="hero-text-gradient" data-wow-delay="0.5s">followers</span></h1>
                    <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-md-8"><p class="text-muted f-16 mb-0">Turn your audience into followers by
                                letting them perform social actions before unlocking your content.</p>
                        </div>
                    </div>
                    <div class="my-4 my-sm-5 wow fadeInUp" data-wow-delay="0.4s">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="btn btn-primary me-2">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-secondary me-2">Register</a>
                            @endif
                        @endauth

                    </div>
                    <div class="row g-5 justify-content-center text-center wow fadeInUp" data-wow-delay="0.5s">

                        <div class="col-auto"><h5 class="mb-2"><small class="text-muted f-w-400">Users</small></h5><h4
                                class="mb-0">100+</h4></div>
                        <div class="col-auto"><h5 class="mb-2"><small class="text-muted f-w-400">Visits</small></h5><h4
                                class="mb-0">2.5k+</h4></div>
                    </div>
                </div>
            </div>
        </div>

    </header>

@endsection
