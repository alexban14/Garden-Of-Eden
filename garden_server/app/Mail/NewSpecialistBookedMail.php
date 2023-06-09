<?php

namespace App\Mail;

use App\Events\Models\SpecialistBooked;
use App\Models\SpecialistBooking;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewSpecialistBookedMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $specialistBooked;
    /**
     * Create a new message instance.
     */
    public function __construct($user, $specialistBooked)
    {
        $this->user = $user;
        $this->specialistBooked = $specialistBooked;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmare pentru programarea unei sedinte cu un specialist wellness',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.new-booked-specialist_mail',
            with: [
                'name' => $this->user->name,
                'specialist' => $this->specialistBooked->specialist,
                'date' => $this->specialistBooked->date,
                'time' => $this->specialistBooked->time,
            ]
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
