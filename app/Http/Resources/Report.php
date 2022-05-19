<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Report extends JsonResource
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
            'reportID' => $this->id,
            'userID' => $this->user_id,
            'serialNumber' => $this->serialNumber,
            'type' => $this->type,
            'brand' => $this->brand,
            'model' => $this->model,
            'color' => $this->color,
            'RAM' => $this->RAM,
            'ROM' => $this->ROM,
            'frontCrach_top' => $this->frontCrach_top,
            'frontCrach_center' => $this->frontCrach_center,
            'frontCrach_bottom' => $this->frontCrach_bottom,
            'backCrach_top' => $this->backCrach_top,
            'backCrach_center' =>$this->backCrach_center,
            'backCrach_bottom' => $this->backCrach_bottom,
            'devicePicture' => config('constants.base_url').$this->devicePicture,
            'additional_info' => $this->additional_info,
            'status'=>$this->status,
            'created_at' => $this->created_at->format('d/m/y'),
            'updated_at' => $this->updated_at->format('d/m/y'),
            'user' => new UserWithoutToken($this->user),
        ];
    }
}
