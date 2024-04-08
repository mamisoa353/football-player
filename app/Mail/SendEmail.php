<?php

namespace App\Mail;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Swift_TransportException;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $produit;
    public $user;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Produit $produit)
    {
        $this->produit = $produit;
        $this->user = $user;
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view('emails')
            ->subject('Bienvenue sur notre site');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */

    public function commandeProduit()
    {
        $mail = 'mamisoarandria353@gmail.com';
        //  Mail::to($mail)->send(new SendEmail);
        Mail::to($mail)->send(new SendEmail($this->user, $this->produit));
        return redirect(url('listProduit'));
    }
}
