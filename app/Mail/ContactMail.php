<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $messageContent;

    public function __construct($name, $email, $subject, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject('📩 Nouveau Message : ' . $this->subject)
            ->view('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'messageContent' => $this->messageContent,
            ]);
    }
}
