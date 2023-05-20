<?php

namespace App\Subscribers\Models;

use App\Events\Models\ArticleCreated;
use App\Listeners\SendSubscribersMail;
use Illuminate\Events\Dispatcher;

class ArticleSubscriber
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ArticleCreated::class, SendSubscribersMail::class);
    }
}
