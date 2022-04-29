<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
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
            'contactID' => $this->id,
            'userID' => $this->user_id,
            'mobile_1' => $this->mobile_1,
            'mobile_2' => $this->mobile_2,
            'government' => $this->government,
            'city' => $this->city,
            'street' => $this->street,
            'facebookLink' => $this->facebookLink,
            'whatsapp' => $this->whatsapp,
            'created_at' => $this->created_at->format('d/m/y'),
            'updated_at' => $this->updated_at->format('d/m/y')
        ];
    }
}
