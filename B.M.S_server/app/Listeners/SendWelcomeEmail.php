<?php

namespace App\Listeners;

use App\Events\Models\UserCreated;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
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
     *
     * @param UserCreated $event
     */
    public function handle(object $event): void
    {
       Mail::to($event->user)
                ->send(new WelcomeMail($event->user));
    }
}
