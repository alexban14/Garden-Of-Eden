<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['string', 'required'],
            'body' => ['string', 'required'],
            'image' => ['string', 'required']
        ];
    }

//    customized error message for rules validation
    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a value for the title field',
            'title.string' => 'Please use a string as value for the title field',
            'body.required' => 'Please enter a value for the body field',
            'body.string' => 'Please use a string as value for the body field',
            'image.required' => 'Please enter a value for the image field',
            'image.string' => 'Please use a string as value for the image field',
        ];
    }
}
