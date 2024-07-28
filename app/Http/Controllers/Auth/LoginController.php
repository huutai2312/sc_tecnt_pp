<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;
    use App\Models\UserDetail;
    use Illuminate\Support\Facades\Mail;
    use App\Mail\OtpMail;

    class LoginController extends Controller
    {
        public function showLoginForm()
        {
            return view('auth.login');
        }

        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return redirect()->back()->withErrors([
                    'email' => 'The account associated with this email address does not exist.',
                ])->withInput($request->except('password'));
            }

            if ($user) {
                // Kiểm tra trạng thái xác minh email
                if (is_null($user->email_verified_at)) {
                    session(['email' => $user->email]);
                    return redirect()->route('activation.notice')->with('warning', 'Your email is not verified.');
                }

                $userDetail = UserDetail::where('id_user', $user->id)->first();
                if ($userDetail && $userDetail->account_status != 'active' && is_null($user->email_verified_at)) {
                    session(['email' => $user->email]);

                    return redirect()->route('activation.notice')->with('warning', 'Your account is not active.');
                }
            }

            if (Auth::attempt($credentials) && $userDetail && $userDetail->account_status == 'active' && !is_null($user->email_verified_at)) {
                return redirect()->intended('dashboard');
            }

            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->except('password'));
        }

        public function showActivationNotice(Request $request)
        {
            return view('auth.activation-notice');
        }

        public function resendActivationLink(Request $request)
        {
            $email = session('email');

            if (!$email) {
                return redirect()->route('activation.notice')->with('error', 'Unable to send activation link.');
            }

            $user = User::where('email', $email)->first();

            if ($user) {
                // Tạo token mới nếu không có
                if (is_null($user->email_verification_token)) {
                    $token = Str::random(60);
                    $user->email_verification_token = $token;
                    $user->save();
                }

                // Gửi email với liên kết kích hoạt mới
                Mail::to($user->email)->send(new OtpMail($user));

                return redirect()->route('activation.notice')->with('success', 'A new activation link has been sent to your email address.');
            }

            return redirect()->route('activation.notice')->with('error', 'Unable to send activation link.');
        }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('home');
        }
    }
