<?php

namespace Modules\Slieds\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class SlideResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            "id" => $this->id,
            "link" => $this->link,
            "image" => $this->getFirstMediaUrl(),
        ];
    }
}
