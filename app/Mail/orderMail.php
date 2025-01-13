<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

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
        );
    
    }
    public function build()
    {
        $imageUrl = 'https://mardsoft.com/img/kop.png';
    $kop = Http::get($imageUrl)->body();
        return $this->view('orderMail')
        ->attachData($kop, 'kop.png', [
            'as' => 'kop.png',  // Nama file yang akan dilampirkan
            'mime' => 'image/png', // Tipe MIME gambar
            'disposition' => 'inline', // Menandakan bahwa gambar ini adalah inline
            'cid' => 'kop.png', // Content-ID untuk digunakan dalam HTML
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


