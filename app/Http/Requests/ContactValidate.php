<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ContactValidate extends FormRequest
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
                'first_name' => 'required|max:25|min:3',
                'last_name' => 'required|max:25|min:3',
                'mo_no' => 'required|digits:10|integer',

        ];
    }
}
