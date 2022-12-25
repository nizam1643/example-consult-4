<?php

namespace App\Http\Requests\Gender;

use Illuminate\Foundation\Http\FormRequest;

class StoreGenderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|in:Male,Female',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Sila isi gender, jangan biarkan kosong',
            'name.string' => 'Sila isi gender, dengan perkataan sahaja',
            'name.in' => 'Hanya boleh isi dengan Male atau Female sahaja',
        ];
    }
}
