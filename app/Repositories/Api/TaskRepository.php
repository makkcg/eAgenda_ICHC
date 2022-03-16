<?php

namespace App\Repositories\Api;

use App\Models\Task;
use App\Traits\ApiResponseTrait;
use App\Traits\FileTrait;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaskRepository
{
    use ApiResponseTrait, FileTrait;

    public function tasks($taskList)
    {
        $this->checkIfTaskListOwner($taskList);

        return $taskList->tasks;
    }

    public function create($taskList, $data)
    {
        $data['task_list_id'] = $taskList->id;
        $this->checkIfTaskListOwner($taskList);
        $task = Task::create($data);

        if (!empty($data['tags'])) {
            $task->tags()->sync($data['tags']);
        }

        if (!empty($data['files'])) {
            self::uploadFiles($data['files'], $task, 'tasks/');
        }

        return $task;
    }

    public function update($taskList, $task, $data)
    {
        $this->checkIfTaskListOwner($taskList);
        $data['task_list_id'] = $taskList->id;
        $task->update($data);

        $task->tags()->detach();
        if (!empty($data['tags'])) {
            $task->tags()->sync($data['tags']);
        }

        if (!empty($data['files'])) {
            self::uploadFiles($data['files'], $task, 'tasks/');
        }

        return $task;
    }

    public function delete($taskList, $task)
    {
        $this->checkIfTaskListOwner($taskList);
        self::deleteFiles($task->files());
        $task->tags()->detach();
        $task->delete();
    }

    private function checkIfTaskOwner($task)
    {
        $this->checkIfTaskListOwner($task->taskList);
    }

    private function checkIfTaskListOwner($taskList)
    {
        if ($taskList->user_id == auth()->user()->id) {
            return;
        }
        throw new HttpResponseException($this->failureMessage(json_decode('{}'), trans('api/main.access_denied'), 403));
    }

    public function addTaskFiles($task, $files)
    {
        $this->checkIfTaskOwner($task);

        if (!empty($files)) {
            self::uploadFiles($files, $task, 'tasks/');
        }
    }

    public function deleteTaskFile($task, $file)
    {
        if ($task->id != $file->fileable_id) {
            abort(404);
        }
        $this->checkIfTaskOwner($task);

        self::deleteFile($file->url);
        $file->delete();
    }

    public function changeStatus($task, $status)
    {
        $task->update(['status' => $status]);
    }
}
