<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptOrRefuseMail extends Mailable
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
        return $this->from("contact@fortifietoi.ci", "Administrateur Fortifie toi")
            ->subject($this->event->subject)
            ->to($this->event->receiver)
            ->markdown('emails.AcceptOrRefuse')->with([
                'user' => $this->event->user,
                'is_enable' => $this->event->is_enable,
            ]);
    }
}
