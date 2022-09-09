<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceLowResource extends JsonResource
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
            'id' => $this->id,
            'height' => $this->height,
            'article' => $this->article,
            'percent' => $this->percent,
            'price' => $this->price_low,
            'priceOld' => $this->price__old_low,
            'is_show' => $this->is_show,
            'is_active' => $this->is_active,
        ];
    }
}
