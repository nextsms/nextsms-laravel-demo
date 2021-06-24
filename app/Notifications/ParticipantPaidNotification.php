<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\NextSms\NextSmsChannel;
use NotificationChannels\NextSms\NextSmsMessage;

class ParticipantPaidNotification extends Notification
{
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [NextSmsChannel::class];
    }

    public function toNextSms($notifiable)
    {
        return (new NextSmsMessage())
            ->content(date('c') . 'test message Your SMS message content ok');
    }
}
