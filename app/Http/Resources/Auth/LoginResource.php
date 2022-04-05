<?php

namespace App\Http\Resources\Auth;

use App\Http\Resources\CalenderResource;
use App\Http\Resources\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'image' => $this->image_url,
            'access_token' => $this->access_token,
            'device_token' => $this->device_token,
            'country' => new CountryResource($this->country),
            'calenders' => CalenderResource::collection($this->calenders),
        ];
    }
}
