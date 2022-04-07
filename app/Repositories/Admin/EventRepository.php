<?php

namespace App\Repositories\Admin;

use App\Models\Event;
use App\Traits\ApiResponseTrait;

class EventRepository
{
    use ApiResponseTrait;

    public function create($data)
    {
        foreach ($data['lang'] as $key => $value) {
            $data[$key] = $value;
        }

        return Event::create($data);
    }

    public function update($event, $data)
    {
        foreach ($data['lang'] as $locale => $fields) {
            $translation = $event->translateOrNew($locale);
            $translation->event_id = $event->id;
            $translation->locale = $locale;
            $translation->title = $fields['title'];
            $translation->save();
        }
        $event->update($data);

        return $event;
    }

    public function delete($event)
    {
        $event->delete();
    }
}
