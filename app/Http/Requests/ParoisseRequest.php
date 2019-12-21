<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParoisseRequest extends FormRequest
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
            'nom' => 'required|max:100',
            'telephone' => 'nullable|max:8|min:8',
            'fixe' => 'nullable|max:8|min:8',
            'email' => 'nullable|email',
            'ville_id' => 'required',
        ];
    }
}
