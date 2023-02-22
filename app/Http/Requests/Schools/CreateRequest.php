<?php

namespace App\Http\Requests\Schools;

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
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:60|min:5',
            'logo' => 'required|string|max:60|min:5',
            'certificate' => 'required|string|max:60|min:5'
        ];
    }
}
