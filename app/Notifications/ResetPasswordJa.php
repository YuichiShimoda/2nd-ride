<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordJa extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $resetUrl = url(config('app.url') . route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));

        return (new MailMessage)
            ->subject('【 パスワードリセット 】管理画面')
            ->line('本メールは、パスワードリセットのリクエストに基づいて送信されています。')
            ->line('「 パスワードをリセットする 」のボタンを押し、パスワードの再設定をおこなってください。')
            ->action('パスワードをリセットする', $resetUrl)
            ->line('パスワードリセット用リンクの有効期限は、メール受信後60分間です。');
    }
}
