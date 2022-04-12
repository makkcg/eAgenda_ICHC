<?php

namespace App\Repositories\Api;

use App\Models\Event;
use App\Traits\ApiResponseTrait;

class EventRepository
{
    use ApiResponseTrait;

    public function events($year = '', $month = '')
    {
        return Event::query()
            ->when($year, function ($q) use ($year) {
                return $q->whereYear('date', $year);
            })
            ->when($month, function ($q) use ($month) {
                return $q->whereMonth('date', $month);
            })
            ->orderByDesc('date')
            ->get();
    }
}
