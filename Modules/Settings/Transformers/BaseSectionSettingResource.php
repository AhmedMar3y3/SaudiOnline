<?php

namespace Modules\Settings\Transformers;

use Laraeast\LaravelSettings\Facades\Settings;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseSectionSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        $image = optional(Settings::instance('reshade_image'))->getMediaResource('reshade_image');
        return [
            'link' => Settings::get('reshade_link'),
            'image' => $image ? ($image->first() ? $image->first()['url'] : 'https://placehold.co/600x400') : 'https://placehold.co/600x400',
        ];
    }
}
