<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\Auth\PasswordController;

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::get('activation-notice', [LoginController::class, 'showActivationNotice'])->name('activation.notice');
    Route::post('resend-activation-link', [LoginController::class, 'resendActivationLink'])->name('activation.resend');

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/verify-email/{token}', [RegisterController::class, 'verifyEmail'])->name('verify.email');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::fallback(function () {
        return view('error.404');
    });

    Route::get('forgot-password', [PasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('reset-password/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [PasswordController::class, 'reset'])->name('password.update');

    Route::get('change-password', function () {
        return view('auth.change-password');
    })->name('change-password');

    Route::get('profile', function () {
        return view('dashboard.profile');
    })->name('profile');

    Route::prefix('social-unlocks')->middleware('auth')->group(function () {
        Route::get('create', function () {
            return view('social-unlock.create');
        })->name('social-unlock.create');
    });
