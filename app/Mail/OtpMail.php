<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class OtpMail extends Mailable
    {
        use Queueable, SerializesModels;

        public $user;

        public function __construct($user)
        {
            $this->user = $user;
        }

        public function build()
        {
            $url = url('/verify-email/' . $this->user->email_verification_token);

            return $this->view('emails.otp')
                ->subject('Email Verification')
                ->with([
                    'url' => $url,
                ]);
        }
    }
