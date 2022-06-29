<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Store extends JsonResource
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
            'storeID' => $this->id,
            'ownerID' => $this->owner_id,
            'storeName' => $this->storeName,
            'government' => $this->government,
            'city' => $this->city,
            'street' => $this->street,
            'storeMobile_1' => $this->storeMobile_1,
            'storeMobile_2' => $this->storeMobile_2,
            'facebookLink' => $this->facebookLink,
            'whatsapp' => $this->whatsapp,
            'created_at' => $this->created_at->format('d/m'),
            'updated_at' => $this->updated_at->format('d/m')
        ];
    }
}
