<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use App\Models\UserDetail;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Str;

    class RegisterController extends Controller
    {
        public function showRegistrationForm()
        {
            return view('auth.register');
        }

        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:user_details,username',
                'email' => 'required|string|email|max:255|unique:users,email|regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
                'password' => 'required|string|min:8|confirmed',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $token = Str::random(60);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(10),
                'email_verification_token' => $token,
            ]);

            UserDetail::create([
                'id_user' => $user->id,
                'username' => $request->username,
                'role' => 'member',
                'account_status' => 'inactive',
            ]);

            $token = Str::random(60);
            $user->email_verification_token = $token;
            $user->save();

            $verificationLink = route('verify.email', ['token' => $token]);

            Mail::send('emails.verify', ['link' => $verificationLink], function($message) use ($user) {
                $message->to($user->email);
                $message->subject('Verify Your Email Address');
            });

            session()->flash('success', 'Registration successful. Please check your email for verification link.');
            return view('auth.check-mail');
        }

        public function verifyEmail($token)
        {
            $user = User::where('email_verification_token', $token)->first();

            if (!$user) {
                session()->flash('error', 'Invalid verification token.');
                return view('auth.invalid-token');
            }

            $user->email_verified_at = now();
            $user->email_verification_token = null;
            $user->save();

            $userDetail = UserDetail::where('id_user', $user->id)->first();
            if ($userDetail) {
                $userDetail->account_status = 'active';
                $userDetail->save();
            }

            session()->flash('success', 'Your email has been verified successfully.');
            return view('auth.email-verified');
        }
    }
