<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeretanaResurs extends JsonResource
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
            'ID: ' => $this->resource->id,
            'Naziv teretane: ' => $this->resource->naziv_teretane,
            'Lokacija: ' => $this->resource->lokacija,
            'Grad: ' => $this->resource->grad,
            'Broj članova: ' => $this->resource->broj_clanova,
        ];
    }
}
