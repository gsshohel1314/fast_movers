<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreateParcelRequest extends Notification implements ShouldQueue
{
    use Queueable;
    private $parcelCreate;

    public function __construct($parcelCreate)
    {
        $this->parcelCreate=$parcelCreate;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello, Admin!')
            ->subject('New request has arrived')
            ->line('New Parcel request has arrived')
            ->line('This request come from '.$this->parcelCreate->cous_name)
            ->line('Thank you for using our service!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
