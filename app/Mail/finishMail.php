<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class finishMail extends Mailable
{
    use Queueable, SerializesModels;
    public $pdfPath;
    public $order;
    public $snapToken;
    public $subs;
    public $template;
    /**
     * Create a new message instance.
     */
    public function __construct($order, $snapToken, $subs, $template, $pdfPath)
    {
        $this->pdfPath = $pdfPath;
        $this->order = $order;
        $this->snapToken = $snapToken;
        $this->subs = $subs;
        $this->template = $template;

        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Success',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'finishMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            $this->pdfPath
        ];
    }
}
