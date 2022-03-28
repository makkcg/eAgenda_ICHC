<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
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
            'user_id' => $this->user_id,
            'title' => $this->title,
            'color' => $this->color,
            'body' => $this->body,
            'reminder' => $this->reminder,
            'reminder_timestamp' => $this->reminder_timestamp,
            'repetition' => $this->repetition,
            'in_calender' => $this->in_calender,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
