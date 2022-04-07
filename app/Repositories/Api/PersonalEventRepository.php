<?php

namespace App\Repositories\Api;

use App\Models\Calender;
use App\Models\PersonalEvent;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

class PersonalEventRepository
{
    use ApiResponseTrait;

    private $calenderRepository;

    public function __construct(CalenderRepository $calenderRepository)
    {
        $this->calenderRepository = $calenderRepository;
    }

    public function personalEvents($calenderId)
    {
        $this->calenderRepository->checkIfCalenderOwner(Calender::findOrFail($calenderId));

        return PersonalEvent::query()
            ->where('user_id', auth()->user()->id)
            ->where('calender_id', $calenderId)
            ->latest()
            ->get();
    }

    public function create($data)
    {
        $data['user_id'] = auth()->user()->id;

        return PersonalEvent::create($data);
    }

    public function update($personalEvent, $data)
    {
        $this->checkIfPersonalEventOwner($personalEvent);
        $personalEvent->update($data);

        return $personalEvent;
    }

    public function delete($personalEvent)
    {
        $this->checkIfPersonalEventOwner($personalEvent);
        $personalEvent->delete();
    }

    private function checkIfPersonalEventOwner($personalEvent)
    {
        if ($personalEvent->user_id == auth()->user()->id) {
            return;
        }
        throw new HttpResponseException($this->failureMessage(json_decode('{}'), trans('api/main.access_denied'), 403));
    }
}
