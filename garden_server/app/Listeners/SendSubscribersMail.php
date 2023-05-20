<?php

namespace App\Listeners;

use App\Mail\NewArticleMail;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscribersMail
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
        $subscribedUsers = Subscriber::pluck('user_id')->toArray();
        foreach ($subscribedUsers as $subscribedUser) {
            $userToMail = User::query()->where('id', '=', $subscribedUser)->first();
            if ($userToMail) {
                Mail::to($userToMail)
                    ->send(new NewArticleMail($userToMail, $event->article));
            } else {
                throw new \Exception('User not found in the listener!!!');
            }
        }
    }
}
