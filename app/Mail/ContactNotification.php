<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    public function build(): self
    {
        return $this->from($this->contactData['email'])
                    ->subject("Nouveau message de {$this->contactData['name']} - Portfolio")
                    ->view('emails.contact-notification')
                    ->with([
                        'name' => $this->contactData['name'],
                        'email' => $this->contactData['email'],
                        'message' => $this->contactData['message']
                    ]);
    }
}