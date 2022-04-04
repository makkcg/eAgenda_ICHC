<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShowCalenderRequest;
use App\Http\Resources\CalenderResource;
use App\Http\Resources\NoteResource;
use App\Http\Resources\TaskResource;
use App\Models\Calender;
use App\Repositories\Api\CalenderRepository;
use App\Traits\ApiResponseTrait;

/**
 * @group Calender
 */
class CalenderController extends Controller
{
    use ApiResponseTrait;

    private $calenderRepository;

    public function __construct(CalenderRepository $calenderRepository)
    {
        $this->calenderRepository = $calenderRepository;
    }

    /**
     * Calenders
     *
     * Display a listing of calenders.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->successMessage(CalenderResource::collection(Calender::where('user_id', auth()->user()->id)->get()));
    }

    /**
     * Show Calender
     *
     * Display the specified Calender's events.
     *
     * @param  ShowCalenderRequest  $request
     * @param  \App\Models\Calender  $calender
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ShowCalenderRequest $request, Calender $calender)
    {
        return $this->successMessage([
            'id' => $calender->id,
            'name' => $calender->name,
            'color' => $calender->color,
            'tasks' => TaskResource::collection($this->calenderRepository->getTasks($calender, $request->input('year'), $request->input('month'))),
            'notes' => NoteResource::collection($this->calenderRepository->getNotes($calender, $request->input('year'), $request->input('month'))),
        ]);
    }
}
