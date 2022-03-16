<?php

namespace App\Listeners;

use App\Models\Tag;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddTags
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
        $event->user->tags()->createMany([
            [
                'name' => 'Work',
                'color' => '#ff0000'
            ],
            [
                'name' => 'Meetings',
                'color' => '#00ff00'
            ],
            [
                'name' => 'Personal project',
                'color' => '#0000ff'
            ],
        ]);
    }
}
