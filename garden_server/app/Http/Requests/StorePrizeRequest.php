<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrizeRequest extends FormRequest
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
            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
            'expiration_date' => ['date', 'after:tomorrow', 'required'],
            'user_id' => ['int', 'required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter a value for the name field',
            'name.string' => 'Please use a string as value for the name field',
            'description.required' => 'Please enter a value for the description field',
            'description.string' => 'Please use a string as value for the description field',
            'expiration_date.required' => 'Please enter a value for the expiration_date field',
            'expiration_date.date' => 'Please use a date as value for the expiration_date field',
        ];
    }
}
