<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\EventRequest;
use App\Http\Resources\EventResource;
use App\Repositories\Api\EventRepository;
use App\Traits\ApiResponseTrait;

class EventController extends Controller
{
    use ApiResponseTrait;

    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * Events
     *
     * Display a listing of the Events.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(EventRequest $request)
    {
        return $this->successMessage([
            'events' => EventResource::collection(
                $this->eventRepository->events($request->input('year', ''), $request->input('month', ''))
            ),
        ]);
    }
}
