<?php

namespace Modules\Videos\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "sub_name" => $this->sub_name,
            "link" => $this->link,
        ];
    }
}
