<?php

namespace App\Subscribers\Models;

use App\Events\Models\SpecialistBooked;
use App\Listeners\SpecialistBookedMail;
use Illuminate\Events\Dispatcher;

class SpecialistBookedSubscriber
{
    public function subscribe(Dispatcher $events): void
    {
        $events->listen(SpecialistBooked::class, SpecialistBookedMail::class);
    }
}
