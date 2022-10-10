<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TraineeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //this is to name the code variable
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'email'=> $this->email,
            'dob' => $this->dob,
            'logbooks' => LogbookResource::collection($this->whenLoaded('logbooks')),
            
        ];
    }
}
