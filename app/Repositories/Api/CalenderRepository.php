<?php

namespace App\Repositories\Api;

use App\Models\Calender;
use App\Models\Note;
use App\Models\PersonalEvent;
use App\Models\Task;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

class CalenderRepository
{
    use ApiResponseTrait;

    public function getTasks($calender, $year = '', $month = '')
    {
        $this->checkIfCalenderOwner($calender);

        return Task::query()
            ->join('task_lists', 'tasks.task_list_id', '=', 'task_lists.id')
            ->where('tasks.in_calender', 1)
            ->where('task_lists.user_id', auth()->user()->id)
            ->where('task_lists.calender_id', $calender->id)
            ->where('tasks.in_calender', 1)
            ->when($year, function ($q) use ($year) {
                return $q->whereYear('tasks.created_at', $year);
            })
            ->when($month, function ($q) use ($month) {
                return $q->whereMonth('tasks.created_at', $month);
            })
            ->get();
    }

    public function getNotes($calender, $year = '', $month = '')
    {
        $this->checkIfCalenderOwner($calender);

        return Note::query()
            ->where('user_id', auth()->user()->id)
            ->where('in_calender', 1)
            ->when($year, function ($q) use ($year) {
                return $q->whereYear('created_at', $year);
            })
            ->when($month, function ($q) use ($month) {
                return $q->whereMonth('created_at', $month);
            })
            ->get();
    }

    public function getPersonalEvents($calender, $year = '', $month = '')
    {
        $this->checkIfCalenderOwner($calender);

        return PersonalEvent::query()
            ->where('user_id', auth()->user()->id)
            ->where('calender_id', $calender->id)
            ->when($year, function ($q) use ($year) {
                return $q->whereYear('start_date', $year)->orWhereYear('end_date', $year);
            })
            ->when($month, function ($q) use ($month) {
                return $q->whereMonth('start_date', $month)->orWhereMonth('end_date', $month);
            })
            ->get();
    }

    public function checkIfCalenderOwner(Calender $calender)
    {
        if ($calender->user_id == auth()->user()->id) {
            return;
        }
        throw new HttpResponseException($this->failureMessage(json_decode('{}'), trans('api/main.access_denied'), 403));
    }
}
