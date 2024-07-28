<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Password;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
    use App\Models\User;
    use App\Models\UserDetail;

    class PasswordController extends Controller
    {
        public function showLinkRequestForm()
        {
            return view('auth.forgot-password');
        }

        public function sendResetLinkEmail(Request $request)
        {
            $request->validate(['email' => 'required|email']);

            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
        }

        public function showResetForm(Request $request, $token = null)
        {
            return view('auth.reset-password')->with(
                ['token' => $token, 'email' => $request->email]
            );
        }

        public function reset(Request $request)
        {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);

            // Check if the token is valid
            $tokenData = DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->where('token', $request->token)
                ->first();

            if (!$tokenData || Carbon::parse($tokenData->created_at)->addMinutes(60)->isPast()) {
                // Token is invalid or expired
                return view('error.404')->with('error', 'This password reset token is invalid or has expired.');
            }

            // Proceed with password reset
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),
                    ])->save();

                    // Optionally, you can use Laravel's session flush
                    \Auth::logout();
                    \Session::flush();
                }
            );

            return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
        }
    }
