<?php

    namespace App\Notifications;

    use Illuminate\Bus\Queueable;
    use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Notifications\Messages\MailMessage;

    class ResetPassword extends ResetPasswordNotification
    {
        use Queueable;

        public function toMail($notifiable)
        {
            $url = url(route('password.reset', [
                'token' => $this->token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));

            return (new MailMessage)
                ->subject('Reset Password Notification')
                ->line('You are receiving this email because we received a password reset request for your account.')
                ->action('Reset Password', $url)
                ->line('If you did not request a password reset, no further action is required.');
        }
    }
