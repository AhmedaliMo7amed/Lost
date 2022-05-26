<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Owner extends JsonResource
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
            'token' => $this->token,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'avatar' =>config('constants.base_url').$this->avatar,
            'fullInfo'=>$this->fullInfo,
            'created_at' => $this->created_at->format('d/m/y'),
            'updated_at' => $this->updated_at->format('d/m/y'),
            'Store' => new Store($this->store)

        ];
    }
}
