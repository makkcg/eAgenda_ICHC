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
                return $q->whereYear('start_date', $year)->orWhereYear('end_date', $year);
            })
            ->when($month, function ($q) use ($month) {
                return $q->whereMonth('start_date', $month)->orWhereMonth('end_date', $month);
            })
            ->orderByDesc('start_date')
            ->get();
    }
}
