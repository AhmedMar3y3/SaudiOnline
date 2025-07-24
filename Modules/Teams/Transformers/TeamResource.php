<?php

namespace Modules\Teams\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        $img = $this->getFirstMediaUrl();

        return [
            "id" => $this->id,
            "name" => $this->name,
            "title" => $this->title,
            "image" => $this->when($img !== '', $img, asset('default_images/user_icon.jpg')),
        ];
    }
}
