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
            'fokontany_id'   => $this->fokontany_id,
            'type'   => $this->type,
            'history'     => $this->history,
            'accessibility'      => $this->accessibility,
        ];
    }
}
