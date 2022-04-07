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
            'reminder' => $this->reminder,
            'reminder_timestamp' => $this->reminder_timestamp,
            'repetition' => $this->repetition,
            'created_at' => $this->created_at,
        ];
    }
}
