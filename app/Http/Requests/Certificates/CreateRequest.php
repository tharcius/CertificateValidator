<?php

namespace App\Http\Requests\Certificates;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'conclusion_date' => 'required|date_format:d/m/Y',
            'course_id' => 'required|integer|min:1|exists:courses,id',
            'school_id' => 'required|integer|min:1|exists:schools,id',
            'student_id' => 'required|integer|min:1|exists:students,id',
        ];
    }
}
