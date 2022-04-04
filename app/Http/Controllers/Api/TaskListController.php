<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TaskListRequest;
use App\Http\Resources\TaskListResource;
use App\Models\TaskList;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * @group Task Lists
 */
class TaskListController extends Controller
{
    use ApiResponseTrait;

    /**
     * Task Lists
     *
     * Display a listing of the user's task lists.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successMessage([
            'lists' => TaskListResource::collection(TaskList::where('user_id', auth()->user()->id)->latest()->get()),
        ]);
    }

    /**
     * Store task list
     *
     * Store a newly created task list.
     *
     * @param  TaskListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskListRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $taskList = TaskList::create($data);

        return $this->successMessage([
            'task_list' => new TaskListResource($taskList)
        ], '', 201);
    }

    /**
     * Update task list
     *
     * Update the specified task list in storage.
     *
     * @param  TaskListRequest  $request
     * @param  \App\Models\TaskList  $taskList
     * @return \Illuminate\Http\Response
     */
    public function update(TaskListRequest $request, TaskList $taskList)
    {
        $this->checkIfOwner($taskList);
        $taskList->update($request->validated());

        return $this->successMessage([
            'tag' => new TaskListResource($taskList)
        ]);
    }

    /**
     * Delete task list
     *
     * Remove the specified task list from storage.
     *
     * @param  \App\Models\TaskList  $taskList
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskList $taskList)
    {
        $this->checkIfOwner($taskList);
        $taskList->delete();

        return $this->successMessage(json_decode('{}'), '', 204);
    }

    private function checkIfOwner($taskList)
    {
        if ($taskList->user_id == auth()->user()->id) {
            return;
        }
        throw new HttpResponseException($this->failureMessage(json_decode('{}'), trans('api/main.access_denied'), 403));
    }
}
