<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Counters extends JsonResource
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
            'Users' => $this->users,
            'Owners' => $this->owners,
            'Reports' => $this->reports,
            'Reviews' => $this->reviews,
        ];
    }
}
