<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApproveParcelRequest extends Notification
{
    use Queueable;

    private $parcel;

    public function __construct($parcel)
    {
        $this->parcel=$parcel;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello, '.$this->parcel->shop->shop_name)
            ->subject('Parcel Status')
            ->line('Your parcel is now in '.$this->parcel->location->name.' state')
            ->line('Your parcel tracking id '.$this->parcel->track_id)
            ->line('Thank you for using our service!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
