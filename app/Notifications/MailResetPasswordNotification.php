<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)

                     ->subject('Réinitialisation du mot de passe')

                    ->greeting('Bonjour,')

                    ->line('Vous recevez cet e-mail, car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.')

                    ->action('Réinitialiser le mot de passe', url(config('app.url').route('password.reset.token', $this->token, false)))

                    ->line('Si vous n\'avez pas demandé de réinitialisation de mot de passe, aucune
                        autre action n\'est requise.', url(config('app.url').route('password.reset.token', $this->token, false)))
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
