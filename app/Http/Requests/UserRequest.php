<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'communaute' => 'required',
            'paroisse_id' => ['required', 'unique:gestionnaires'],
            'telephone' => 'required|max:8|min:8',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:4|confirmed',
        ];
    }
}
