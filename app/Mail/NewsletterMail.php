<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
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

        //dd($this->event["suscribers"]);
        return $this->from("noreply@fortifietoi.ci", "L'équipe Fortifie-Toi")
            ->subject("Nouvelle annonce récommandée pour vous")
            ->to($this->event["suscribers"])
            ->markdown('emails.newsletter')->with([
                'id' => $this->event["id"],
                'email' => $this->event["suscribers"],
                'access_link' => $this->event["access_link"]
            ]);
    }
}
