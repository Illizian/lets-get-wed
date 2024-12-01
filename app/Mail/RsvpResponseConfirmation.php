<?php

namespace App\Mail;

use App\Models\Response;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RsvpResponseConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Response $response
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thanks!',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.rsvp-response-confirmation',
            with: [
                'response' => $this->response,
            ]
        );
    }
}
