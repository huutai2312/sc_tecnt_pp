<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\Otp;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Session;
    use Carbon\Carbon;
    use App\Mail\OtpMail;

    class OtpController extends Controller
    {
        public function showOtpForm()
        {
            $userId = Session::get('user_id');
            $user = User::find($userId);

            if ($user && $user->email_verified_at) {
                return redirect()->route('dashboard');
            }

            return view('auth.otp');
        }

        public function verifyOtp(Request $request)
        {
            $request->validate([
                'otp' => 'required|numeric|digits:6',
            ]);

            $userId = Session::get('user_id');

            $otpRecord = Otp::where('user_id', $userId)->where('otp', $request->otp)->first();

            if ($otpRecord && Carbon::parse($otpRecord->created_at)->addMinutes(15)->isFuture()) {
                $user = User::find($userId);
                $user->email_verified_at = now();
                $user->save();

                $otpRecord->delete();

                return redirect()->route('dashboard');
            }

            return redirect()->back()->withErrors(['otp' => 'The OTP is invalid or has expired.']);
        }

        public function resendOtp(Request $request)
        {
            $userId = Session::get('user_id');
            $user = User::find($userId);

            if ($user && $user->email_verified_at) {
                return redirect()->route('dashboard')->withErrors(['otp' => 'Your account is already verified.']);
            }

            if (!$user) {
                return redirect()->back()->withErrors(['user' => 'User not found.']);
            }

            // Generate a new OTP code
            $otpCode = random_int(100000, 999999);
            Otp::updateOrCreate(
                ['user_id' => $userId],
                ['otp' => $otpCode]
            );

            Mail::to($user->email)->send(new OtpMail($otpCode));

            return redirect()->back()->with(['message' => 'A new OTP has been sent to your email.']);
        }
    }
