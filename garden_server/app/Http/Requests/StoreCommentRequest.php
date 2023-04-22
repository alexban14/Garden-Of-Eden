<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'body' => ['string', 'required'],
            'user_id' => ['int', 'required'],
            'article_id' => ['int', 'required'],
        ];
    }

    public function messages(): array
    {
        return [
            'body.required' => 'Please enter a value for the body field',
            'body.string' => 'Please use a string as value for the body field',
            'user_id.required' => 'Please enter a value for the user_id field',
            'user_id.int' => 'Please use an integer as value for the user_id field',
            'article_id.required' => 'Please enter a value for the article_id field',
            'article_id.int' => 'Please use an integer as value for the article_id field',
        ];
    }
}
