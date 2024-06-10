<?php

namespace App\Listeners;

use App\Events\PodcastProcessed;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmailed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotification
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
    public function handle(PodcastProcessed $event): void
    {
        dd($event);
        //Mail::to('proshantochowdhury123@gmail.com')->send(new Sendmailed($event));
    }
}
