<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserWithoutToken extends JsonResource
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
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'national_id' => $this->national_id,
            'avatar' =>config('constants.base_url').$this->avatar,
            'fullInfo'=>$this->fullInfo,
            'created_at' => $this->created_at->format('d/m'),
            'updated_at' => $this->updated_at->format('d/m'),
            'ContactInfo' => new Contact($this->contact)
        ];
    }
}
