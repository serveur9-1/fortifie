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
/*        return $this->from("contact@fortifietoi.ci", "L'équipe Fortifie toi")
                    ->subject("Nouvelle annonce publiée")
                    ->to("ymjm97@gmail.com")
                    ->markdown('emails.newsletter');*/


        return $this->from(explode(",", $this->event->suscribers), "L'équipe Fortifie toi")->subject("Nouvelle annonce récommandée pour vous")->to("ymjm97@gmail.com")
            ->markdown('emails.newsletter');
    }
}
