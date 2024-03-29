<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TaskFilesRequest;
use App\Http\Requests\Api\TaskRequest;
use App\Http\Requests\Api\TaskStatusRequest;
use App\Http\Resources\TaskResource;
use App\Models\File;
use App\Models\Task;
use App\Models\TaskList;
use App\Repositories\Api\TaskRepository;
use App\Traits\ApiResponseTrait;

/**
 * @group Tasks
 */
class TaskController extends Controller
{
    use ApiResponseTrait;

    private $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Tasks
     *
     * Display a listing of list's tasks.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(TaskList $taskList)
    {
        $tasks = $this->taskRepository->tasks($taskList);

        return $this->successMessage([
            'tasks' => TaskResource::collection($tasks),
        ]);
    }


    /**
     *  Store Task
     *
     * Store a newly created task in storage.
     *
     * @param TaskRequest $request
     * @param TaskList $taskList
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TaskRequest $request, TaskList $taskList)
    {
        $task = $this->taskRepository->create($taskList, $request->validated());

        return $this->successMessage([
            'task' => new TaskResource($task)
        ], '', 201);
    }

    /**
     * Update task
     *
     * Update the specified task in storage.
     *
     * @param TaskRequest $request
     * @param TaskList $taskList
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TaskRequest $request,TaskList $taskList, Task $task)
    {
        $task = $this->taskRepository->update($taskList, $task, $request->validated());

        return $this->successMessage([
            'task' => new TaskResource($task)
        ]);
    }

    /**
     * Delete task
     *
     * Remove the specified task from storage.
     *
     * @param TaskList $taskList
     * @param \App\Models\Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(TaskList $taskList, Task $task)
    {
        $this->taskRepository->delete($taskList, $task);

        return $this->successMessage(json_decode('{}'), '', 204);
    }

    /**
     *  Add files
     *
     * Add files to the specified task.
     *
     * @param TaskFilesRequest $request
     * @param Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function addFiles(TaskFilesRequest $request, Task $task)
    {
        $this->taskRepository->addTaskFiles($task, $request->all()['files']);

        return $this->successMessage(json_decode('{}'), '', 204);
    }

    /**
     * Delete file
     *
     * Remove the specified file from storage.
     *
     * @param Task $task
     * @param File $file
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteFile(Task $task, File $file)
    {
        $this->taskRepository->deleteTaskFile($task, $file);

        return $this->successMessage(json_decode('{}'), '', 204);
    }

    /**
     * Change status
     *
     * Change the status of the task.
     *
     * @param TaskStatusRequest $request
     * @param Task $task
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus(TaskStatusRequest $request, TaskList $taskList, Task $task)
    {
        $this->taskRepository->changeStatus($task, $request->status);

        return $this->successMessage(json_decode('{}'), '', 204);
    }
}
