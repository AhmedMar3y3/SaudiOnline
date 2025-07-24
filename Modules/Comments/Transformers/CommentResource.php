<?php

namespace Modules\Comments\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
