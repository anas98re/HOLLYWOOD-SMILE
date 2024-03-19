<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;
use Kutia\Larafirebase\Messages\FirebaseMessage;

class AdminNotification extends Notification
{
    use Queueable;

    protected $title;
    protected $body;
    protected $fcmTokens;

    public function __construct($title,$body,$fcmTokens)
    {
        $this->title = $title;
        $this->body = $body;
        $this->fcmTokens = $fcmTokens;
    }

    public function via($notifiable)
    {
        return ['firebase'];
    }

    public function toFirebase($notifiable)
    {
        return (new FirebaseMessage)
                    ->withTitle($this->title)
                    ->withBody($this->body)
                    ->asNotification($this->fcmTokens);
    }

}
