<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
            'titre' => 'required',
            'description' => 'required | max:1000',
            'category' => 'required',
            'contact_telephone' => 'nullable|max:8|min:8',
            'contact_email' => 'nullable | max:50 | email',
            'contact_fixe' => 'nullable | max:8',
            'sans_titre' => 'nullable',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
