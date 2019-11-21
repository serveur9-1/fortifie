<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'paroisse' => 'required',
            'telephone' => 'required|max:8|min:8',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'required|min:4|confirmed',
        ];
    }
}
