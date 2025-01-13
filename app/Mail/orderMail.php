<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class orderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $snapToken;
    public $subs;
    public $template;
    public $kop;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $snapToken, $subs, $template, $kop)
    {
        $this->data = $data;
        $this->snapToken = $snapToken;
        $this->subs = $subs;
        $this->template = $template;
        $this->kop = $kop;
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Checkout Website',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'orderMail',
            with: ['image_path' => $this->kop]
        );
    }
    public function build()
{
    return $this->view('orderMail')
        ->attach(public_path('img/kop.png'), [
            'as' => 'kop.png',
            'mime' => 'image/png',
            'disposition' => 'inline',
            'cid' => 'kop.png',
        ]);
}

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    // public function attachments(): array
    //     {
    //           // Path gambar yang ada di public/img
    //         $path = public_path('img/kop.png'); // Menggunakan public_path() untuk gambar di folder public

    //         return [
    //             // Menambahkan gambar sebagai lampiran inline
    //             \Illuminate\Mail\Mailables\Attachment::fromPath($path)
    //                 ->as('kop.png') 
    //                 ->withMime('image/png')
    //         ];
    //     }
}


