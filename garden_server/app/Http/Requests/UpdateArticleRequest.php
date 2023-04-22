<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'title' => 'string',
            'body' => 'string',
            'image' => 'string',
            'user_id' => 'int',
        ];
    }

//    customized error message for rules validation
    public function messages(): array
    {
        return [
            'title.string' => 'Please use a string as value for the title field',
            'body.string' => 'Please use a string as value for the body field',
            'image.string' => 'Please use a string as value for the image field',
        ];
    }
}
