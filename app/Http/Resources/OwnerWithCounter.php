<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerWithCounter extends JsonResource
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
            'ownerID' => $this->id,
            'reviews_count'=> $this->review_count,
            'fullName' => $this->firstName .' '. $this->lastName ,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'avatar' =>config('constants.base_url').$this->avatar,
            'Store' => new Store($this->store)
        ];
    }
}
