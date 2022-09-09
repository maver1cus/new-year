<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     */
    public function toArray($request, $type = 'rere')
    {
        return [
            'id' => $this->id,
            'type' => $type,
            'title' => $this->title,
            'hash' => $this->hash,
            'article' => $this->article,
            'titleHeading' => $this->title_heading,
            'prices' => PriceLowResource::collection($this->prices),
        ];
    }
}
