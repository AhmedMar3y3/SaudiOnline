<?php

namespace Modules\Articles\Http\Requests;

use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return $this->createRules();
        }

        return $this->updateRules();
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the create validation rules that apply to the request.
     *
     * @return array
     */
    public function createRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:3000000'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'image' => ['required', 'mimes:jpeg,jpg,png', 'max:1000'],
        ];
    }

    /**
     * Get the update validation rules that apply to the request.
     *
     * @return array
     */
    public function updateRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:300000'],
            // 'category_id' => ['required', 'integer', 'exists:categories,id'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png', 'max:1000'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('articles::articles.attributes');
    }
}
