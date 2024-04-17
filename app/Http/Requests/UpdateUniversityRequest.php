<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUniversityRequest extends FormRequest
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
            'universityName' => 'required|string|max:255',
            'imageURL' => 'nullable|url',
            'country_id' => 'required|exists:countries,id',
            'year' => 'nullable|digits:4',
            'number_of_students' => 'nullable|integer',
            'student_to_staff_ratio' => 'nullable|numeric'
        ];
    }
}
