<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PersonalEventRequest;
use App\Http\Resources\PersonalEventResource;
use App\Models\PersonalEvent;
use App\Repositories\Api\PersonalEventRepository;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group Personal Events
 */
class PersonalEventController extends Controller
{
    use ApiResponseTrait;

    private $personalEventRepository;

    public function __construct(PersonalEventRepository $personalEventRepository)
    {
        $this->personalEventRepository = $personalEventRepository;
    }

    /**
     * Personal Events
     *
     * Display a listing of the Personal Events.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return $this->successMessage([
            'personalEvents' => PersonalEventResource::collection(
                $this->personalEventRepository->personalEvents($request->input('calender_id', 0))
            ),
        ]);
    }

    /**
     * Store Personal Event
     *
     * Store a newly created Personal Event in storage.
     *
     * @param  PersonalEventRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PersonalEventRequest $request)
    {
        $personalEvent = $this->personalEventRepository->create($request->validated());

        return $this->successMessage([
            'personalEvent' => new PersonalEventResource($personalEvent)
        ], '', 201);
    }

    /**
     * Update personal event
     *
     * Update the specified personal event in storage.
     *
     * @param  PersonalEventRequest  $request
     * @param  \App\Models\PersonalEvent  $personalEvent
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PersonalEventRequest $request, PersonalEvent $personalEvent)
    {
        $personalEvent = $this->personalEventRepository->update($personalEvent, $request->validated());

        return $this->successMessage([
            'personalEvent' => new PersonalEventResource($personalEvent)
        ]);
    }

    /**
     * Delete personal event
     *
     * Remove the specified personal event from storage.
     *
     * @param  \App\Models\PersonalEvent  $personalEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalEvent $personalEvent)
    {
        $this->personalEventRepository->delete($personalEvent);

        return $this->successMessage(json_decode('{}'), '', 204);
    }
}
