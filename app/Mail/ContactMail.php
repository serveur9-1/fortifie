<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        //
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->event->senderEmail, $this->event->senderName)->subject($this->event->subject)->to($this->event->email)
                    ->markdown('emails.contact')->with([
                'message' => $this->event->message,
                'sender' => $this->event->senderName,
                'subject' => $this->event->subject,
            ]);
    }

}
