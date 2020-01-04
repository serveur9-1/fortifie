<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ArticleEnableOrDisableMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("noreply@fortifietoi.ci", "Administrateur Fortifie toi")
            ->subject($this->event->subject)
            ->to($this->event->receiver)
            ->markdown('emails.enableOrDisable')->with([
                'titre' => $this->event->titre,
                'gestionnaire' => $this->event->gestionnaire,
                'is_enable' => $this->event->is_enable,
                'img' => $this->event->img,
                'user' => $this->event->user,
                'url' => $this->event->url
            ]);
    }
}
