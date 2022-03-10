<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'task_list_id' => $this->task_list_id,
            'title' => $this->title,
            'due_date' => $this->due_date,
            'notify' => $this->notify,
            'status' => $this->status,
            'in_calender' => $this->in_calender,
            'notes' => $this->notes,
            'files' => FileResource::collection($this->files),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
