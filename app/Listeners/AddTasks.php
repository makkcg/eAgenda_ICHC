<?php

namespace App\Listeners;

use App\Models\TaskList;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;

class AddTasks
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
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $list = TaskList::create([
            'user_id' => $event->user->id,
            'name' => 'My project',
            'color' => '#00ff00'
        ]);



        $list->tasks()->createMany([
            [
                'title' => 'First task',
                'due_date' => Carbon::tomorrow(),
                'notify' => 0,
                'status' => 0,
                'in_calender' => 0,
            ],
            [
                'title' => 'Second task',
                'due_date' => Carbon::tomorrow(),
                'notify' => 0,
                'status' => 0,
                'in_calender' => 0,
            ],
            [
                'title' => 'Third task',
                'due_date' => Carbon::tomorrow(),
                'notify' => 0,
                'status' => 0,
                'in_calender' => 0,
            ],
        ]);
    }
}
