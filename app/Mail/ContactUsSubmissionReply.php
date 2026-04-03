<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsSubmissionReply extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $title;
    public $messageBody;
    public $ctaText;
    public $ctaLink;


    public function __construct($subject, $title, $messageBody, $ctaText = null, $ctaLink = null)
    {
        $this->subject = $subject;
        $this->title = $title;
        $this->messageBody = $messageBody;
        $this->ctaText = $ctaText;
        $this->ctaLink = $ctaLink;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.contact-us-form-submission-confirmation');
    }


}
