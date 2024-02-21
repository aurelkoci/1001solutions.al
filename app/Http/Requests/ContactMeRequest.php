<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => ['required', 'min:3', 'max:50',  'string'],
            'lastName' => ['required', 'max:50', 'min:3', 'string'],
            'email' => ['required', 'email:rfc,dns,strict,spoof,filter'],
            'phone' => ['sometimes', 'nullable', 'numeric', 'digits_between:8,15'],
            'message' => ['required', 'max:500', 'min:3', 'string'],
        ];
    }
}
