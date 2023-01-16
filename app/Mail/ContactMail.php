<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Information contacts ";

    public $contentMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $contentMail )
    {
        $this->contentMail = $contentMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject . carbon::now())->view('site.mail.mail');
    }
}
