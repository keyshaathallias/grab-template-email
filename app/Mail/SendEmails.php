<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmails extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $messageContent;
    public $qrCodeUrl;

    public function __construct($name, $messageContent, $qrCodeUrl)
    {
        $this->name = $name;
        $this->messageContent = $messageContent;
        $this->qrCodeUrl = $qrCodeUrl;
    }

    public function build() {
        return $this->subject('You Are Invited')
                    ->view('emails.email');
    }
}
