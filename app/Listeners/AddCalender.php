<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;

class AddCalender
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
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->calenders()->create([
            'name' => $event->user->email,
            'color' => '#00ff00',
        ]);
    }
}
