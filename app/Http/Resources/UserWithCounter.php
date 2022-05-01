<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserWithCounter extends JsonResource
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
            'userID' => $this->id,
            'report_count'=> $this->report_count,
            'fullName' => $this->firstName .' '. $this->lastName ,
            'email' => $this->email,
            'ContactInfo' => new Contact($this->contact)
        ];
    }
}
