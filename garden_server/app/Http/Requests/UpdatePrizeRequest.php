<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrizeRequest extends FormRequest
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
            'name' => 'string',
            'body' => 'string',
            'expiration_date' => 'date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Please use a string as value for the name field',
            'description.string' => 'Please use a string as value for the description field',
            'expiration_date.date' => 'Please use a date as value for the expiration_date field',
        ];
    }
}
