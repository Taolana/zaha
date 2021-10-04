<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'name' => $this->name,
            'province_id' => $this->province_id,
            'region_id' => $this->region_id,
            'district_id'   => $this->district_id,
            'commune_id'   => $this->commune_id,
            'fokontany_id'   => $this->fokontany_id,
            'type'   => $this->type,
            'history'     => $this->history,
            'accessibility'      => $this->accessibility,
        ];
    }
}
