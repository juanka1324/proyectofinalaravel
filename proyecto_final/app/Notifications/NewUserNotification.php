<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserNotification extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('¡Bienvenido a nuestra tienda en línea!')
            ->greeting('Hola ' . $notifiable->name . '!')
            ->line('Gracias por registrarte en nuestra tienda en línea.')
            ->line('Esperamos que disfrutes de tu experiencia de compra.')
            ->action('Ir a la tienda', url('/'))
            ->line('Gracias por elegirnos.');
    }
}