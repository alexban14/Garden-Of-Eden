<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'specialist' => ['string', 'required'],
            'date' => ['date', 'required'],
            'time' => ['string', 'required'],
            'email' => ['email', 'required'],
            'name' => ['string', 'required']
        ];
    }
}
