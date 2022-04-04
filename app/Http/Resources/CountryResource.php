<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'iso3' => $this->iso3,
            'iso2' => $this->iso2,
            'phonecode' => $this->phonecode,
            'capital' => $this->capital,
            'currency' => $this->currency,
            'currency_symbol' => $this->currency_symbol,
            'tld' => $this->tld,
            'native' => $this->native,
            'region' => $this->region,
            'subregion' => $this->subregion,
            'timezones' => $this->timezones,
            'translations' => $this->translations,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'emoji' => $this->emoji,
            'emojiU' => $this->emojiU,
            'flag' => $this->flag,
        ];
    }
}
