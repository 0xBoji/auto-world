<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
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
            'id' =>$this->id,
            'created_at' =>$this->created_at->format('d/m/Y'),
            'updated' =>$this->updated->format('d/m/Y'),
            'carImage' =>$this->carImage,
            'carName' =>$this->carName,
            'carBrand' =>$this->carBrand,
            'carID' =>$this->carID,
            'carModel' =>$this->carModel,
            'carPrice' =>$this->carPrice,
            'carYear' =>$this->carYear,
        ];
    }
}
