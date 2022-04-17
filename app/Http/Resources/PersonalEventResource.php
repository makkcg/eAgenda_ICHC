<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalEventResource extends JsonResource
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
            'calender_id' => $this->calender_id,

            'title' => $this->title,
            'color' => $this->color,
            'description' => $this->description,

            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'all_day' => $this->all_day,

            'repeat_type' => $this->repeat_type,
            'repeat_every_type' => $this->repeat_every_type,
            'repeat_every' => $this->repeat_every,
            'repeat_end_type' => $this->repeat_end_type,
            'repeat_end' => $this->repeat_end,

            'reminder' => $this->reminder,

            'created_at' => $this->created_at,
        ];
    }
}
