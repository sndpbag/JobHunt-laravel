<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customValid extends FormRequest
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
            'category_name' => 'required|string:30',
        ];
    }

    public function messages(): array
    {
        return [
            'category_name.required' => 'The category name field is required.',
            'category_name.string' => 'The category name must be a string.',
            'category_name.max' => 'The category name cannot exceed 30 characters.',
        ];
    }
}
