<?php

namespace App\Listeners;

use App\Mail\NewSpecialistBookedMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SpecialistBookedMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $userToMail = User::query()->where('id', '=', $event->specialistBooked->user_id)->first();
        if ($userToMail) {
            Mail::to($userToMail)
                ->send(new NewSpecialistBookedMail($userToMail, $event->specialistBooked));
        } else {
            throw new \Exception('User not found in the listener!!!');
        }

    }
}
