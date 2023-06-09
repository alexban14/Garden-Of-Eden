<?php

namespace App\Events\Models;

use App\Models\SpecialistBooking;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SpecialistBooked
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public SpecialistBooking $specialistBooked;
    /**
     * Create a new event instance.
     */
    public function __construct(SpecialistBooking $specialistBooked)
    {
        $this->specialistBooked = $specialistBooked;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
