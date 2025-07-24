<?php

namespace Modules\Settings\Transformers;

use Laraeast\LaravelSettings\Facades\Settings;
use Illuminate\Http\Resources\Json\JsonResource;

class AdsSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        $image = optional(Settings::instance('ads_image'))->getMediaResource('ads_image')->first();
        return [
            'link' => Settings::get('ads_link'),
            'image' => $image ? $image['url'] : 'https://placehold.co/600x400',
        ];
    }
}
