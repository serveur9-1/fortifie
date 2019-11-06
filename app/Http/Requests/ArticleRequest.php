<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'description' => 'required | max:1000',
            'category' => 'required',
            'paroisse' => 'required',
            'contact_telephone' => 'nullable | max:8',
            'contact_email' => 'nullable | max:50 | email',
            'contact_fixe' => 'nullable | max:8',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'debut' => 'required',
            'fin' => 'required',
            'heure_debut' => 'required',
            'heure_fin' => 'required'
        ];
    }
}
