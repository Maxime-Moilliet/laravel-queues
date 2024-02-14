<?php

namespace App\Listeners;

use App\Events\RegisterUserEvent;
use App\Mail\RegisterUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendRegisterUserMailListener
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
    public function handle(RegisterUserEvent $event): void
    {
        Mail::to($event->user)->send(new RegisterUserMail($event->user));
    }
}
