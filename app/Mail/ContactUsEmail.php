<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $th436445ewea
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), $this->data['name'])
                    ->subject('Contact Us Form Submission')
                    ->view('emails.contact_us');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Enquiry',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_us',
        );
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
}
