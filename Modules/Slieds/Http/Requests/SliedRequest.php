<?php

namespace Modules\Slieds\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliedRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'link' => ['required', 'string', 'url'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
