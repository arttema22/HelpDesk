<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewTicket extends Mailable
{
    use Queueable, SerializesModels;

    public $mess;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mess)
    {
        $this->mess = $mess;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Новое обращение с сайта')
            ->view('emails.ticket.new', ['mess' => $this->mess]);
    }
}
