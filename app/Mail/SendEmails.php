<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmails extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $messageContent;
    public $attachmentPath;

    public function __construct($name, $messageContent, $attachmentPath)
    {
        $this->name = $name;
        $this->messageContent = $messageContent;
        $this->attachmentPath = $attachmentPath;
    }

    public function build() {
        return $this->subject('You Are Invited')
                    ->view('emails.email')
                    ->attach($this->attachmentPath);
    }
}
