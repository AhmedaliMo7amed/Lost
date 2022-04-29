<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Review extends JsonResource
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
            'reviewID' => $this->id,
            'ownerID' => $this->owner_id,
            'reportID' => $this->report_id,
            'theifName' => $this->theifName,
            'theifNatID' => $this->theifNatID,
            'theifMobile' => $this->theifMobile,
            'theifPicture' => $this->theifPicture,
            'additional_info' => $this->additional_info,
            'Owner' => new Owner($this->storeOwner),
            'Report' => new Report($this->report)
        ];
    }
}
