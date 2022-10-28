<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'gallery_id' => 'required',
            'category_id' => 'required',
            'name' => 'required',
            'route' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'gallery_id.required' => 'La galería es obligatoria',
            'category_id.required' => 'La categoría es obligatoria',
            'name.required' => 'El nombre es obligatorio',
            'route.required' => 'La imagen es obligatoria',
        ];
    }
}
