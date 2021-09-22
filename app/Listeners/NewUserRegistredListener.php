<?php

namespace App\Listeners;

use App\Events\NewUserRegistredEvent;
use App\Http\Controllers\MailController;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserRegistredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRegistredEvent  $event
     * @return void
     */
    public function handle(NewUserRegistredEvent $event)
    {
        //dd($event->user);
        MailController::sendWelcomeMail($event->user);
    }
}
