<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsSubmissionNotification extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;
    public $messageSubject;
    public $name;
    public $email;



    public function __construct($subject, $messageSubject,  $name, $email)
    {
        $this->subject = $subject;
        $this->messageSubject = $messageSubject;
        $this->name = $name;
        $this->email = $email;

    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.contact-us-form-submission-notification');
    }
}
