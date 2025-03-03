<?php

namespace App\Mail;

use App\Models\Response;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RsvpResponseAlert extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Response $response
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'RSVP Received',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.rsvp-response-alert',
            with: [
                'response' => $this->response,
            ]
        );
    }
}
