<?php

namespace Modules\Settings\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => app_name(),
            'email' => Settings::get('email'),
            'location' => Settings::get('location'),
            'phone' => Settings::get('phone'),
            'facebook' => Settings::get('facebook'),
            'instagram' => Settings::get('instagram'),
            'youtube' => Settings::get('youtube'),
            'whatsapp' => Settings::get('whatsapp'),
            'description' => Settings::get('description'),
            'keywords' => Settings::get('keywords'),
            'meta_description' => Settings::get('meta_description'),
            'favicon' => app_favicon(),
            'logo' => app_logo(),
            // 'twitter' => Settings::get('twitter'),
            // 'android_app_id' => Settings::get('android_app_id'),
            // 'ios_app_id' => Settings::get('ios_app_id'),
            // 'current_android_version' => Settings::get('current_android_version'),
            // 'current_ios_version' => Settings::get('current_ios_version'),
            // 'android_force_update' => (boolean)Settings::get('android_force_update'),
            // 'ios_force_update' => (boolean)Settings::get('ios_force_update'),
            // 'order_minimum' => Settings::get('minimum_fees'),
            // 'delivery_fees' => Settings::get('delivery_fees'),
        ];
    }
}
