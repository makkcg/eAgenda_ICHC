<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VisualInformationResource extends JsonResource
{
    /**
     * Visual Information
     *
     * Get random Visual Information
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'icon' => $this->icon_url,
            'asset' => $this->asset_url,
        ];
    }
}
